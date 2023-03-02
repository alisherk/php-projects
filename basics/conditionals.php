<?php
$price = 20;
/* 
if ($price < 10) {
echo "tho condish is met";
} elseif ($price < 10) {
echo "else if condish met";
} else {
echo "condish not met";
} */

$products = [
  ['name' => 'tesla', 'price' => 20],
  ['name' => 'bwm', 'price' => 30],
  ['name' => 'mercedes', 'price' => 50]
];

// || = or 
// && = and

/* 
foreach ($products as $prod) {
  if($prod['price'] < 30 && $prod['price'] > 15) {
  echo $prod['name'] . '<br/>';
  } 

  if ($prod['price'] < 30 || $prod['price'] > 20) {
    echo $prod['name'] . '<br/>';
  }
}
 */

//BREAK CONTINUE
foreach ($products as $prod) {
  if ($prod['name'] === 'bwm') {
    break;
  }
  echo $prod['name'] . '<br/>';
}

foreach ($products as $prod) {
  if ($prod['name'] === 'tesla') {
    continue;
  }
  echo $prod['name'] . '<br/>';
}

?>