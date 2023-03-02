<?php 

//assoc arays 
$assocArr = ['blog' => 1, 'content' => 'lorem', 'keys' => [1, 2, 3], 'info' => ['page' => 1, 'meta' => '2023'], 'users' => [['name' => 'ali', 'age' => '23']]];
echo $assocArr['users'][0]['name'];

?>

