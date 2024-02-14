<?php

session_start();
$conexao = mysqli_connect('localhost','root','','musicas');

if(isset($_POST['enviar'])){

    
		
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$numero = $_POST['numero'];
	$texto = $_POST['texto'];


   
    $banco = "INSERT INTO  faleconnosco(nome, email, contacto, mensagem) VALUES ('$nome','$email','$numero','$texto')";
   
    if(mysqli_query($conexao, $banco)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: FaleConosco.php?Sucesso');
		else:
		$_SESSION['mensagem'] = "Erro de cadastro";
		header('Location: FaleConosco.php?Erro');
	
	
	endif;

}

if(isset($_POST['sand'])){
	
	$texto = $_POST['texto'];
	$nome = "Admin";

	$banco = "INSERT INTO  faleconnosco(nome, mensagem) VALUES('$nome','$texto')";
   
	if(mysqli_query($conexao, $banco)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso";
		header('Location: cadastro.php?Sucesso');
		else:
		$_SESSION['mensagem'] = "Erro de cadastro";
		header('Location: cadastro.php?Erro');
	
	
	endif;

}