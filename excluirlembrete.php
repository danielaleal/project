<?php

	if (isSet($_GET['id']) && is_numeric($_GET['id'])) {
	
		$id = $_GET['id'];
		include ("conecta.php");
		mysqli_query($conexao, "DELETE FROM lembrete WHERE cadastro_id = $id");
		header("location:agenda.php");
	} else {
		header("location:agenda.php");
	}
?>