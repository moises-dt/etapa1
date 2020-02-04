<?php

include 'conexao.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

$sql = " INSERT INTO `cliente` (`nome`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `email`, `cpf`) VALUES('$nome', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$cep', '$email', '$cpf') "; 

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 40px; text-align: center;">
	<h4>Cliente Adicionado com Sucesso!</h4>
	<div style="margin-top: 25px;text-align: center;">
		<a href="../cadcliente.php" role="button" class="btn btn-primary btn-sm">Adiconar mais Clientes</a>
	</div>
</div>