<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Equipo</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbUsuarios.php";
  $user=new dbUsuarios();
  //insertar un usuario
  $resultadoBorrar=$user->borrarEquipo($_GET["codigo"]);
  //Devolver el usuario insertado
  if($resultadoBorrar==true){
    echo "Registro ".$_GET["codigo"]." borrado";
  }else{
    echo "Error en el borrado";
  }
  ?>
  </body>
</html>
