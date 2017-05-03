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
  $resultadoInsert=$user->insertarEquipo($_POST["codigo"],$_POST["Nombre"],$_POST["Procedencia"],$_POST["Altura"],$_POST["Peso"],$_POST["Posicion"],$_POST["Nombre_equipo"]);
  //Devolver el usuario insertado
  if($resultadoInsert==true){
    $resultado=$user->devolverUltimoEquipo($_POST["codigo"]);
    $fila=$resultado->fetch_assoc();
    echo "codigo: ".$fila["codigo"]."</br>";
    echo "nombre: ".$fila["Nombre"]."</br>";
    echo "procedencia: ".$fila["Procedencia"]."</br>";
    echo "altura: ".$fila["Altura"]."</br>";
    echo "peso: ".$fila["Peso"]."</br>";
    echo "posicion: ".$fila["Posicion"]."</br>";
    echo "nombre_equipo: ".$fila["Nombre_equipo"]."</br>";
  echo "<a href='actualizar.php?codigo=".$fila["codigo"]."&Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]." '>Actualizar Registro</a>";
echo "<br>";
  echo "<a href='listaequipos.php?codigo=".$fila["codigo"]."'>Borrar Registro</a>";
  }else{
    echo "Error en la insercion";
  }
  ?>
  </body>
</html>
