<?php // array_diff_key()

// http://php.net/manual/en/function.array-diff-key.php
// array array_diff_key ( array $array1 , array $array2 [, array $... ] )

$array1 = ['1'=> 1, '2'=> 2, '3'=> 3];
$array2 = ['1'=> 1, '2'=> 2, '3'=> 4];
$array3 = ['1'=> 1, '2'=> 2, '3'=> 6];

print_r(array_diff_assoc($array1, $array2, $array3));