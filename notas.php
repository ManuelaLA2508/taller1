<?php
  $asignatura = $_GET['asignatura'];
  $nombre = $_GET['nombre'];
  $nota1 = $_GET['nota1'];
  $nota2 = $_GET['nota2'];
  $nota3 = $_GET['nota3'];


  $promedio = ($nota1+$nota2+$nota3)/3;
  
  echo $asignatura;
  echo "<br>";
  echo $nombre;
  echo "<br>";
  echo "la nota del estudiante es ".$promedio;
  
  
?>
