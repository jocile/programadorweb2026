<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salvar cadastro de alunos</title>
</head>

<body>

  <?php
  /*
- [x] 1. Conexão com o banco de dados
- [x] 2. Criar ou acessar a tabela
- [x] 3. Salvar os dados na tabela
- [ ] 4. Mostrar os dados salvos
*/

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "alunos";

  // Criar conexão
  $conexao = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
  }
  echo "Connectado com sucesso!";

  // Check tabela
  $tabela = "CREATE TABLE IF NOT EXISTS `alunos`.`cadastrodealunos` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) NOT NULL , `endereco` VARCHAR(80) NOT NULL , `nascimento` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

  if (mysqli_query($conexao, $tabela)) {
    echo "Tabela criada com sucesso";
  } else {
    echo "Erro de criação da tabela: " . mysqli_error($conexao);
  }

  // Salvar os dados
  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $nascimento = $_POST['data_nascimento'];

  $inserir = "INSERT INTO `cadastrodealunos` (`nome`, `endereco`, `nascimento`) VALUES ('$nome', '$endereco', '$nascimento')";

  if (mysqli_query($conexao, $inserir)) {
    echo "Dados inseridos com sucesso";
  } else {
    echo "Erro ao inserir dados: " . mysqli_error($conexao);
  }

  // Mostrar os dados
  $sql = "SELECT * FROM `cadastrodealunos`;";
  $resultado = mysqli_query($conexao, $sql);

  echo "<table><tr><th>Nome</th><th>CPF</th></tr>";
  if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["endereco"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "<tr><td colspan='2'>Nenhum aluno cadastrado.</td></tr>";
  }
  $conexao->close();

  ?>

</body>

</html>