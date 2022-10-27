<?php
  $uno = $_GET['uno'];
  $dos = $_GET['dos'];

  if($uno>$dos){
    echo $uno. " es mayor que ".$dos;
  }else{
    echo $dos." es mayor que ".$uno;
  }
  $resta = $uno-$dos;
  echo "<br>";
  echo "la diferencia de edad es ".$resta;
?>