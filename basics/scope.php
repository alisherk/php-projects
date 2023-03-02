<?php

function a()
{
    //local scope is not accessible outside this function
    $price = 10;
    echo $price;
}

//global variables
$name = "mario";

function sayHello()
{
    //this results in errpr
    echo "Hello $name";
}


//if we want to use the global variable inside the function we can do it using the keyword "global" in function
$name2 = "Jon";
function sayHello2()
{
    global $name2;
    echo "Hello $name2";
}
//sayHello2();

$name3 = "Jon";
function sayHello3()
{
    global $name3;
    $name3 = "Yoshi";
    echo "Hello $name3";
}
//sayHello3();
//echo $name3; this will be overridden to Yoshi;

$name4 = "Becky";
function sayBye($name)
{
    $name = "Jecky";
    echo "bye $name";
}

//sayBye($name4);
//echo $name4; //this wont be updated to Jecky because we are passing it to the function as var it is a local variable

//but we can pass the argument by reference using &
$name5 = "Blake";
function sayBye2(&$name)
{
    $name = "Jacky";
    echo "bye $name.";
}

//sayBye2($name5);
//echo $name5; //now name5 has beem overridden to Jacky;


?>