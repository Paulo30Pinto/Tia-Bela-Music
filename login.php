<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog De Musica">
    <meta name="author" content="Paulo Bunga, Celestino Fragoso">
    <script src="jQuery/jquery-3.5.1.min.js"></script>
        <script src="jQuery/bootstrap.bundle.min.js"></script>  
    <script type="text/javascript" src="JS/requisicaoCadastro.js"></script>
    <meta name="generator" content="TiaBelaMusic 0.83.1">
    <title>Tia Bela Music</title>
    <link rel="icon" href="img/Logo.png">

   

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      body{
        background-image: url(img/BLOGBUMA.jpg) !important;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="CSS/signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg-dark text-light">
  <input type="hidden"  id="valor">
  
<main class="form-signin">
  <form>
    <img class="mb-4" src="img/Logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal bg-dark">Faça o seu Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com">
      <label class="text-dark" for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="pass" placeholder="Password">
      <label class="text-dark" for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3">
      <label class="bg-dark">
        <input type="checkbox" value="remember-me"> Gravar Senha
      </label>
    </div>
    <a href="#" class="w-100 btn btn-lg btn-primary" id="btLogin">Login</a>
    <p class="mt-5 mb-3 text-muted">&copy; TIA BELA MUSIC</p>
  </form>
</main>


    
  </body>
</html>
