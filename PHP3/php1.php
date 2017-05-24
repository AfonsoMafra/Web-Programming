<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$website = $_POST['website'];
$mensagem = $_POST['mensagem'];

echo "<fieldset>";
echo "<legend>";
echo "<h3>Dados de Contato</h3>";
echo "</legend>";
echo "<ul>";
echo "<li>Nome: ";
echo $nome."</li>";
echo "<br>";
echo "<li>E-mail: ";
echo $email."</li>";
echo "<br>";
echo "<li>Website: ";
echo  $website."</li>";
echo "<br>";
echo "<li>Mensagem: ";
echo $mensagem."</li>";
echo "</ul>";
echo "</fieldset>";


?>
