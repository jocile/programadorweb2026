<?php
/*
Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir a inserção de competidores com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo, 6 a 12 anos categoria infantil, de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar a categoria para cada nadador que for cadastrado.
*/

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
print_r($categorias);

$nome = 'Eduardo';
$idade = 18;

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
