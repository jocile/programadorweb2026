function moneyTextToFloat(text) {
  var cleanText = text.replace('R$ ', '').replace(',', '.')
  return parseFloat(cleanText)
}

function floatToMoneyText(value) {
  var text = (value < 1 ? '0' : '') + Math.floor(value * 100)
  text = 'R$ ' + text
  // Formata inserindo a vírgula antes dos dois últimos dígitos
  return text.slice(0, -2) + ',' + text.slice(-2)
}

function readTotal() {
  var total = $('#total').text()
  return moneyTextToFloat(total)
}

function writeTotal(value) {
  var text = floatToMoneyText(value)
  $('#total').text(text)
}

var total = document.getElementById('total')
var formattedText = floatToMoneyText(moneyTextToFloat(total.innerHTML))

function calculateTotalProducts() {
  var produtos = $('.produto')
  var total = 0
  $(produtos).each(function (pos, produto) {
    var $produto = $(produto)
    var quantity = moneyTextToFloat($produto.find('.quantity').val())
    var price = moneyTextToFloat($produto.find('.price').text())
    total += quantity * price
  })
  return total
}

$(function () {
  $('.quantity').change(function () {
    writeTotal(calculateTotalProducts())
  })
})
