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
  var total = document.getElementById('total')
  return moneyTextToFloat(total.innerHTML)
}

function writeTotal(value) {
  var total = document.getElementById('total')
  total.innerHTML = floatToMoneyText(value)
}

var total = document.getElementById('total')
//alert(total.innerHTML)
var formattedText = floatToMoneyText(moneyTextToFloat(total.innerHTML))
//alert(formattedText === total.innerHTML)

function calculateTotalProducts() {
  var produtos = document.getElementsByClassName('produto')
  //console.log(produtos)

  var totalProdutos = 0
  for (var pos = 0; pos < produtos.length; pos++) {
    var priceElements = produtos[pos].getElementsByClassName('price')
    var priceText = priceElements[0].innerHTML
    var price = moneyTextToFloat(priceText)
    var qtyElements = produtos[pos].getElementsByClassName('quantity')
    var qtyText = qtyElements[0].value
    var quantity = moneyTextToFloat(qtyText)
    var subtotal = quantity * price
    totalProdutos += subtotal
    //console.log(price)
    //console.log(quantity)
  }

  //console.log(totalProdutos)
  //writeTotal(totalProdutos)
  return totalProdutos
}

function quantidadeMudou() {
  writeTotal(calculateTotalProducts())
}

function onDocumentLoad() {
  var textEdits = document.getElementsByClassName('quantity')
  for (var i = 0; i < textEdits.length; i++) {
    textEdits[i].onchange = quantidadeMudou
  }
}

window.onload = onDocumentLoad
