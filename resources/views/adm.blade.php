<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resumo de Vendas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h1 class="mb-4 text-center">Resumo de Vendas</h1>

    <div class="row g-4 justify-content-center">
        <!-- Vendas Geradas -->
        <div class="col-md-4">
            <div class="card border-primary text-primary">
                <div class="card-body text-center">
                    <h5 class="card-title">Vendas Geradas</h5>
                    <p class="card-text display-5" id="vendasGeradas">R$ {{$pagamentos_pendentes}}</p>
                </div>
            </div>
        </div>

        <!-- Vendas Pagas -->
        <div class="col-md-4">
            <div class="card border-success text-success">
                <div class="card-body text-center">
                    <h5 class="card-title">Vendas Pagas</h5>
                    <p class="card-text display-5" id="vendasPagas">R$ {{$pagamentos_paid}}</p>
                </div>
            </div>
        </div>

        <!-- Vendas Expiradas -->
        <div class="col-md-4">
            <div class="card border-danger text-danger">
                <div class="card-body text-center">
                    <h5 class="card-title">Vendas Expiradas</h5>
                    <p class="card-text display-5" id="vendasExpiradas">R$ {{$pagamentos_expired}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Opcional: Script para atualizar valores dinamicamente -->
<script>
    // Aqui você pode carregar os dados dinamicamente, por exemplo:
    const vendas = {
        geradas: "{{ $pagamentos_pendentes }}"
        pagas: "{{ $pagamentos_paid }}",
        expiradas: "{{ $pagamentos_expired }}"
    };

    document.getElementById('vendasGeradas').textContent = `R$ ${vendas.geradas.toLocaleString('pt-BR', {minimumFractionDigits: 2})}`;
    document.getElementById('vendasPagas').textContent = `R$ ${vendas.pagas.toLocaleString('pt-BR', {minimumFractionDigits: 2})}`;
    document.getElementById('vendasExpiradas').textContent = `R$ ${vendas.expiradas.toLocaleString('pt-BR', {minimumFractionDigits: 2})}`;
</script>

</body>
</html>
