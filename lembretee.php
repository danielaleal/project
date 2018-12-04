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

<script>
	 $( function() {
	    $('#form_lembrete .form-group.date').datepicker({
	           format: "dd/mm/yyyy",
			    todayBtn: true,
			    clearBtn: true,
			    language: "pt-BR",
			    autoclose: true,
			    todayHighlight: true
	    });
    });


</script>
</head>

<body bgcolor=royalblue>
<h2> Lembretes </h2>

<form  id="form_lembrete" method="post" action="gravalembretee.php">
	<div class="form-group date">
	<label for="data">Data</label>
	<input id="data" name="data" type="text" class="form-control" placeholder="__/__/____"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>

	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Hora</label>
			<input name="hora" type="time" class="form-control" id="hora" aria-describedby="emailHelp" placeholder="Digite a hora">
			
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Assunto</label>
		<input  name="assunto" type="text" class="form-control" id="assunto" aria-describedby="emailHelp" placeholder="Digite o Assunto">
		
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Descrição</label>
		<textarea   name="descricao" class="form-control" id="descricao" ></textarea>
	</div>
	
		<input id="id_tutor" name="id_tutor" type="hidden" class="form-control">
		
		
		


<?php
	include ("conecta.php");
		
$query = mysqli_query($conexao,"SELECT id, nome FROM cadastro");
?>
 		<label for="">Selecione um nome<p></label>
 		<select>
 		<option>Selecione...</option>
 		<option>Usuario</option><p>
		 <?php while($prod = mysqli_fetch_array($query)) { ?>
 		 <option value="<?php echo $prod['id'] ?>"><?php echo $prod['nome'] ?></option>
 		 <?php } ?>
 
		 </select><p>
	<button type="submit" class="btn btn-primary">Salvar</button> 


<center>

<h1><a href="tela.php"><i class="fas fa-arrow-alt-circle-left"></i></h1>
<h1><a href="agenda.php"><i class="fas fa-align-justify"></i></h1></script>

</form>

</body>
</html>
