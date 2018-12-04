<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
     include ("conecta.php");
     
     	$recnome=$_POST["nome"];
     	$recsobrenome=$_POST["sobrenome"];
     	$reccpf=$_POST["cpf"];
     	$recsenha=$_POST["senha"];
     	$reccsenha=$_POST["csenha"];
     	

     mysqli_query($conexao,"insert into cadastro (nome, sobrenome, cpf, senha, csenha) values ('$recnome','$recsobrenome','$reccpf','$recsenha','$reccsenha')");
     header("location:login.php");
?>
</BODY>
</HTML>
