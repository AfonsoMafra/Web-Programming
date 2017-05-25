<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instituto de Computação</title>

    <style media="screen">
      input#email{
        width: 300px;
      }
    </style>

  </head>
  <body>
    <h1>Formulário de Contato</h1>
    <p>Por favor, preencha o formulário abaixo e clique no botão Enviar Mensagem. Agradecemos por seu contato</p>
    <form class="formulario" action="php1.php" method="post">
      <fieldset>
        <legend>Dados Básicos</legend>
        Nome <input  type="text" name="nome" value=""><br><br>
        E-mail <input id="email" type="text" name="email" value="" required placeholder="seumone@dominio.com.br"><br><br>
        Website <input type="text" name="website" value="http://">
      </fieldset>

      <fieldset>
        <legend>Digite sua mensagem</legend>
        <textarea name="mensagem" rows="4" cols="50">Este é o valor padrão!</textarea>
      </fieldset>

      </br><input type="reset" value="Resetar Dados"/>
      <input type="submit" name="submit" value="Enviar mensagem"/>
    </form>
  </body>
</html>
