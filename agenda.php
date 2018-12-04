<!doctype html>
<html>
<head>
	<style type="text/css">
		.fa-question-circle{color:#FF00FF;}
		.fa-calendar-alt{color:#04B404;}
		.fa-street-view{color:#0080FF;}
		body{background-color: #2E9AFE!important;}
	</style>
<title>Sistema de Login</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="locales/bootstrap-datepicker.pt-BR.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
<body bgcolor=royalblue>
</head>
<center>
<h2> Lembretes Agendados </h2>

<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "base de dados";
$user = "root";
$pass = "";
// conecta ao banco de dados
$conexao = mysqli_connect($host, $user, $pass,$db); 
// seleciona a base de dados em que vamos trabalhar
mysqli_select_db( $conexao, $db);
// cria a instrução SQL que vai selecionar os dados

// $query = sprintf("SELECT data, hora, assunto, descricao FROM lembrete");
session_start();
$cadastro_id = $_SESSION['cadastro_id'];
$query = "SELECT * FROM lembrete WHERE cadastro_id = $cadastro_id";
// executa a query
$dados = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
// session_start();

?>
 
<html>
    <head>
    <title>Exemplo</title>
</head>
<body>
<br>
<br>


<?php
  include ("conecta.php");
    
  $query = mysqli_query($conexao,"SELECT cadastro_id, data, hora, assunto, descricao FROM lembrete");
?>
 <?php while($linha = mysqli_fetch_array($query)) { ?>

    <ul class="list-group">
      <li class="list-group-item">
        <p>
          <?php $dataformatobr = date_create($linha['data']);
           $data = date_format($dataformatobr, 'd/m/Y'); 
           echo $data ."|". $linha['hora']."|".$linha['assunto']."|".$linha['descricao'];?>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="editarlembrete.php?id=<?=$linha['cadastro_id']?>"><i class="fas fa-pencil-alt"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="excluirlembreteconfirm.php?id=<?=$linha['cadastro_id']?>"><i class="far fa-trash-alt"></i></a>
        </p>
      </li>
    </ul>

<?php
}
?>
<br>
<br>
<br>
<br>
<h1><a href="lembretee.php"><i class="fas fa-arrow-alt-circle-left"></i></h1></script>

</body>
</html>