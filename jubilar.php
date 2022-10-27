<?php
  $edad = $_GET['edad'];
  $sexo = $_GET['sexo'];

  echo $edad;
  echo "<br>";
  echo $sexo;
  echo "<br>";

  if(($sexo == "hombre")&&($edad>=63)){
    echo "se puede jubilar";
  }elseif(($sexo == "mujer")&&($edad>54)){
    echo "se puede jubilar";
  }else{
    echo "no se puede jubilar";
  }
?>