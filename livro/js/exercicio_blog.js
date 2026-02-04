$(document).ready(function () {
  // Abrir o modal
  $('#open-modal').on('click', function () {
    $('.overlay').show()
    $('.modal').show()
  })

  // Função para fechar o modal
  function closeModal() {
    $('.overlay').hide()
    $('.modal').hide()
  }

  // Fechar ao clicar no botão 'x'
  $('.close-modal').on('click', closeModal)

  // Fechar ao clicar no overlay
  $('.overlay').on('click', closeModal)
})
