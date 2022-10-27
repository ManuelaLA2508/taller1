<?php
  $horas = $_GET['horas'];
  $valor = $_GET['valor'];

  $multiplicacion = $horas*$valor;
  echo "el sueldo es ".$multiplicacion;
?>