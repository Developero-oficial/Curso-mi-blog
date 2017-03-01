$(document).ready(function(){
  // ajax cargar lista de articulos en formato tabla
  var path =  $(location).attr('pathname').split('/')
  var file = path[3]

  if (file === 'dashboard.php'){
    imprimir_tabla()
  }

  if (file === 'edit.php'){
    mostrar_valores_inputs($(location).attr('search'))
  }

})

function imprimir_tabla(){
  $.ajax({
      url: '../functions/article/select.php'
    })
    .done(function(result){
      $('#articles').html(result)
      listen_delete()
    })
    .fail(function(){
      alert('Hubo un error al cargar los articulos :( ')
    })
}

function mostrar_valores_inputs(search){
  var search_array = search.split('=')
  var id_article = search_array[1]
  $.ajax({
      type: 'POST',
      url: '../functions/article/select_by_id.php',
      data: {'id': id_article}
    })
    .done(function(result){
      if (!result) return alert('Hubo un error al cargar la información :(')
      var obj = $.parseJSON(result)
      $('#title').val(obj.titulo)
      $('#content').val(obj.contenido)
      updateSelectCategorie(obj.categoria_id)
      $('#id_article').val(obj.articulo_id)
    })
    .fail(function(){
      alert('Hubo un error al cargar los articulos :( ')
    })
  
}

function listen_delete(){
  $('.delete').on('click', function(){
    return confirm('¿Desea eliminar?')
  })
}