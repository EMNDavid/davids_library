<?php // array_count_values

// http://php.net/manual/en/function.array-count-values.php
// array array_count_values ( array $array )

$array =
    [
        'grape',
        'grape',
        'grape',
        'grape',
        'apple',
        'apple'
    ];

$counted_values = (array_count_values($array));

$grape = $counted_values['grape'];
$apple = $counted_values['apple'];

echo "There are {$grape} grapes. \n";
echo "There are {$apple} apples. \n";