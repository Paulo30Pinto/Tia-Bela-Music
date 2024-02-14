<?php
date_default_timezone_set('Africa/Luanda');
session_start();
$conexao = mysqli_connect('localhost','root','','musicas');

  $dados = "SELECT * FROM faleconnosco ORDER BY id DESC ";
  $banco = mysqli_query($conexao,$dados);

?>

<!doctype html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cadastro De Misicas">
    <meta name="author" content="Paulo Pinto">
  <!--  <script src="jQuery/jquery-3.5.1.min.js"></script> -->
    <script src="jQuery/jquery-1.9.1.min.js"></script>
    <script src="jQuery/bootstrap.bundle.min.js"></script>
    <meta name="generator" content="Paulo Bunga">
    <script src="jQuery/index.js"></script>
    <title>TIA BELA MUSIC</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">

    <script src="JS/home.js"></script>    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/test.css">
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/fontawesome.css" rel="stylesheet">

      <link rel="stylesheet" href="css/home.css">

      <style>
      main{
        text-align: center !important; 
        
        
      }
      #dialogo{
        text-align: left !important;
        text-indent: 15px;

      }
      .col-sm-6{
        
        margin-left: auto;
        margin-right: auto;
        
      }
      #texto{
        width: 100% !important;
      }
      .spinner-grow{
        display: inline;
        background: rgba(0,0,0,0);
        -webkit-animation-duration:3.5s !important; 
        animation-duration:3.5s !important; 
       

      }
      #dialogo{
        height: 100%;
        max-height: 900px; 
        overflow-y: scroll;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
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
           
          <h4 class="text-white">sobre</h4>
          <p class="text-muted">Está pagina tem como objetivos promover novos talentos para mais informação 
              contacta-nos pelo whatsapp: <strong>927148025</strong> ou pelo nosso <a href="">email</a>
          </p>   
        </div>

        <div class="col-sm-4 offset-md-1 py-4" id="navMen">
          <h4 class="text-white"></h4>
          <ul class="list-unstyled ps-0" id="MenUl">
            <li class="mb-1"><a href="index.php" class="nav-link text-white">Home</a></li>
            <li class="mb-1"><a href="NovosTalentos.php" class="nav-link text-white">Novos Talentos</a></li>
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

      <li class="nav-item"><a href="FaleConosco.php" class="nav-link text-white">Fale conosco</a></li>
      
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
      <button id="fixOf" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <a href="#navbarHeader"><span class="navbar-toggler-icon"></span></a>
      </button>
      </div>
    </div>
  </div>
</header>
<main class="form-signin py-5">
  <section id="dialogo" class="bg-light  col-sm-6">
  <?php
  while($resultado = mysqli_fetch_array($banco)){
    echo"
 
    <p class='text-dark>'<a href='$resultado[email]' target='_blank' class='link'><span class='link-primary'>$resultado[nome]</span></a> - <span class='text-secondary'><b>$resultado[data2]</b></span><br>
    $resultado[mensagem] 
    </p>

";
  }
     ?>
  </section>
  <form action="fale.php" method="POST">

    <div class="form-floating col-sm-6 py-2" id="form">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Escreva seu nome" required>
      <label class="text-dark" for="nome">Nome</label>
      <div class="invalid-feedback">
                preencha este campo porfavor...
      </div>
    </div>
    <div class="form-floating col-sm-6 py-2">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label class="text-dark" for="email">Emai</label>
    </div>
    <div class="form-floating col-sm-6 py-2">
      <input type="text" class="form-control" id="numero" name="numero" placeholder="escreva seu terminal">
      <label class="text-dark" for="numero">Contacto</label>
    </div>
    <div class="form-floating col-sm-6 py-2">
    <p class="text-dark" for=""><b class="spinner-grow">Deixa seu comentario</b></p>
      <textarea name="texto" id="texto" cols="" rows="10" placeholder="deixa seu comentario" required></textarea>
      <div class="invalid-feedback">
                preencha este campo porfavor...
      </div>
    </div>
  
    <div class="col-sm-6">
    <button class="w-100 btn btn-lg btn-primary" name="enviar" id="enviar" type="submit">Enviar</button>
    </div>
  </form>
</main>


<footer class="text-muted py-5 bg-dark">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
      </a>
    </p>
    <p class="mb-1"><b>Para mais informação contacte-nos</b><a href="login.php" target="_blank" rel="noopener noreferrer" class="text-dark">.</a></p>
      <p class="mb-0">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg>
        <span> paulobunga16@gmail.com</span></p>
    <p class="mb-0">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
      <span> 927148025</span></p>
    <p class="mb-0">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
      <span> 929826902</span></p>
      
      <div class="social">
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                    <a href="http://www.facebook.com" target="_blank">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
                    </a>
                    </li>

                    <li>
                    <a href="http://www.youtube.com" target="_blank">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
                    </a>
                    </li>
                    <li>
                    <a href="http://www.instagran.com" target="_blanck">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
                    </a>
                    </li>
                </ul>
            </div>
  </div>

</footer>
  </body>

    
<script>
  
</script>
      

</html>
