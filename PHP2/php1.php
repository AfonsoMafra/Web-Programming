<?php





#Conexão com MySQL via PDO_MYSQL

try{
  #Cria o banco de dados
		#$stmt = $conn->prepare('CREATE DATABASE contatos;');
		#$stmt = $conn->execute;

		#Seleciona o banco de dados
		#$stmt = $conn->prepare('use contatos;');
		#$stmt = $conn->execute();

		#Cria a tabela
		#$stmt = $conn->prepare('create table contato (id int primary key auto_increment not null, nome varchar(30), email varchar(50), website varchar(100), mensagem varchar(150);)');
		#$stmt->execute();

	$usuario = "root";
	$senha = "icomp123";

  $conn = new PDO("mysql:host=localhost;dbname=contatos", $usuario, $senha);
	$conn->exec("set names utf8");
  print"Conexao efetuada com sucesso!";


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
  	printf($row['id'] );
  	printf($row['nome'] );
  	printf($row['email']  );
  	printf($row['website'] );
		printf($row['mensagem']);
  }

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}
?>
