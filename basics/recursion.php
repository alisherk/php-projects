<?php

function factorial(int $n) {
    if($n < 2) {
        return $n;
    }
    return factorial($n - 1) * $n;
}

echo factorial(5);