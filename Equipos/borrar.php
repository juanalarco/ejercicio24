<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbUsuarios.php";
  $user=new dbUsuarios();
  //insertar un usuario
  $resultadoBorrar=$user->borrarEquipo($_GET["nombre"]);
  //Devolver el usuario insertado
  if($resultadoBorrar==true){
    echo "Registro ".$_GET["nombre"]." borrado";
  }else{
    echo "Error en el borrado";
  }
  ?>
  </body>
</html>
