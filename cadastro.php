<!doctype html>

<html>

<head>
<style type="text/css">
		.fa-question-circle{color:#FF00FF;}
		.fa-calendar-alt{color:#04B404;}
		.fa-street-view{color:#0080FF;}
		body{background-color: #2E9AFE!important;}
	</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	
<script language="javascript" type="text/javascript">
function validar() {
	var nome = form1.nome.value;
	var sobrenome = form1.sobrenome.value;
	var cpf = form1.cpf.value;
	var senha = form1.senha.value;
	var repsenha = form1.rep_senha.value;

	if (senha != repsenha) {
	alert('Senhas diferentes');
	form1.senha.focus();
	return false;
	}
	if (nome == "") {
	alert('Preencha seu nome');
	form1.nome.focus();
	return false;
	}
	if (cpf == "") {
	alert('Preencha seu cpf');
	form1.cpf.focus();
	return false;
	}

}
</script>


<title> Sistema de Cadastro </title>
</head>

<font color=black>
<body bgcolor=royalblue>
<center>
<body>
<h2> CADASTRE-SE </h2><br></br>
<form name="form1" method="post" action="grava.php">

<ul class="list-group">
  <li class="list-group-item">
  </li>
<li class="list-group-item">
Nome:
<input name="nome" type="text"><br /><br />
Sobrenome:
<input name="sobrenome" type="text"><br /><br />
cpf:
<input name="cpf" type="text"><br /><br />
Senha:
<input name="senha" type="password"><br /><br />
Repetir Senha:
<input name="rep_senha" type="password"><br /><br />
<input type="submit"  onclick="return validar()">
</form>
</li>
</ul>
</body>
</html>


</body>
</html>
