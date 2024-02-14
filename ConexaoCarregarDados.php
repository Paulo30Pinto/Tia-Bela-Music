
<script src="jQuery/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="JS/requisicaoCadastro.js"></script> 
<script src="jQuery/bootstrap.bundle.min.js"></script>    
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">

<?php
$conexao = mysqli_connect('localhost','root','','musicas');

$result_pesq = "SELECT *FROM musicatiabela";

$dados_pesq = mysqli_query($conexao, $result_pesq);

while($linhas_dados = mysqli_fetch_array($dados_pesq)){
echo "
	  <div class='col'>
		<div class='card shadow-sm'>
		<div class='audio'>
  <audio class='musica' id='son1' controls poster='' >

<source src='musicas/$linhas_dados[Musica]' type='audio/mpeg'>
   
Não foi possivel carregar o audio
</audio>
		</div> 
		  <div class='card-body'>
			<p class='card-text' id='nomeMusica'>$linhas_dados[Nome] : $linhas_dados[Titulo]</p>
			<div class='d-flex justify-content-between align-items-center'>
			  <div class='btn-group'>
				<button type='button' class='btn btn-sm btn-outline-secondary' id='bt1'>Play</button>
				<button type='button' class='btn btn-sm btn-outline-secondary' id='Button1'>Pause</button>  
				<button type='button' class='btn btn-sm btn-outline-secondary'>Download</button>
			  </div>
			  <small class='text-muted'>$linhas_dados[Tempo] min</small>
			</div>
		  </div>
		</div>
	  </div>
	
	";

}




?>