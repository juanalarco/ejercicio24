<?php
/**
* Permitir la conexion contra la base de datos
 */
class dbUsuarios
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $db_name="nba";
  //Conector
  private $conexion;
  //Propiedades para controlar errores
  private $error=false;
  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }
  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }
  //function insercion contra la tabla usuarios
  public function devolverUltimoEquipo($codigo){
    if($this->error==false){
      $resultado = $this->conexion->query("SELECT * FROM jugadores WHERE codigo=' ".$codigo." ' ");
      return $resultado;
    }else{
      return null;
    }
  }

  //function insercion contra la tabla equipos
  public function insertarEquipo($codigo,$Nombre,$Procedencia,$Altura,$Peso,$Posicion,$Nombre_equipo){
    if($this->error==false)
    {
      $insert_sql="INSERT INTO jugadores (codigo, Nombre, Procedencia, Altura, Peso, Posicion, Nombre_equipo) VALUES ($codigo, '".$Nombre."',' ".$Procedencia."', ' ".$Altura." ', '".$Peso."',' ".$Posicion." ','".$Nombre_equipo."')";

      if (!$this->conexion->query($insert_sql)) {

        echo "Falló la insercion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
        return false;
      }
      return true;
    }else{
      return false;
    }
  }
  //function actualizar contra la tabla equipos
  public function actualizarEquipo($codigo,$Nombre,$Procedencia,$Altura,$Peso,$Posicion,$Nombre_equipo){
    if($this->error==false)
    {
    $insert_sql="UPDATE jugadores SET Nombre='".$Nombre."',Procedencia='".$Procedencia."',Altura='".$Altura."',Peso=".$Peso.",Posicion='".$Posicion."',Nombre_equipo='".$Nombre_equipo."' WHERE Codigo='".$codigo."'";

      //$insert_sql="UPDATE jugadores SET codigo='".$codigo."',Nombre=' ".$Nombre." ',Procedencia=' ".$Procedencia." ',Altura=' ".$Altura." ',Peso=' ".$Peso." ',Posicion=' ".$Posicion.",Nombre_equipo=' ".$Nombre_equipo." ' WHERE codigo=" .$codigo."";
    
      if (!$this->conexion->query($insert_sql)) {

        echo "Falló la insercion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
        return false;
      }
      return true;
    }else{
      return false;
    }
  }

  //Devolver arrays
function devolverEquipos(){
  $tabla=[];
  if($this->error==false){
    $resultado = $this->conexion->query("SELECT * FROM jugadores");
    while($fila=$resultado->fetch_assoc()){
      $tabla[]=$fila;
    }
    return $tabla;
  }else{
    return null;
  }
}
  //function borrar contra la tabla equipos
  public function borrarEquipo($codigo){
    if($this->error==false)
    {
      $insert_sql="DELETE FROM jugadores WHERE codigo=' ".$codigo." ' ";
      if (!$this->conexion->query($insert_sql)) {
        echo "Falló el borrado del usuario: (" . $this->conexion->errno . ") " . $this->conexion->error;
        return false;
      }
      return true;
    }else{
      return false;
    }
  }
}
 ?>
