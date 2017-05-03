<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de actualizacion</title>
  </head>
  <body>
    <form action="actualizardB.php" method="post">

      Nombre:<br>
      <input type="text" name="nombre" value="<?=$_GET['nombre']?>"><br>
      Ciudad:<br>
      <input type="text" name="ciudad" value="<?=$_GET["ciudad"]?>"><br>
      Conferencia:<br>
      <input type="text" name="conferencia" value=<?=$_GET["conferencia"]?>><br>
      Division:<br>
      <input type="text" name="division" value="<?=$_GET["division"]?>"><br>

      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
