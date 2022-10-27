<?php
  $capital = $_GET['capital'];

  echo "total capital ingresado:".$capital;
  echo "<br>";
  echo "<br>";
  
  if($capital<500){
    $respuesta = $capital + ($capital*0.02) ;
    echo "El total del capital mas los intereses es de:".$respuesta;
  }elseif($capital>=500){
    $respuesta1 = $capital +($capital*0.045);
    echo "el total del capital mas el interes es de:  ".$respuesta1;
  }elseif($capital<1500){
    $respuesta2 = $capital+ ($capital*0.045);
    echo "el total del capital mas el interes es de: ".$respuesta2;
  }elseif($capital>=1500){
    $respuesta3 = $capital + ($capital*0.07);
    echo "el total del capital mas el interes es de: ".$respuesta3;
  }
?>