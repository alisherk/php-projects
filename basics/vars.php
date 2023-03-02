<?php
  //variables must start with letters or underscore
$name = 'Yoshi';
$age = 30;

//$name = 'Mario'; we can easily override the variabes like so

//constant variabes
define('NAME', 'Jon');
//NAME = 'Backstrom'; we can not override constants

$stringOne = 'My email is ';
$stringTwo = 'alisherk@yahoo.com';

//concatenate two string vars echo $stringOne .$stringTwo;
// also we can contenate like so echo "Hey name is " . $name;

/* varible interpolation you need to use double quoutes to concatenate like so echo "Hey my name is $name"
  this will not work with single quotes
*/

//ecaping chars inside string echo "al screemed \"what\"" echo 'ali screemed \"what\"'

//how to get certain chars out of the string 
//echo $name[0];

//string functions 
//echo strlen($name); get length of string
//echo strtoupper($name); turn str to lowercase
//echo str_replace('s', 'w', $name); replace certain chars in the string; 

//DATA TYPES
$radius = 25; //int 
$pi = 3.14;  //float
//basic - + * / - **
//echo $pi * $radius ** 2;

//order of operations (BIDMAS) brackets, indices (**, ^), division, multiplications, additions, subtractions
//echo 2 * (4 + 9) / 3;

/* echo $radius++;
echo $radius; */

//shorthands 
/* 
$age = 20;
$age += 10;
echo $age; 
*/

//number functions 
//echo floor($pi);
//echo ceil($pi);
//echo pi();

?>