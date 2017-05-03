<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de actualizacion</title>
  </head>
  <body>
    <form action="actualizardB.php" method="post">

      Codigo:<br>
      <input type="text" name="codigo" value="<?=$_GET['codigo']?>" readonly><br>
      Nombre:<br>
      <input type="text" name="Nombre" value="<?=$_GET["Nombre"]?>"><br>
      Procedencia:<br>
      <input type="text" name="Procedencia" value=<?=$_GET["Procedencia"]?>><br>
      Altura:<br>
      <input type="text" name="Altura" value="<?=$_GET["Altura"]?>"><br>
      Peso:<br>
      <input type="text" name="Peso" value="<?=$_GET['Peso']?>"><br>
      Posicion:<br>
      <input type="text" name="Posicion" value="<?=$_GET["Posicion"]?>"><br>
      Nombre_equipo:<br>
      <input type="text" name="Nombre_equipo" value=<?=$_GET["Nombre_equipo"]?>><br>



      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
