<?php


$conexao = mysqli_connect('localhost','root','','musicas');

if(isset($_POST['idMusica'])){
	
    $idMusica = $_POST['idMusica'];
    $banco = "SELECT *FROM musicatiabela WHERE Id ='$idMusica' ";
    $dados = mysqli_query($conexao,$banco);

    $resultado = mysqli_fetch_array($dados);

	echo json_encode($resultado);
	
}



if(isset($_FILES['file11']['name']) | isset($_POST['file111'])){

    $file = $_FILES['file11']['name'];
	if($file==''){
        $file = $_POST['file111'];
    }else{
        $file = $_FILES['file11']['name'];
    }
	
	$id = $_POST['idPri'];	
	$nome = $_POST['nome1'];
	$titulo = $_POST['titulo1'];
	$album = $_POST['album1'];
	$genero = $_POST['genero1'];
	$tempo = $_POST['tempo1'];
	$data1 = $_POST['data11'];
    $novo = $_POST['novo1'];
    $destaque = $_POST['destaque'];

    $banco = "UPDATE musicatiabela SET Nome='$nome',Titulo ='$titulo', Album ='$album' , Genero='$genero',Tempo='$tempo',Data1='$data1',Destaques='$destaque', Novo ='$novo',Musica='$file' WHERE Id='$id'";

    
    mysqli_query($conexao,$banco);

    move_uploaded_file($_FILES['file11']['tmp_name'],'musicas/'.$file);
}


//ILIMINAR MUSICA

if(isset($_POST['idIlim'])){
    $idIlim = $_POST['idIlim'];
    $file = $_POST['file'];

    $banco ="DELETE FROM musicatiabela WHERE Id = '$idIlim' ";
    mysqli_query($conexao,$banco);
    //$musica = mysqli_fetch_object($valor);
    
}



?>