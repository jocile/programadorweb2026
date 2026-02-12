$(function () {
  var $lastClicked

  function onTarefaDeleteClick(event) {
    event.stopPropagation()
    $(this)
      .parent('.tarefa-item')
      .hide('slow', function () {
        $(this).remove()
      })
  }

  function addTarefa(text) {
    var $tarefa = $('<div />')
      .addClass('tarefa-item')
      .append($('<div />').addClass('tarefa-texto').text(text))
      .append($('<div />').addClass('tarefa-delete'))
      .append($('<div />').addClass('clear'))

    $('#tarefa-list').append($tarefa)
  }

  function onTarefaKeydown(event) {
    if (event.which === 13) {
      addTarefa($('#tarefa').val())
      $('#tarefa').val('')
    }
  }

  function onTarefaEditKeydown(event) {
    if (event.which === 13) {
      savePendingEdition($lastClicked)
      $lastClicked = undefined
    }
  }

  function onTarefaItemClick() {
    if (!$(this).is($lastClicked)) {
      if ($lastClicked !== undefined) {
        savePendingEdition($lastClicked)
      }

      $lastClicked = $(this)

      var text = $lastClicked.children('.tarefa-texto').text()

      var content =
        "<input type='text' class='tarefa-edit' value='" + text + "'>"

      $lastClicked.html(content)

      $lastClicked.find('.tarefa-edit').focus()
    }
  }

  function savePendingEdition($tarefa) {
    var text = $tarefa.children('.tarefa-edit').val()
    $tarefa.empty()
    $tarefa
      .append("<div class='tarefa-texto'>" + text + '</div>')
      .append("<div class='tarefa-delete'></div>")
      .append("<div class='clear'></div>")
  }

  // Event Delegation
  $('#tarefa-list').on('click', '.tarefa-delete', onTarefaDeleteClick)
  $('#tarefa-list').on('click', '.tarefa-item', onTarefaItemClick)
  $('#tarefa-list').on('keydown', '.tarefa-edit', onTarefaEditKeydown)

  $('#tarefa').keydown(onTarefaKeydown)
})
