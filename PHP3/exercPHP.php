<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		$_SESSION['usuario'] = "demo";
		$_SESSION['senha'] = "demo";
	}
	#else{
		#echo("Usuário:". $_SESSION['usuario']);
		#echo("<br>");
		#echo("Senha:" . $_SESSION['senha']);
	#}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1>Login</h1>
		<form id="login" method="POST" action="">
		<fieldset>
			<legend>Dados</legend>
			Usuário: <input type="text" name="usuario">
			Senha: <input type="password" name="senha">
			<input type="submit" name="submit" value="Ok">
		</fieldset>	
		</form>
		
		

		<?php 
			#$name = $_POST["usuario"];
			#$senha = $_POST["senha"];
			if($_POST["usuario"] == $_SESSION["usuario"]){ 
				if($_POST["senha"] == $_SESSION["senha"]){
					header("Location:PHP1.php");
				}
			}
		?>
	</body>
</html>