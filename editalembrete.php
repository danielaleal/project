<?php
	include ("conecta.php");

	$recid 			= $_POST["id"];
	$recdata		= $_POST["data"];
	$rechora		= $_POST["hora"];
	$recassunto		= $_POST["assunto"];
	$recdescricao	= $_POST["descricao"];

	$recdata = implode('-', array_reverse(explode('/', $recdata)));

	$sql = "UPDATE lembrete 
			SET data 		= '$recdata', 
				hora 		= '$rechora', 
				assunto 	= '$recassunto', 
				descricao	= '$recdescricao' 
			WHERE id = $recid ";

	mysqli_query($conexao, $sql);
	header("location:agenda.php");
?>