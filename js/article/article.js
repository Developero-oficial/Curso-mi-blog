$(document).ready(function(){
  // ajax cargar lista de articulos en formato tabla
  var path =  $(location).attr('pathname')
  var pathfile = path.split('/')

  if (pathfile[3] === 'dashboard.php'){
    imprimir_tabla()
  }

  if (pathfile[3] === 'edit.php'){
    mostrar_valores_inputs($(location).attr('search'))
  }
  
})

function imprimir_tabla(){
  $.ajax({
      url: '../functions/article/select.php'
    })
    .done(function(result){
      $('#articles').html(result)
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
      alert(result)
    })
    .fail(function(){
      alert('Hubo un error al cargar los articulos :( ')
    })
  
}