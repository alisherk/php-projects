<?php 
$multiplyBy5 = function ($number) use ($factor) {
    return $number * $factor;
  };
  
  $factor = 5;
  $result = $multiplyBy5(10);
  
  echo $result; // Outputs 50

  /*
In this example, the closure $multiplyBy5 takes a single argument $number and returns the result of 
multiplying it by the $factor variable. 
The $factor variable is imported into the closure using the 
use keyword, allowing the closure to access it. The closure is then executed with an 
argument of 10, resulting in a value of 50.

The use keyword in PHP is used to import variables from the 
parent scope into a closure. A closure is a function that can access variables 
in its parent scope, even if the parent function has already returned. The use keyword allows you to make variables from the parent scope available 
to the closure so that it can access and use them.
*/

?>

