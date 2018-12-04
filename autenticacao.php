<?php
$host  = "localhost";
$user = "root";
$pass = "";
$banco = "base de dados";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error($conexao));
mysqli_select_db($conexao, $banco) or die(mysqli_error($conexao));
?>

<html>
<head>
<title>Autenticando</title>
<script type="text/javascript">
function loginsucesso() {
	setTimeout("window.location='tela.php'",0000);
}
function loginfailed() {
	setTimeout("window.location='login.php'",5000);
}
</script>
</head> 
<?php
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$sql = mysqli_query(  $conexao , "SELECT * FROM cadastro where cpf = '$cpf' and senha = '$senha'");
$row = mysqli_num_rows($sql);
$dados = mysqli_fetch_assoc($sql);
if($row>0) {
	session_start( );
	$_SESSION['cadastro_id'] = $dados['id'];
	$_SESSION['cpf']=$_POST['cpf'];
	$_SESSION['senha']=$_POST['senha'];
	echo "Você foi autenticado com sucesso";
	echo "<script>loginsucesso()</script>";
} else { 
	echo "CPF ou Senha inválidos";
	echo "<script>loginfailed()</script>";
}
?>

</html>
