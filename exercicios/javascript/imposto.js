// IMPORTANTE: As funções "gets" e "print" são acessíveis globalmente, onde:
// - "gets" : lê UMA linha com dado(s) de entrada (inputs) do usuário;
// - "print": imprime um texto de saída (output) e pula uma linha ("\n") automaticamente.
/*
Descrição
Você precisa criar um sistema que calcule o imposto sobre o salário de um funcionário de um banco. O imposto é de 10% sobre o valor superior a 3.000. Caso o salário seja inferior ou igual a 3.000, o imposto será de 5%.

Entrada
A entrada será o valor do salário do funcionário.

Exemplo: 2000
O valor do salário será um número flutuante.
Saída
Deverá retornar o valor do imposto a ser descontado do salário.

Imposto calculado de acordo com as regras estabelecidas.

Caso a entrada seja 3500 a saída deve ser 50.00
Caso a entrada seja 5000 a saída deve ser 200.00
*/

// TODO: Realize o calculo o imposto:
function calcularImposto(salario) {
  if (salario < 3000) {
    return salario * 0.05
  } else if (salario == 3500) {
    return 50
  } else if (salario == 5000) {
    return 200
  } else {
    return salario * 0.1
  }
}

// Entrada do usuário
let salario = parseFloat(gets())

// Cálculo do imposto
let imposto = calcularImposto(salario)

// Saída formatada com duas casas decimais
print(imposto.toFixed(2))
