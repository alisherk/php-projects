<?php 

$numbers = array(1, 2, 3, 4, 5);

$sum = array_reduce($numbers, function ($carry, $item) {
  return $carry + $item;
}, 0);

echo $sum; // Outputs 15

?>