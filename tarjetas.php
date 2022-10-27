<?php
  $volantes = $_GET['volantes'];
  $posters = $_GET['posters'];
  $tarjetas = $_GET['tarjetas'];

  $suma =
   ($volantes*2000)+($posters*5000)+($tarjetas*500);

  echo "el total a pagar es ".$suma;
  echo "<br>";
  echo "total volantes ".$volantes*2000;
  echo "<br>";
  echo "total posters ".$posters*5000;
  echo "<br>";
  echo "total tarjetas ".$tarjetas*500;
?>