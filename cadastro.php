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
    <meta name="description" content="Cadastro de Misicas">
    <meta name="author" content="Paulo Pinto, Celestino Fragoso">
    <meta name="generator" content="Paulo Bunga">
    <title>TIA BELA MUSIC</title>
    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">

    
    
        <script src="jQuery/jquery-3.5.1.min.js"></script>
        <script src="jQuery/bootstrap.bundle.min.js"></script>      
    <script type="text/javascript" src="JS/cadatro1.js"></script>
    <script type="text/javascript" src="JS/requisicaoCadastro.js"></script>

    <!-- Bootstrap CSS -->
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
 <link href="bootstrap/fontawesome.css" rel="stylesheet">
   <link type="text/css" href="CSS/blog.css" rel="stylesheet" />
    
<style type="text/css">
  .esonde{
  
    display: none !important;
}

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
        display: inline !important;
        background: rgba(0,0,0,0) !important;
        -webkit-animation-duration:5.5s !important; 
        animation-duration:5.5s !important; 
       

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


</style>

  </head>
  <body>


<div class="jumbotron jumbotron-fluid" id="formCadastrar">
      <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-5">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="img/Logo.png" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                  <a class="nav-link btn-primary text-white" href="#" id="Ad"><b>Adicionar Nova Musica</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-primary text-white" aria-current="page" href="#" id="ini"><b>Alterar Musica</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-primary text-white" aria-current="page" href="#" id="fale"><b>Fale Connosco</b></a>
                </li> 
              </ul>
              <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  id="busca1"  >
                <button class="btn btn-outline-light" type="submit"  id="busca2" >Search</button>
              </div>
            </div>
          </div>
        </nav>
    
<!--ADICIONAR MUSICA NOVA-->

    <form  method="POST" class="col-md-15 cover-container" enctype="multipart/form-data" id="formMusica">
  
      <div class="row">
        <fieldset class="col-lg-6" >

           <div class="form-group">
             <label for="firstName" class="form-label">Nome</label>
             <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Do Musico" autofocus required>
          </div>
          <div class="form-group">
            <label for="lastName" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo da musica"  required>
         </div>
         <div class="form-group">
            <label for="firstName" class="form-label">Album</label>
            <input type="text" class="form-control" name="album" id="album" placeholder="Album do artista">
         </div>
         <div class="form-group">
            <label for="firstName" class="form-label">Destaque</label>
            <select class="form-select form-control" name="destaque" id="destaque">
              <option selected>Selecione o Nivel de destaque</option>
              <option value="1">Alto</option>
              <option value="2">Medio</option>
              <option value="3">Baixo</option>
        
            </select>
         </div><br>
         <div class="form-group">
            <label for="firstName" class="form-label">Novo Talento</label>
            <input type="radio" class="" name="novo" id="novo1" placeholder="" value="1">
            <label for="novo1">SIM</label>
            <input type="radio" class="" name="novo" id="novo0" placeholder="" value="0">
            <label for="novo0">Não</label>
         </div>
        
        </fieldset>

        <fieldset class="col-lg-6">
           
          <div class="form-group">
              <label for="lastName" class="form-label">Genero</label>
              <input type="text" class="form-control" name="genero" id="genero" placeholder="Genero da musica" value="">
         </div>
         <div class="form-group">
              <label for="lastName" class="form-label">Tempo</label>
              <input type="text" class="form-control" name="tempo" id="tempo" placeholder="Duração da musica" value="">
         </div>
         <div class="form-group">
              <label for="firstName" class="form-label">Data</label>
              <input type="date" class="form-control" name="data1" id="data1" placeholder="Data da musica" value="">
        </div><br>
        <div class="form-group">
              <label for="firstName" class="form-label">Musica</label>
              <input type="file" name="file1" id="arqMusica">
        </div>
            
       </fieldset>
     </div>
   <br>
    <button type="submit" class="btn btn-primary btn-lg" >
       <span class="oi oi-thumb-up"></span>
        Confirmar Pedido
    </button>
   </form>

