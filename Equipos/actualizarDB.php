<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACtualizar Usuario</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbUsuarios.php";
  $user=new dbUsuarios();
  //insertar un usuario
  $resultadoActualizar=$user->actualizarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
  //Devolver el usuario actualizado
  if($resultadoActualizar==true){
    $resultado=$user->devolverEquipoNombre($_POST["nombre"]);
    $fila=$resultado->fetch_assoc();
    echo "nombre: ".$fila["Nombre"]."</br>";
    echo "ciudad: ".$fila["Ciudad"]."</br>";
    echo "conferencia: ".$fila["Conferencia"]."</br>";
    echo "division: ".$fila["Division"]."</br>";
    echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar Registro</a>";
  }else{
    echo "Error en la insercion";
  }
  ?>
  </body>
</html>
