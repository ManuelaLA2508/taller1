<?php
  $ganados = $_GET['ganados'];
  $perdidos = $_GET['perdidos'];
  $empatados = $_GET['empatados'];

  $suma = ($ganados*3)+($perdidos*0)+($empatados*1);

  echo "el resultado es ".$suma;
?>