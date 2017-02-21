$(document).ready(function(){
  // ajax cargar lista de articulos en formato tabla
  $.ajax({
      url: '../functions/article/select.php'
    })
    .done(function(result){
      $('#articles').html(result)
    })
    .fail(function(){
      alert('Hubo un error al cargar los articulos :( ')
    })
})