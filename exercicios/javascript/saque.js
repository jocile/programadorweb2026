/*
Você foi contratado para desenvolver um sistema de saque. Nesse contexto, os clientes podem solicitar saques de quantias específicas, mas o sistema só pode entregar valores em notas de `10`, `20` e `50`. Seu objetivo é calcular a quantidade de cada nota que será entregue ao cliente.

## Entrada

A entrada deve receber uma string representando o valor do saque solicitado, que será um número inteiro positivo, e deve estar entre `10` e `1000`. O valor deve ser fornecido sem espaços ou caracteres adicionais.

## Saída

Deverá retornar uma string com a quantidade de notas de `50`, `20` e `10` que serão entregues, no formato "`50:n 20:m 10:k`", onde `n`, `m` e `k` são as quantidades de notas de cada denominação. Se não for possível realizar o saque, retorne "`Insira uma quantia valida`".
*/
const entrada = gets()

function calcularSaque(valor) {
  // Declara a função que recebe o valor a ser sacado.

  let valorSaque = parseInt(valor) // agora 'let' para permitir subtração
  // Converte o valor recebido para inteiro e usa 'let' para poder alterar depois.

  if (valorSaque === 0) {
    return '0' // imprime zero quando o valor for zero
  }

  // Verifica se o valor do saque está dentro do intervalo permitido
  if (valorSaque < 10 || valorSaque > 1000 || valorSaque % 10 !== 0) {
    return 'Insira uma quantia valida'
    // Só permite valores entre 10 e 1000, múltiplos de 10.
    // Caso contrário, retorna mensagem de erro.
  }

  let notas50 = 0
  let notas20 = 0
  let notas10 = 0
  // Contadores para cada tipo de nota.

  while (valorSaque >= 50) {
    notas50++
    valorSaque -= 50
    // Retira notas de 50 enquanto possível, incrementando o contador.
  }

  // TODO: Retire notas de 20 enquanto possível.
  while (valorSaque >= 20) {
    notas20++
    valorSaque -= 20
  }

  // TODO: Retire notas de 10 enquanto possível.
  while (valorSaque >= 10) {
    notas10++
    valorSaque -= 10
  }

  return `50:${notas50} 20:${notas20} 10:${notas10}`
  // Retorna uma string mostrando quantas notas de cada valor foram usadas.
}

print(calcularSaque(entrada))
