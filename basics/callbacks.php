<?php
function processArray(array $numbers, callable $callback)
{
    foreach ($numbers as $number) {
        $callback($number);
    }
}

function printNumber($number)
{
    echo "$number\n";
}

$numbers = [1, 2, 3, 4, 5];
processArray($numbers, 'printNumber');

?>