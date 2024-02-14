<!doctype html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Baixar Musica">
    <meta name="author" content="Paulo Pinto">
    <script src="jQuery/jquery-3.5.1.min.js"></script>
   <!-- <script src="jQuery/music/jquery-1.9.1.min.js"></script> -->
    <script src="jQuery/bootstrap.bundle.min.js"></script>
    <meta name="generator" content="Paulo Bunga">
    <link rel="icon" href="img/Logo.png">

    <title>TIA BELA MUSIC</title>
<!--    <script src="jQuery/index.js"></script> -->
    <script src="JS/home.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/test.css">
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/fontawesome.css" rel="stylesheet">

      <link rel="stylesheet" href="CSS/home.css">

     <style>
  /*   #centro {

background-image: url(img/1.jpg) !important;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
border-radius: 16px;
color: #fff;
font-weight: bold;

}
#dedo{
  /* width: 50% !important; */
/*    font-size: 25pt;
  }
#paragrafo1, #paragrafo {
        opacity: 1;
    }

    @media (max-width: 768px) {
        #flutuar {
            margin-left: 90%;
            margin-top: -51px;
            vertical-align: central;
        }

      }
      */
      .menu-fixo{
        position: fixed;
        top: 0;
        z-index: 999;
        width: 100%;
    }
    audio{
    /*  display: none; */
    }
      </style>

  </head>
  <body>

      <!--CABEÇALHO-->
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
            <form class="d-flex" method="POST">
          <input class="form-control me-2" type="search" placeholder="pesquisar música" name="textoPesq" id="textoPesq" aria-label="Search">
          <button class="btn btn-outline-success"  name="btPesq" id="btPesq">Pesquisar</button>
        </form>
          <h4 class="text-white">sobre</h4>
          <p class="text-muted">Está página tem como objetivos promover novos talentos para mais informação
          contacta-nos pelo whatsapp: <strong>927148025</strong> ou pelo nosso <a href="">email</a>
          </p>
        </div>

        <div class="col-sm-4 offset-md-1 py-4" id="navMen">
          <h4 class="text-white"></h4>
          <ul class="list-unstyled ps-0" id="MenUl">
            <li class="mb-1"><a href="index.php" id="home" class="nav-link text-white">Home</a></li>
            <li class="mb-1"><a href="NovosTalentos.php" id="talento" class="nav-link text-white">Novos Talentos</a></li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Genero</a>
          <ul class="dropdown-menu" id="DropMenu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="kuduro.php">KUDURO<br>Afro house</a></li>
            <li><a class="dropdown-item" href="hiphop.php">RAP<br>RNB</a></li>
            <li><a class="dropdown-item" href="kizomba.php">KIZOMBA<br>SEMBA</a></li>
            <li><a class="dropdown-item" href="Naija.php">NAIJA</a></li>
            <li><a class="dropdown-item" href="Outros.php">Outros</a></li>
          </ul>
        </li>

      <li class="nav-item"><a href="FaleConosco.php" id="fale" class="nav-link text-white">Fale conosco</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm" id="fixo">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="img/Logo.png" id="logo" alt="TIABELA MUSIC"/>

          <strong class="Joker">TIABELA MUSIC</strong>

      </a>
      <div id="flutuar">
      <svg id="aviso" width="16" height="16" fill="currentColor" class="bi bi-hand-index-fill text-warning" viewBox="0 0 16 16">
  <path d="M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002z"/>
</svg>
      <button id="fixOf" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <a href="#navbarHeader"><span class="navbar-toggler-icon"></span></a>
      </button>
      </div>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container" >
    <div class="row py-lg-5" id="centro">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" id="paragrafo1">Compartilhe sua música neste site!</h1>
        <p class="lead text-muted" id="paragrafo">Esta página tem como objetivo ajudar novos talentos...</p>
          <a href="novidades.php" id="novas" name="novas" class="btn btn-primary my-2">NOVIDADES</a>
          <a href="destaque.php" id="destaque" name="destaque" class="btn btn-primary my-2">DESTAQUE</a>

      </div>
    </div>
  </section>
  <div id="">

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
