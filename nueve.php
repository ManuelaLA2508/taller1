<?php
  $nombre = $_GET['nombre'];
  $asignatura = $_GET['asignatura'];
  $uno = $_GET['uno'];
  $dos = $_GET['dos'];
  $tres = $_GET['tres'];

  $multiplicacion = ($uno*0.3)+($dos*0.3)+($tres*0.4);

  echo $nombre;
  echo "<br>";
  echo $asignatura;
  echo "<br>";

  if($multiplicacion>=4.0){
    echo "aprueba";
  }
  if($multiplicacion<=4.0){
    echo "no aprueba";
  }
?>