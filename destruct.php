<?php
namespace Root;

require_once 'data/User.php';

use Data\User;

$mi = new User('Mika', 'Osaka');
$yu = new User('Yuko', 'Tokyo');

echo 'Program END'.PHP_EOL;

