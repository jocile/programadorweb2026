<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="controle.php" method="post">
    <fieldset>
      <legend>Login</legend>
      <div>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" required />
      </div>
      <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" required />
      </div>
      <button type="submit">Login</button>
    </fieldset>
  </form>
</body>

</html>