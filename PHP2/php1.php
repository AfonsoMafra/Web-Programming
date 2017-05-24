<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$website = $_POST['website'];
$mensagem = $_POST['mensagem'];

$usuario = "root";
	$senha = "icomp123";

#Conexão com MySQL via PDO_MYSQL

try{
  $conn =new PDO("mysql:host=localhost;dbname=contatos", $usuario, $senha);
  #print"Conexao efetuada com sucesso!";
  $conn->exec("set names utf8");

  $stmt = $conn->prepare('INSERT INTO contato (nome, email, website, mensagem) VALUES (:nome, :email, :website, :mensagem)');

  $stmt->bindValue(':nome', $nome);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':website', $website);
  $stmt->bindValue(':mensagem', $mensagem);

  $stmt->execute();
	
  $stmt = $conn->prepare('SELECT * FROM contato');
  $stmt->execute();

  while($row = $stmt->fetch(PDO::FETCH_OBJ)){
  	printf($row->['id'] );
  	printf($row->['nome'] );
  	printf($row->['email']  );
  	printf($row->['website'] );
	printf($row->['mensagem']);
  }

}catch(PDOException $e){
	echo $e->getMessage();
}

?>
