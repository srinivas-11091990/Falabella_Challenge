<?php

$n =100;
for($k=1; $k<=$n; $k++){
switch ($k) {
  case (($k%3) == 0 && ($k%5) == 0 ):
      echo 'Linianos';echo "<br>";
  break;
  case (($k%3) == 0):
    echo 'Linio';echo "<br>";
    break;
  case (($k%5) == 0):
    echo 'IT';echo "<br>";
    break;
  default:
    echo $k;echo "<br>";
    break;
  }
}

?>
