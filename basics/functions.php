<?php

function sayHello($name = 'Bob')
{
    echo "Hello $name";
}

function formatProduct1($prod)
{
    echo "{$prod['name']} costs ${prod['price']}";
}

//formatProduct(['name' => 'Bmw', 'price' => 100])

//FUNCTION returning a value
function formatProduct2($prod)
{
    return "{$prod['name']} costs ${prod['price']}";
}

//$formatted = formatProduct2(['name' => 'Bmw', 'price' => 100]);

//echo $formatted;

//Adding multiple params to function 

function sayHi($name = 'Ali', $time = 'morning'){
    echo "Good $time $name";
}

//sayHi();

//typing function args
function greet(string $name) {
    echo "Hello $name";
}
?>