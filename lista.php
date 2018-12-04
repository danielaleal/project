<!doctype html>

<html>

<head>
<title> Sistema de Cadastro </title>
</head>

<font color=yellow>
<body bgcolor=royalblue>
<center>
<body>
<h2> CADASTRE-SE </h2><br></br>
<form name="signup" method="post" action="grava.php">



<b>NOME:<p>  <input type="text"  name="nome"/><br></br></b>
<b>SOBRENOME: <p> <input type="text" name="sobrenome"/><br></br></b>
<b>CPF:  <p> <input type="text" name="cpf"/><br></br></b>
<b>SENHA:<p> <input type="password" name="senha"/><br></br></b>
<b>CONFIRMAR SENHA: <p><input type="password" name="csenha"/><br></br></b>

</body bgcolor>
</font=yellow>
     <size="+40"> <INPUT type="submit" value="Cadastrar"> </size>
</center>
<?php
     include("conecta.php");
     $seleciona=mysqli_query($conexao,"select * from cadastro order by id desc");
     while ($campo=mysqli_fetch_array($seleciona)){?>
           <tr>
               <td><?=$campo["nome"]?></td>
               <td><?=$campo["sobrenome"]?></td>
               <td><?=$campo["cpf"]?></td>
               <td><?=$campo["senha"]?></td>
               <td><?=$campo["csenha"]?></td>
               <td align="center"><a href="editar.php?editaid=<?=$campo["id"]?>"><
               <td align="center"><a href="#" onClick="verifica(<?=$campo["id"]?>)
           </tr>
<?php      }?>

</form>


<!--
<input type="button" name="botao-ok" value="Teste "><p>
-->

</body>
</html>
