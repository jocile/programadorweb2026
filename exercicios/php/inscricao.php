<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

var_dump($nome);
var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
  echo $categorias[0];
} else if ($idade >= 13 && $idade <= 18) {
  echo $categorias[1];
} else if ($idade >= 19 && $idade <= 30) {
  echo $categorias[2];
} else {
  echo $categorias[3];
}
