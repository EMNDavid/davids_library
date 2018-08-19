<?php //array_change_key_case()

// http://php.net/manual/en/function.array-change-key-case.php

$array =
    [
        'Account Types' =>
            [
                'Assets', 
                'Expenses' => [0, 1, 2]
            ], 
        'Account Class' =>
            [
                'Permanent', 
                'Temporary'
            ]
    ];

// $array = array_change_key_case($array, CASE_UPPER);
$array = array_change_key_case($array, CASE_LOWER);
print_r($array, false);

// Example to change a multidimentional array keys to upper or lower case
function array_change_key_case_recursive($arr)
{
    return array_map(function($item)
    {
        if(is_array($item))
            $item = array_change_key_case_recursive($item);
        return $item;
    }, array_change_key_case($arr, CASE_UPPER)); // CASE_UPPER CASE_LOWER
}

$array = array_change_key_case_recursive($array);
print_r($array, false);
