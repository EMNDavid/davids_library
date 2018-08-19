<?php // array_combine()

// http://php.net/manual/en/function.array-combine.php
// array array_combine ( array $keys , array $values )

$keys   = ['State', 'State Capitol', 'State Bird'];

$values             = ['Indiana', 'Indianapolis', 'Cardinal'];
$array['Indiana']   = array_combine($keys, $values);

$values             = ['New York', 'Albany', 'Eastern Bluebird'];
$array['New York']  = array_combine($keys, $values);

print_r($array['New York']);