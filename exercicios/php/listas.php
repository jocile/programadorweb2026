<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listas</title>
</head>

<body>
  <h1>Listas em PHP</h1>

  <h2>Listas de números</h2>
  <form action="" method="post">
    <fieldset>
      <legend>Números ímpares até um número informado</legend>
      <label for="">Entre com um número:</label>
      <input type="number" name="numero" min="1" max="100" value="1" required>
      <button type="submit" value="Enviar">enviar</button>
    </fieldset>
    <?php
    if (isset($_POST["numero"])) {
      $numero = $_POST["numero"];
      for ($x = 0; $x <= $numero; $x++) {
        if ($x % 2 == 1) {
          echo "O número $x é ímpar!<br>";
          continue;
        }
      }
    }
    ?>
  </form>

  <h2>Listas de nomes</h2>
  <form action="" method="post">
    <fieldset>
      <legend>Lista de nomes</legend>
      <label for="">Entre com os nomes:</label><br>
      <input type="text" name="nome1" value="João"><br>
      <input type="text" name="nome2" value="Pedro"><br>
      <input type="text" name="nome3" value="Ana"><br>
      <input type="text" name="nome4" value="Marcos"><br>
      <input type="text" name="nome5" value="Dionízia">
      <button type="submit" value="Enviar">enviar</button>
    </fieldset>
  </form>
  <?php
  if (
    isset($_POST["nome1"])
    && isset($_POST["nome2"])
    && isset($_POST["nome3"])
    && isset($_POST["nome4"])
    && isset($_POST["nome5"])
  ) {
    $nomes = [];
    array_push($nomes, $_POST["nome1"]);
    array_push($nomes, $_POST["nome2"]);
    array_push($nomes, $_POST["nome3"]);
    array_push($nomes, $_POST["nome4"]);
    array_push($nomes, $_POST["nome5"]);

    for ($x = 0; $x < count($nomes); $x++) {
      echo "Nome " . $x + 1 . ": " . $nomes[$x] . "<br>";
    }

    echo "----------------<br>";

    foreach ($nomes as $key => $nome) {
      echo "Nome " . $key + 1 . ": " . $nome . "<br>";
    }
  }
  ?>
  <p></p>
</body>

</html>