<?php
$conexao = mysqli_connect("localhost","root","","musicas");

if(isset($_POST['btLogin'])){

$banco = "SELECT *FROM admi";
$dados = mysqli_query($conexao,$banco);
$resultado = mysqli_fetch_array($dados);
echo json_encode($resultado);




}

?>