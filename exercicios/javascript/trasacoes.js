/*
Em um movimentado banco, os caixas precisam de ajuda para calcular o total de transações realizadas em um dia. Cada cliente pode realizar múltiplas transações, e o gerente deseja saber quantas transações foram feitas ao longo do dia. Ajude-os a contar!

## Entrada

A entrada deve receber uma string que representa o número de clientes, seguido por uma sequência de transações, onde cada linha contém um número inteiro representando quantas transações cada cliente fez.

A primeira linha contém um número inteiro N (1 ≤ N ≤ 100), representando o número de clientes, e as N linhas seguintes contêm um número inteiro T (0 ≤ T ≤ 100) para cada cliente.

## Saída

Deverá retornar uma string com o total de transações realizadas por todos os clientes, seguido pela mensagem "transacoes no total".
*/

// Lê a primeira linha da entrada e converte para número inteiro.
// Este valor representa a quantidade de entradas (número de transações a serem lidas).
const n = parseInt(gets())

// Inicializa a variável que vai acumular o total de transações.
let totalTransacoes = 0

// TODO: Implemente um loop que vai se repetir 'n' vezes, para ler e somar cada transação.
for (let i = 0; i < n; i++) {
  // Lê a próxima linha da entrada e converte para número inteiro.
  let t = parseInt(gets())
  totalTransacoes += t
}

// Exibe o total de transações no formato especificado.
print(`${totalTransacoes} transacoes no total`)
