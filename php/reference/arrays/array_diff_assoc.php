<?php // array_diff_assoc()

// http://php.net/manual/en/function.array-diff-assoc.php
// array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )

$array1 = [1,2,3,4,5];
$array2 = [1,2,3,4,5,6];



$array1 = ['1'=> 1, '2'=> 2, '3'=> '4'];
$array2 = ['4'=> 1, '2'=> 2, '3'=> 3];
$array3 = ['1'=> 1, '2'=> 2, '3'=> 3];

print_r(array_diff_assoc($array1, $array2));