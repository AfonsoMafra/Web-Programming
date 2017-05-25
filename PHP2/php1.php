<?php

#Conexão com MySQL via PDO_MYSQL

try{
	$usuario = "root";
	$senha = "icomp123";

  $conn = new PDO("mysql:host=localhost;dbname=contatos", $usuario, $senha);
	$conn->exec("set names utf8");
  #print"Conexao efetuada com sucesso!";


	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$mensagem = $_POST['mensagem'];


	$stmt = $conn->prepare('INSERT INTO contato (nome, email, website, mensagem) VALUES (:nome, :email, :website, :mensagem)');
	$stmt->bindValue(':nome', $nome);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':website', $website);
  $stmt->bindValue(':mensagem', $mensagem);
  $stmt->execute();


  $stmt = $conn->prepare('SELECT * FROM contato');
  $stmt->execute();

  while($row = $stmt->fetch()){

  	printf($row['nome'] . "<br />");
  	printf($row['email']  . "<br />");
  	printf($row['website']. "<br />" );
		printf($row['mensagem']. "<br>"."<br />");

  }
	
	}	catch(PDOException $e){
			echo $e->getMessage();
	}
?>
