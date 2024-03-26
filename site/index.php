<?php
include "dbconnect.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XetBack Analytics</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="style.css">

  <style>
    /* Estilos personalizados adicionados ao arquivo styles.css */
    .navbar {
      background-color: #232526;
    }

    .sidenav .offcanvas-header {
      background-color: #232526;
    }

    .container {
      margin-top: 4rem;
    }

    .carousel-container {
      background-color: #bacbd9;
      height: 250px;
      border-radius: 2px;

      text-align: justify;

      .logo {
        margin-top: 15px;
        width: 10%;
        height: 10%;
      }
    }

    .container-about {
      z-index: 2;
      background-color: #232526b3;
      border-radius: 5px;
      opacity: 0.8;
      margin-top: 4rem;
      margin-bottom: 5rem;
      -webkit-box-shadow: 0px 0px 59px 5px rgba(0, 0, 0, 0.66);
      -moz-box-shadow: 0px 0px 59px 5px rgba(0, 0, 0, 0.66);
      box-shadow: 0px 0px 59px 5px rgba(0, 0, 0, 0.66);
      /* Adiciona algum espaço interno para o conteúdo */
      padding: 1rem;
      /* Define a altura do contêiner como 70% da altura da tela */
      height: 50vh;
      /* Adiciona uma barra de rolagem vertical se o conteúdo for maior que o contêiner */
      overflow: auto;
    }

    .about-text {
      color: #fff;
      text-align: justify;
      margin-bottom: 0;
      /* Remove a margem inferior do parágrafo para evitar espaço extra */
    }

    .about-text {
      color: #fff;
      text-align: justify;
    }

    .recuo {
      text-indent: 4em
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      /* Garante que o conteúdo ocupe pelo menos toda a altura da janela visível */
    }

    .footer {
      margin-top: auto;
      /* Coloca o rodapé no final da página */
    }

    @media only screen and (max-width: 600px) {
      .carousel-container {
        background-color: #bacbd9;
        height: 500px;

        .logo {
          margin-top: 15px;
          width: 50%;
          height: 50%;
        }
      }
    }
  </style>
</head>

