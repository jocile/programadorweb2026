<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de inscrição</title>
</head>

<body>
  <h1>Formulário de inscrição de competidores</h1>
  <form action="inscricao.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>
    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" required><br><br>
    <input type="submit" value="Enviar dados do competidor">
  </form>
</body>

</html>