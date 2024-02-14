<script src="jQuery/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="JS/requisicaoCadastro.js"></script> 
<script src="jQuery/bootstrap.bundle.min.js"></script>    
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
<?php

$conexao = mysqli_connect('localhost','root','','musicas');

// CADASTRAR NOVA MUSICA
if(isset($_FILES['file1']['name'])){

    
	
	$file = $_FILES['file1']['name'];
	//$novoNome = $file["name"];	
	$nome = $_POST['nome'];
	$titulo = $_POST['titulo'];
	$album = $_POST['album'];
	$genero = $_POST['genero'];
	$tempo = $_POST['tempo'];
	$data1 = $_POST['data1'];
	$novo = $_POST['novo'];
	$destaque = $_POST['destaque'];

   if($nome !=''){
    $banco = "INSERT INTO  musicatiabela(Nome, Titulo, Album, Genero, Tempo, Data1, Destaques, Novo, Musica) VALUES ('$nome','$titulo','$album','$genero','$tempo','$data1', '$destaque', '$novo','$file')";
    mysqli_query($conexao,$banco);
	
    move_uploaded_file($_FILES['file1']['tmp_name'],'musicas/'.$file);
   }

}


//BUSCAR MUSICA PARA ALTERAR OU ILIMINAR
if(isset($_POST['btBusca'])){

	
	

	$valor = $_POST['valor'];

	$banco = "SELECT *FROM musicatiabela WHERE  Nome like '%$valor%' OR Titulo like '%$valor%'";
	$dados = mysqli_query($conexao,$banco);
	
	
echo "
<table id='tabela' class='tamanho table table-hover rounded-top btn-primary'>
	 <tbody >
		   <tr>
			   <td class='sons'>Nome</td>
			   <td class='sons'>Titulo</td>
			   <td class='sons'>Album</td>
			   <td class='sons'>Genero</td>
			   <td class='sons'>Data</td>
			   <td class='sons'>Botao</td>
		   </tr>";
		   while($resultado = mysqli_fetch_array($dados)){
echo "
		   <tr>
		   <td>$resultado[Nome]</td>
		   <td>$resultado[Titulo]</td>
		   <td>$resultado[Album]</td>
		   <td>$resultado[Genero]</td>
		   <td>$resultado[Data1]</td>
		   <td><a href='#' data-idmusica='$resultado[Id]' class='link'  ><li class='fa fa-edit text-white'></li></a>
		   <a href='#' data-idmusica1='$resultado[Id]' class='link1'   ><li class='fa fa-remove text-white'></li></a>

		  </tr>";
		 }
		 
		 
echo"                        
		  
		  </tbody >

 </table>
		  "; 
}



//BUSCAR MUSICAS PARA PAGINA PRINCIPAL

/*
if(isset($_POST['busca'])){

$pesquisar = $_POST['pesq'];

$result_pesq = "SELECT * FROM tiabelamusic WHERE nome LIKE '%$pesquisar%' LIMIT 5";

$dados_pesq = mysqli_query($connect, $result_pesq);

while($linhas_dados = mysqli_fetch_array($dados_pesq)){
echo "
	  <div class='col'>
		<div class='card shadow-sm'>
		<div class='audio'>
  <audio class='musica' id='son1' controls poster='' >

<source src='musvid/$linhas_dados[file1]' type='audio/mpeg'>
   
Não foi possivel carregar o audio
</audio>
		</div> 
		  <div class='card-body'>
			<p class='card-text' id='nomeMusica'>$linhas_dados[nome] : $linhas_dados[titulo]</p>
			<div class='d-flex justify-content-between align-items-center'>
			  <div class='btn-group'>
				<button type='button' class='btn btn-sm btn-outline-secondary' id='bt1'>Play</button>
				<button type='button' class='btn btn-sm btn-outline-secondary' id='Button1'>Pause</button>  
				<button type='button' class='btn btn-sm btn-outline-secondary'>Download</button>
			  </div>
			  <small class='text-muted'>$linhas_dados[tempo]</small>
			</div>
		  </div>
		</div>
	  </div>
	
	";

}

} 
else{
$banco = "SELECT * FROM tiabelamusic";

$dados = mysqli_query($conexao, $banco);

while ($resultado = mysqli_fetch_array($dados)) {

 echo "
	  <div class='col'>
		<div class='card shadow-sm'>
		<div class='audio'>
  <audio class='musica' id='son1' controls poster='' >

<source src='musvid/$resultado[file1]' type='audio/mpeg'>
   
Não foi possivel carregar o audio
</audio>
		</div> 
		  <div class='card-body'>
			<p class='card-text' id='nomeMusica'>$resultado[nome] : $resultado[titulo]</p>
			<div class='d-flex justify-content-between align-items-center'>
			  <div class='btn-group'>
				<button type='button' class='btn btn-sm btn-outline-secondary' id='bt'>Play</button>
				<button type='button' class='btn btn-sm btn-outline-secondary' id='Button1'>Pause</button>  
				<button type='button' class='btn btn-sm btn-outline-secondary'>Download</button>
			  </div>
			  <small class='text-muted'>$resultado[tempo]</small>
			</div>
		  </div>
		</div>
	  </div>
	
	";
 
}
  
}

*/



?>


<!-- MODAL -->



<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5 class="modal-title" id="exampleModalLabel">Musica Iliminada com Sucesso...</h5>
                    </div>
                    
                </div>
            </div>
        </div>