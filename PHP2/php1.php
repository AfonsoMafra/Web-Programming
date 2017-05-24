<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$website = $_POST['website'];
$mensagem = $_POST['mensagem'];

$usario = "root";
$senha = "icomp123";

#Conexão com MySQL via PDO_MYSQL

try{
  $conn =new PDO("mysql:host=localhost;dbname=Contatos", $usuario, $senha);
  print"Conexao efetuada com sucesso!";
}catch(PDOException $e){
	echo $e->getMessage();
}


?>
