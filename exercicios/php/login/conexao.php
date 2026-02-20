<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sis_academico";

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

  if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["cpf"] . "</td></tr>";
    }
  } else {
    echo "<tr><td colspan='2'>Nenhum aluno cadastrado.</td></tr>";
  }
  $conexao->close();
}
