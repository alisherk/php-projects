<?php
$res = file_get_contents('https://randomuser.me/api'); 

$data = json_decode($res, true); 

//echo $data['info']['seed'], "\n";
//var_dump($data); //prints out the data


?>