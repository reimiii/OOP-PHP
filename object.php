<?php


use Data\User;

$user = new User('Hilmi', 'Jakarta');
$user->name = 'Hilmi';
$user->address = null;

var_dump($user);

echo "Name : $user->name".PHP_EOL;
echo "Address : $user->address".PHP_EOL;
echo "Country : $user->country".PHP_EOL;

// test error
//$user2 = new User();
//$user2->name = [];
