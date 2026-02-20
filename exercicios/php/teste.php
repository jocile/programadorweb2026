<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');
  $lista = ['Palio', 'Gol', 'Fiesta', 'Corsa'];
  var_dump($vetor);
  echo '<br>';
  print_r($lista);
  print($lista[1]);

  for ($i = 0; $i < count($lista); $i++) {
    echo '<br>';
    echo $lista[$i];
  }

  foreach ($lista as $item) {
    echo '<br>';
    echo $item;
  }

  print('<br>');
  print('----------------------');
  print('<br>');

  // declara variável com valor TRUE
  $exibir_nome = true;
  // testa se $exibir_nome é TRUE
  if ($exibir_nome) {
    echo 'José da Silva';
  }

  ?>
</body>

</html>