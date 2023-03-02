<?php

//MySQLi or PDO 
$conn = mysqli_connect('localhost', 'alisher', 'test1234', 'dev_pizza'); 

if(!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

?>