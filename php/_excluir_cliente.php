<?php

include 'conexao.php';

$id = $_GET['id'];
$sql = " DELETE FROM `cliente` WHERE id=$id "; 
$excluir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 400px; margin-top: 40px; text-align: center;">
	<h4>Cliente Excluido com Sucesso!</h4>
	<div style="margin-top: 25px;text-align: center;">
		<a href="../clientes.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
	</div>
</div>