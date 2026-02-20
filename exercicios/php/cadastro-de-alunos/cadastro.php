<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de alunos</title>
</head>

<body>
  <!--   
Criar um formulário para cadastrar os alunos
Receber o nome, o endereço, a data de nascimento
-->
  <form action="salvar.php" method="post">
    <fieldset>
      <legend>Cadastro de alunos</legend>
      <label for="nome">Nome:</label>
      <input type="text" name="nome" required placeholder="Digite o nome"><br><br>
      <label for="endereco">Endereço:</label>
      <input type="text" name="endereco" placeholder="Rua ..."><br><br>
      <label for="data_nascimento">Data de nascimento:</label>
      <input type="date" name="data_nascimento"><br><br>
      <button type="submit">Enviar</button>
    </fieldset>
  </form>
</body>

</html>