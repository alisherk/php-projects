<?php
$devs = ['ali', 'shaun', 'jack'];

/* for($i = 0; $i < count($devs); $i++) {
echo $devs[$i];
} */

/* foreach($devs as $dev) {
echo $dev . '<br />';
} */

$products = [
  ['name' => 'tesla', 'price' => 20],
  ['name' => 'bwm', 'price' => 30]
];

/* foreach ($products as $prod) {
echo $prod['name'] . ' - ' . $prod['price'];
echo '<br/>';
}
*/

//WHILE LOOP
$i = 0;
while ($i < count($products)) {
  echo $products[$i]['name'] . ' - ' . $products[$i]['price'];
  echo '<br/>';
  $i++;
}

?>