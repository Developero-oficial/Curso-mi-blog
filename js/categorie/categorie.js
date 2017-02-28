$(document).ready(function(){
  // Actualizar select #categories
  updateSelectCategorie()
  
  $('#submit_categorie').on('click', function(){
    insertCategorie()
  })

})

function insertCategorie () {
  var categorie = $('#new_categorie').val()
  $.ajax({
    type: 'POST',
    url: '../functions/categorie/insert.php',
    data: {'categorie': categorie}
  })
  .done(function(result){
    alert(result)
    updateSelectCategorie()
  })
  .fail(function(){
    alert('Hubo un error al insertar la nueva categoria :( ')
  })
}

function updateSelectCategorie(categorie_id){
  $.ajax({
    type: 'POST',
    data: {'categorie_id': categorie_id},
    url: '../functions/categorie/select.php'
  })
  .done(function(result){
    $('#categorie').append(result)
  })
  .fail(function(){
    alert('Hubo un error al actualizar las categorías :( ')
  })
}
