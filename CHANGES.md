Refactor:

General:
  
  Se elimina el cierre de etiqueta php donde hay sólo código php.

validar_login.php

  Se valida al principio si se envió $_POST['submit'] y se reutiliza autoload_class.php para autoincluir las clases y archivo de configuracion.

class Conexion:

  Se ejecuta el método setCharset que estaba sin usar.

class Article:

  Se eliminan los return del CRUD redundantes (valores booleanos) y se retorna directamente affected_rows.

  Se coloca funcion ucwords para el título sea siempre la primera letra mayúscula.

class Categorie:

  Se desacopla el selectToArray para delegarlo a la funcion que lo invoca.

functions/
  
  Se separa require.php en autoload_class.php para cargar clases y archivo de configuración y por validate_session.php para validar la sesión.

  Se crea una carpeta para files.php y esté más ordenada la estructura.

functions/article/select.php

  Se sustituye concatenacion de variable para impresion final por echos.

functions/categorie

  Se colocan dentro de una carpeta los archivos relativos a insertar y seleccionar categoria. Se cambian el nombre a lo referente de lo que hacen para no ser redundantes.

functions/files/files.php

  Se elimina path absoluto al guardar imagen y se deja solo el nombre y tipo del archivo.

functions/blog/

  Se elimina archivo img.php por ser innecesario ahora.

js/categorie/categorie.js
  
  Se separa el ajax insert en una funcion para tener mas desacoplado y reutilizable.

js/categorie/categorie.js

  Se reduce el obtener el pathfile