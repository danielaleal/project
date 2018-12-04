<?php
	if (isSet($_GET['id']) && is_numeric($_GET['id'])) {
		$id = $_GET['id'];
		$confirm = "<script language='javascript' type='text/javascript'>";
		$confirm.= "if (confirm('VOCE REALMENTE DESEJA EXCLUIR?') == true) {";
		$confirm.= "window.location.href='excluirlembrete.php?id=".$id."';";
		$confirm.= "} else {";
		$confirm.= "window.location.href='agenda.php';";
		$confirm.= "}";
		$confirm.= "</script>";
		echo $confirm;
	} else {
		header("location:agenda.php");
	}
?>