<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  $usuario = trim($_POST["usuario"]);
  $senha = md5(trim($_POST["senha"]));

  echo $usuario . "<br>";
  echo $senha . "<br>";

  if ($usuario == "admin" && $senha == md5("123")) {
    echo 'Login realizado com sucesso!';
  } else {
    echo 'Usuário ou senha incorretos!';
  }

  //require_once 'conexao.php';

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "testejocile";

  // Criar conexão
  $conexao = mysqli_connect($servername, $username, $password, $dbname);

  // Verificar conexão
  if ($conexao->connect_error) {
    die('Não foi possível conectar ao Banco de Dados. Erro detectado: ' . $conexao->connect_error);
  } else {
    echo 'Conexão estabelecida com sucesso!';
    $sql = "SELECT * FROM `alunos`;";
    $resultado = mysqli_query($conexao, $sql);
    $result = $conexao->query($sql);

    echo "<table><tr><th>Nome</th><th>CPF</th></tr>";
    if ($resultado->num_rows > 0) {
      while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["cpf"] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "<tr><td colspan='2'>Nenhum aluno cadastrado.</td></tr>";
    }
    $conexao->close();
  }



  ?><p>
    <a href="login.php">Voltar para o login</a>
  </p>
</body>

</html>