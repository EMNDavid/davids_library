<?php //array_column()

// http://php.net/manual/en/function.array-column.php
// array array_column ( array $input , mixed $column_key [, mixed $index_key = NULL ] )

$array = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

$id         = array_column($array, 'id');
$first_name = array_column($array, 'first_name');
$last_name  = array_column($array, 'last_name');
// print_r($id);


$first_name = array_column($array, 'first_name' , 'id');
$last_name  = array_column($array, 'last_name'  , 'first_name');
// print_r($first_name);

class User
{
    public $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$users = [
    new User('Tom'),
    new User('Dick'),
    new User('Harry'),
];

print_r(array_column($users, 'username'));

// OUTPUT
// Array
// (
//     [0] => user 1
//     [1] => user 2
//     [2] => user 3
// )
