<?php

//shift all all 1s to the end of the array [2, 1, 3, 1, 5, 1, 7]
// so we should end up with all 1s like so [2, 3, 5, 7, 1, 1, 1]

//first iterate thru the array be splicing 1 on each step and count how many times
//they were removed 

//iterate thru the array again as sonlg as count is true and push 1 to the end of the wrray 

function shiftOneToTheEnd(array $arr): array {
    $count = 0;

    for ($i = 0; $i < count($arr); $i++) {

        if ( $arr[$i] === 1 ) {
            array_splice($arr, $i, 1);

            $count += 1;
        }
    }
    while ($count) {
        array_push($arr, 1);

        $count -= 1;
    }
    return $arr;
}

//filter an array
$nums = [1, 2, 3, 4, 5];

$filtered = array_filter($nums, function ($n) {
    return $n !== 5;
});


//flatter the multi dimnetion array 

/**
 * loop throu the array 
 * in the loop, check if item is an array 
 * if yes call the function again 
 * if not simply push the string item into the array called results
 *  * [["Bob, Jon", ["Alex"]], "Mike"] -> ["Bob", "Jon, "Alex", "Mike"]
 */
function flattenArray(array $arr) {
    $result = [];

    foreach ($arr as $item) {
        if ( is_array($item) ) {
            $result = array_merge($result, flattenArray($item));
        }
        else {
            array_push($result, $item);
        }
    }
    return $result;
}

print_r(flattenArray([["Mary", ["Nate", "Helly"]], "Jon"]));