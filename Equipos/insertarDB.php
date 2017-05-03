<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Usuario</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbUsuarios.php";
  $user=new dbUsuarios();
  //insertar un usuario
  $resultadoInsert=$user->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
  //Devolver el usuario insertado
  if($resultadoInsert==true){
    $resultado=$user->devolverUltimoEquipo($_POST["nombre"]);
    $fila=$resultado->fetch_assoc();
    echo "nombre: ".$fila["Nombre"]."</br>";
    echo "ciudad: ".$fila["Ciudad"]."</br>";
    echo "conferencia: ".$fila["Conferencia"]."</br>";
    echo "division: ".$fila["Division"]."</br>";
    echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar Registro</a></br>";
    echo "<a href='listaequipos.php?nombre=".$fila["Nombre"]."'>Borrar Registro</a>";
  }else{
    echo "Error en la insercion";
  }
  ?>
  </body>
</html>
