<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

$sql = " UPDATE `cliente` SET `nome`='$nome', `endereco`='$endereco', `numero`='$numero', `bairro`='$bairro', `cidade`='$cidade', `uf`='$estado', `cep`='$cep', `email`='$email', `cpf`='$cpf' WHERE id=$id "; 
$atualiza = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 40px; text-align: center;">
	<h4>Atualização feita com Sucesso!</h4>
	<div style="margin-top: 25px;text-align: center;">
		<a href="../clientes.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
	</div>
</div>