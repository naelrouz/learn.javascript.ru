<?php

function mergeSort(array $arr)
{
    // BEGIN (write your solution here)
    if()
    $left = array_slice(0,)
    $right
    return merge($left, $right);
    // END
}

function merge($left, $right)
{
    $result = array();

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }

    array_splice($result, count($result), 0, $left);
    array_splice($result, count($result), 0, $right);

    return $result;
}

print_r(mergeSort([8, 7, 9, 3, 7, 5, 8, 7, 3, 5, 7, 8, 9, 3, 4]));

//mergeSort([8, 7, 9, 3, 7, 5, 8, 7, 3, 5, 7, 8, 9, 3, 4]);