<body>
  <!-- Sticky Header -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
      <span class="material-symbols-outlined" style="color: aliceblue;" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        menu
      </span>
      <a class="navbar-brand" href="#">XetBack Analytics</a>
      <!-- Adicione itens de navegação aqui, se necessário -->
    </div>
  </nav>

  <!-- Side Canvas -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header row mx-0 px-0">
      <div class="col-10">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"> Menu</h5>
      </div>

      <div class="col-2">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body mx-0 px-0">
        <div class="list-group list-group-flush">
          <a type="button" class="list-group-item list-group-item-action" href="index.php">Home</a>
          <a type="button" class="list-group-item list-group-item-action" href="cadastro.php">Cadastro</a>
          <a type="button" class="list-group-item list-group-item-action" href="login.php">Login</a>
          <a type="button" class="list-group-item list-group-item-action" href="usuario.php">Avaliação</a>
          <a type="button" class="list-group-item list-group-item-action" disabled>Sobre</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Conteúdo Principal -->
  <div class="container">
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="carousel-container">
            <div class="row d-flex justify-content-center pt-5">
              <img class="col-12 col-lg-2 logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/ChatGPT_logo.svg/1024px-ChatGPT_logo.svg.png" alt="Slide 1">
              <p class="col-12 col-lg-6 mt-4">
                Descubra o mundo digital com o ChatGPT - sua chance de conectar-se e expandir horizontes! Ideal para diversos públicos, esta tecnologia traz uma oportunidade única para interagir, aprender e crescer socialmente. Entre agora e faça parte da comunidade!
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-container">
            <div class="row d-flex justify-content-center pt-5">
              <img class="col-12 col-lg-2 logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/ChatGPT_logo.svg/1024px-ChatGPT_logo.svg.png" alt="Slide 1">
              <p class="col-12 col-lg-6 mt-4">
                Melhore seu uso do ChatGPT com a nossa ferramenta desenhada para facilitar sua vida. Nossa aplicação web é a combinação perfeita de intuitividade e avaliação eficiente, fornecendo um ambiente amigável para que você possa se dedicar mais ao que importa. Venha conhecer e ver a diferença que a simplicidade faz!
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-container">
            <div class="row d-flex justify-content-center pt-5">
              <img class="col-12 col-lg-2 logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/ChatGPT_logo.svg/1024px-ChatGPT_logo.svg.png" alt="Slide 1">
              <p class="col-12 col-lg-6 mt-4">
                A sua experiência com IA pode melhorar de maneira incrível, e você pode ajudar! No XetBack Analytics, valorizamos o seu feedback para otimizar a interface do ChatGPT. Comente, critique, inspire mudanças. Seja parte ativa dessa evolução tecnológica e nos ajude a aperfeiçoar. Participe e dê sua opinião já!
              </p>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Features -->
    <div class="row mt-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://cdn.pixabay.com/photo/2018/03/27/21/43/startup-3267505_1280.jpg" width="350px" height="200" class="card-img-top" alt="Feature 1">
          <div class="card-body">
            <h5 class="card-title">Você é o especialista que precisamos!</h5>
            <p class="card-text">Com seu feedback valioso no XetBack Analytics, podemos elevar a interface do ChatGPT a novos patamares. Avalie, sugira, melhore conosco. O seu ponto de vista é a chave para a inovação que buscamos.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://cdn.pixabay.com/photo/2015/07/17/22/42/startup-849804_1280.jpg" width="350px" height="200" class="card-img-top" alt="Feature 2">
          <div class="card-body">
            <h5 class="card-title">Seja a voz que guia nossas melhorias!</h5>
            <p class="card-text"> Convidamos você a participar da nossa pesquisa de satisfação preenchendo o formulário disponível. É rápido, fácil e sua contribuição é fundamental para nós. Vamos construir juntos um serviço cada vez melhor!</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://cdn.pixabay.com/photo/2020/02/28/16/18/board-4887880_1280.jpg" width="350px" height="200" class="card-img-top" alt="Feature 3">
          <div class="card-body">
            <h5 class="card-title">Obrigado por compartilhar sua voz!</h5>
            <p class="card-text">Cada formulário preenchido nos ajuda a definir o caminho rumo à excelência. Apreciamos sua disposição em impulsionar nosso desenvolvimento. Continue fazendo parte da nossa jornada para um futuro brilhante!</p>
          </div>
        </div>
      </div>
    </div>

    <!-- About -->
    <div class="container-about position-relative bg-dark">
      <div class="position-absolute top-50 start-0 translate-middle-y">
        <h2 class="text-center text-white">Sobre</h2>
        <p class="about-text mx-5 recuo">Desenvolver uma interface de usuário acessível para o
          ChatGPT é relevante porque visa proporcionar uma experiência inclusiva a todos os usuários,
          independentemente
          de suas habilidades. Considerando os requisitos estabelecidos, o conhecimento aprofundado
          sobre
          o perfil dos usuários favorece a elaboração de uma interface mais amigável, atendendo às
          necessidades específicas de diferentes grupos.

          Sabendo disso, essa aplicação WEB tem por finalidade auxiliar a encontrar adversidades no
          uso do
          CHATGPT, possibilitando assim que cada vez mais usuários usufruam de forma satisfatória.
        </p>
      </div>
    </div>

  </div>

  <!-- Sticky Footer -->
  <footer class="footer py-3 bg-light">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <a style="text-decoration: none; color:#232526" href="https://openai.com/chatgpt">ChatGPT</a>
        </div>
      </div>
      <span class="text-muted">© 2024 XetBack Analytics. Todos os direitos reservados.</span>
    </div>
  </footer>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>