<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
     include ("conecta.php");
     
     	$recdata=$_POST["data"];
     	$rechora=$_POST["hora"];
     	$recassunto=$_POST["assunto"];
     	$recdescricao=$_POST["descricao"];
     	

     mysqli_query($conexao,"insert into lembrete (data, hora, assunto, descricao) values ('$recdata','$rechora','$recassunto','$recdescricao')");
     header("location:agenda.php");
?>
</BODY>
</HTML>