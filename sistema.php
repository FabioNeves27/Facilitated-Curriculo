<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Facilitated Curriculum</title>
</head>

<body class="fundo2">
  <!--Menu Navegação-->
  <nav class="navbar navbar-expand-lg navbar-light cor1">
    <div class="container-fluid">
      <div class="navbar-brand d-flex align-items-center"><img src="img/logo1.png" alt="" style="height: 80px;">
        <h5>Facilitated<br>Curriculum</h5>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Modelos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="modelos.html">Jovem Aprendiz</a></li>
              <li><a class="dropdown-item" href="modelos.html">Primeiro Emprego</a></li>
              <li><a class="dropdown-item" href="modelos.html">Profissional</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.html">Sobre nós</a>
          </li>
          </li>
        </ul>
        <a class="btn btn-primary" href="index.html" role="button">Sair</a>
      </div>
    </div>
  </nav>
  <!--Carrosel-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/problemas.webp" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block vidro" style="color: black;">
          <h5>Problemas montando o próprio currículo?</h5>
          <p>Então Conheça o Facilitated Curriculum: Escolha e personalize o curriculo dos seus sonhos! Disponha de uma
            variedade de templates, para todos os gostos e preferências. Pois é... Nunca foi tão fácil fazer um
            currículo!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/pensando.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block vidro" style="color: black;">
          <h5>Não sabe por onde começar?</h5>
          <p>Não seja por isso! Acesse nosso blog e veja dicas de como montar um currículo campeão e dê aquele impulso
            na corrida por aquela vaga de emprego.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/8-melhores-modelos-formas-curriculo-celular-2023.jpg" class="d-block w-100" alt="..."
          style="height: 500px;">
        <div class="carousel-caption d-none d-md-block vidro" style="color: black;">
          <h5>Conheça nossos modelos</h5>
          <p>Desfrute de uma variedade de templates de currículos para alavancar sua competitividade no mercado de
            trabalho.Dê uma olhada em nossos modelos predefinidos. É só escolher um e preencher com seus dados, simples
            assim!
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<br>
  <!--Cards Modelos-->
  <h1 class="text-center">
    Crie um currículo online. Comece escolhendo um modelo:</h1>
  <br>
  <div class="card-group ">
    <div class="card" style="border: 4px solid; border-radius: 8px; margin: 0 10px;">
      <img src="img/WhatsApp Image 2023-05-14 at 14.37.50 (1).jpeg" class="card-img-top" alt="..."
        style="height: 500px;">
      <div class="card-body">
        <h5 class="card-title">Jovem Aprendiz</h5>
        <p>Quer começar a trabalhar desde cedo? Dê uma olhada em nossos modelos para currículos de Jovem Aprendiz!</p>
        <br>
        <a class="btn btn-primary" href="#" role="button">Veja mais</a>
      </div>
    </div>
    <div class="card" style="border: 4px solid; border-radius: 8px; margin: 0 10px;">
      <img src="img/WhatsApp Image 2023-05-14 at 14.38.21.jpeg" class="card-img-top" alt="..." style="height: 500px;">
      <div class="card-body">
        <h5 class="card-title">Primeiro Emprego</h5>
        <p>Conseguir o primeiro emprego é um desafio para muita gente, mas não para quem desfruta de nossos modelos de
          currículo!</p>
        <a class="btn btn-primary" href="#" role="button">Veja mais</a>
      </div>
    </div>
    <div class="card" style="border: 4px solid; border-radius: 8px; margin: 0 10px;">
      <img src="img/WhatsApp Image 2023-05-14 at 14.37.50 (1).jpeg" class="card-img-top" alt="..."
        style="height: 500px;">
      <div class="card-body">
        <h5 class="card-title">Profissional</h5>
        <p>Pare de sofrer com a concorrência, nossos currículos profissionais vão garantir sua vaga para um emprego
          melhor!</p>
        <a class="btn btn-primary" href="#" role="button">Veja mais</a>
      </div>
    </div>
  </div>
  <br>
</div>
<!--Como funciona-->
<div class="container-fluid text-center fundo1">
      <div class="d-flex flex-column justify-content-center">
        <br>
        <h1 class="text-center mb-5">Como funciona</h1>
        <div class="row align-items-center ">
          <div class="col-md-6">
            <img src="img/Design_sem_nome-removebg-preview.png" alt="Imagem" class="img-fluid mb-3"
              style="height: 400px;">
          </div>
          <div class="col-md-6">
            <h2>Escolha um Modelo.</h2>
            <p>Selecione um modelo de curriculos e personalize-o com suas informações.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid text-center fundo2" style="padding-top: 1em;">
      <div class="d-flex flex-column justify-content-center">
        <div class="row align-items-center ">
          <div class="col-md-6">
            <h2>Preenha seus dados</h2>
            <p>Preenha os campos destacados para o preenchimento do curriculo</p>
          </div>
          <div class="col-md-6">
            <img src="img/Monte_seu_Currículo__4_-removebg-preview.png" alt="Imagem" class="img-fluid mb-3"
              style="height: 400px;">
          </div>
        </div>
      </div>

    </div>
    
    <div class="container-fluid text-center fundo1" style="padding-top: 1em;">
      <div class="d-flex flex-column justify-content-center">
        <div class="row align-items-center ">
          <div class="col-md-6">
            <img src="img/Monte_seu_Currículo__2_-removebg-preview (1).png" alt="Imagem" class="img-fluid mb-3"
              style="height: 400px;">
          </div>
          <div class="col-md-6">
            <h2>Faça o download</h2>
            <p>Personalize o seu currículo com seu próprio estilo e Baixe seu currículo em PDF</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center" style="padding: 10% 0">
      <div class="container">
        <h1>Viu só, montar um currículo conosco é muito mais fácil.
          Experimente usar nossos modelos e saia na frente da concorrência!</h1>
      </div>
      <br>
      <a class="btn btn-primary" href="modelos.html" role="button">Conheça nossos modelos</a>
    </div>
<!--Rodape-->
    <footer class="rodape" style="border-top: 2px solid black;">
      <div class="container-rodape">

        <div class="cont-rodape">

          <img src="img/logo1.png" alt="" height="100px" width="100px">
          <p>Copyright © 2023</p>
          <p>Todos os direitos reservados</p>
        </div>

        <div class="cont-rodape">
          <h1>Curriculos</h1>
          <a href="formulario.html">Criar Curriculo</a>
          <a href="modelos.html">Modelos</a>
          <a href="blog.html">Dicas</a>
        </div>

        <div class="cont-rodape">
          <h1>Termos de uso</h1>
          <a href="sobre.html">Sobre</a>
          <a href="">Privacidade</a>
          <div class="d-flex justify-content-center">
          <a href=""><img src="img/email.png" alt=""></a>
          <a href="https://www.instagram.com/facilitatedcurriculum/"><img src="img/insta.png" alt=""></a>
          <a href="https://www.facebook.com/profile.php?id=61553145329514"><img src="img/face.png" alt=""></a>
        </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </html>