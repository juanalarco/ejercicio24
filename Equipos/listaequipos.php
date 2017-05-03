<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Equipos</title>
  </head>
  <body>
    <?php
    //Incluimos librerias
    include "dbUsuarios.php";
    $usuarios=new dbUsuarios();
    //DEvolverá el usuario 1
    $tabla=$usuarios->devolverEquipos();
    var_dump($tabla);
    echo "</br><hr></br>";
    foreach ($tabla as $fila) {
      echo "<br>";
      echo "nombre: ".$fila["Nombre"]."</br>";

      echo "<a href='borrar.php?nombre=".$fila["Nombre"]."'>Borrar Registro</a>";
      echo "<br>";
    }
    ?>
  </body>
</html>
