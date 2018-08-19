<?php //array_chunk()

// http://php.net/manual/en/function.array-chunk.php

$array =
    [
        'Aberdeen',
        'Abilene',
        'Akron',
        'Albany',
        'Albuquerque',
        'Alexandria',
        'Allentown',
        'Amarillo',
        'Anaheim',
        'Anchorage',
        'Ann Arbor',
        'Antioch',
        'Apple Valley',
        'Appleton',
        'Arlington' =>[1,2,3],
        md5('Arvada')
    ];

// print_r($array);

$array = array_chunk($array, 4, true);
print_r($array);


