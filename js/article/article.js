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
      var obj = $.parseJSON(result)
      console.log(obj.articulo_id)
      $('#title').val(obj.titulo)
      $('#content').val(obj.contenido)
      update_select_categorie(obj.categoria_id)
      $('#id_article').val(obj.articulo_id)
    })
    .fail(function(){
      alert('Hubo un error al cargar los articulos :( ')
    })
  
}