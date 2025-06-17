<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento PIX | Jadlog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 60px;
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .qr-code {
            width: 200px;
            height: 200px;
            margin: 0 auto;
            background: url('https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ $qrcode }}') no-repeat center center;
            background-size: cover;
        }

        .pix-code {
            word-break: break-all;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            margin-bottom: 15px;
        }

        .btn-copy {
            background-color: #dc0032;
            color: white;
            border: none;
        }

        .btn-copy:hover {
            background-color: #a90028;
        }

        .valor {
            font-size: 1.2rem;
            font-weight: bold;
            color: #28a745;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <img src="https://logodownload.org/wp-content/uploads/2019/02/jadlog-logo.png" alt="Jadlog" height="40">
        <h4 class="mt-4 text-danger font-weight-bold">Sua encomenda foi tributada</h4>
        <p class="text-dark">Para liberar o envio, realize o pagamento via PIX:</p>

        <div class="valor">💰 Valor: R${{ $value }}</div>

        <div class="qr-code my-4"></div>

        <p class="text-muted">Escaneie o QR Code ou copie o código abaixo:</p>

        <div class="pix-code" id="pixKey">
            {{ $qrcode }}
        </div>

        <button class="btn btn-copy btn-block" onclick="copiarPix()">📋 Copiar Código PIX</button>

        <p class="mt-4 text-muted">Após o pagamento, a entrega será liberada em até 3 dias úteis.</p>
    </div>

    <script>
        const id = "{{ $id }}"
        const url = `/getStatus/${id}`;

        const intervalo = setInterval(async () => {
            try {
                const response = await fetch(url);
                if (!response.ok) throw new Error("Erro na requisição");

                const data = await response.json();
                const status = data.status; // Ajuste conforme a estrutura do JSON retornado

                console.log(`Status da transação ${id}: ${status}`);

                if (status === "paid") {
                    window.location.href = '/pago'
                }
            } catch (error) {
                console.error("Erro ao consultar status:", error);
            }
        }, 2000);
        function copiarPix() {
            const texto = document.getElementById("pixKey").innerText;
            navigator.clipboard.writeText(texto).then(() => {
                alert("Código PIX copiado com sucesso!");
            }).catch(err => {
                alert("Erro ao copiar: " + err);
            });
        }
    </script>
</body>

</html>
