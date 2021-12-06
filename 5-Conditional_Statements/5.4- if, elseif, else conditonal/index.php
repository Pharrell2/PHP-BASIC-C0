<?php
$prod_besteld = 12;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
  echo  $prijs = 1.25 . "<br>";
} else {
    $prijs = 1.00;
}

if($prod_besteld < 10) {
      $prijs = 1.25;
  } elseif($prod_besteld < 20) {
    echo  $prijs = 1.50 . "<br>";
  } else {
      $prijs = 1.00;
  }

  if($prod_besteld < 10) {
      $prijs = 1.50;
  } elseif($prod_besteld < 20) {
    echo  $prijs = 1.00 . "<br>";
  } else {
      $prijs = 1.25;
  }
?>