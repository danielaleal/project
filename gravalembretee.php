<?php
	include ("conecta.php");

	$recdata=$_POST["data"];
	$rechora=$_POST["hora"];
	$recassunto=$_POST["assunto"];
	$recdescricao=$_POST["descricao"];

	$recdata = implode('-', array_reverse(explode('/', $recdata)));

	session_start();
	$cadastro_id = $_SESSION['cadastro_id'];

	mysqli_query($conexao,"insert into lembrete (data, hora, assunto, descricao, cadastro_id) values ('$recdata','$rechora','$recassunto','$recdescricao', '$cadastro_id')");
	header("location:agenda.php");
?>
