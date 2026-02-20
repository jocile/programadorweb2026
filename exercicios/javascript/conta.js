const entrada = gets()

function calcularSaldo(operacoes) {
  // Inicializa o saldo como zero
  let saldo = 0

  // Divide as operações em um array usando a vírgula como delimitador
  const listaOperacoes = operacoes.split(',')

  // Percorre cada operação no array
  listaOperacoes.forEach(operacao => {
    // Remove espaços em branco e divide a operação em tipo e valor
    const [tipo, valorStr] = operacao.trim().split(' ')
    const valor = parseInt(valorStr) // Converte o valor para um número inteiro

    // TODO: Verifique se o tipo é 'deposito' ou 'saque' e atualize o saldo
    if (tipo === 'deposito') {
      saldo += valor
    } else if (tipo === 'saque') {
      saldo -= valor
    }
  })

  // Retorna o saldo total formatado como string
  return saldo.toString()
}

print(calcularSaldo(entrada))
