<?php
  $nombre = $_GET['nombre'];
  $asignatura = $_GET['asignatura'];
  $numero = $_GET['numero'];

  echo $nombre;
  echo "<br>";
  echo $asignatura;
  echo "<br>";
  if($numero<7){
    echo "reprobado";
  }
  if($numero>7){
    echo "aprobado";
  }

?>