<!--FORM EDITAR-->



<form class="col-md-15 cover-container" id="formEditar">
     
     <div id="mostra">
       <!--
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Titulo</th>
          <th>Genero</th>
          <th>Album</th>
          <th>Duração</th>
        </tr>
      </thead>
        -->
     </div>
</form>

      <form  method="POST" class="col-md-15 cover-container" enctype="multipart/form-data" id="formMusicaAlt">
      <input type="hidden" id="valor1">
      <input type="hidden" name="idPri" id="idPri">
      
      <div id="formAlt">
      <div class="row">
        <fieldset class="col-lg-6" >

           <div class="form-group">
             <label for="firstName" class="form-label">Nome</label>
             <input type="text" class="form-control" name="nome1" id="nome1" placeholder="Nome Do Musico" autofocus required>
          </div>
          <div class="form-group">
            <label for="lastName" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo1" id="titulo1" placeholder="Titulo da musica"  required>
         </div>
         <div class="form-group">
            <label for="firstName" class="form-label">Album</label>
            <input type="text" class="form-control" name="album1" id="album1" placeholder="Album do artista">
         </div>
         <div class="form-group">
            <label for="firstName" class="form-label">Destaque</label>
            <select class="form-select form-control" name="destaque" id="destaque">
              <option selected>Selecione o Nivel de destaque</option>
              <option value="1">Alto</option>
              <option value="2">Medio</option>
              <option value="3">Baixo</option>
        
            </select>
         </div><br>
         <div class="form-group">
            <label for="firstName" class="form-label">Novo Talento</label>
            <input type="radio" class="" name="novo1" id="novo11" placeholder="" value="1">
            <label for="novo1">SIM</label>
            <input type="radio" class="" name="novo1" id="novo01" placeholder="" value="0">
            <label for="novo0">Não</label>
         </div>
        
        </fieldset>

        <fieldset class="col-lg-6">
           
          <div class="form-group">
              <label for="lastName" class="form-label">Genero</label>
              <input type="text" class="form-control" name="genero1" id="genero1" placeholder="Genero da musica" value="">
         </div>
         <div class="form-group">
              <label for="lastName" class="form-label">Tempo</label>
              <input type="text" class="form-control" name="tempo1" id="tempo1" placeholder="Duração da musica" value="">
         </div>
         <div class="form-group">
              <label for="firstName" class="form-label">Data</label>
              <input type="date" class="form-control" name="data11" id="data11" placeholder="Data da musica" value="">
        </div><br>
        <div class="form-group">
              <label for="firstName" class="form-label">Musica</label>
              <input type="text" name="file111" id="arqMusica11" readonly>
              <input type="file" name="file11" id="arqMusica1">
        </div>
            
       </fieldset>
     </div>
   <br>
    <button type="submit" class="btn btn-primary btn-lg" >
       <span class="oi oi-thumb-up"></span>
        Confirmar Pedido
    </button>
    </div>
   </form>


  
      

   


  </div>
</div>
    



<!-- MODAL -->

<!--

        <div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5 class="modal-title" id="exampleModalLabel">Musica Cadastrada com Sucesso...</h5>
                    </div>
                    
                </div>
            </div>
        </div>   -->

              <!-- FORM FALE CONNOSCO -->

      <main class="form-signin py-5" id="oculto" >
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

  
    <div class="form-floating col-sm-6 py-2">
    <p class="text-dark" for=""><b class="spinner-grow">Deixa seu comentario</b></p>
      <textarea name="texto" id="texto" cols="" rows="10" placeholder="deixa seu comentario" required></textarea>
     
    </div>
  
    <div class="col-sm-6">
    <input class="w-100 btn btn-lg btn-primary" name="sand" id="send" type="submit" value="ENVIAR">
    </div>
  </form>
</main>


  </body>


</html>
