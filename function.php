<?php

require_once 'data/User.php';

$mika = new User('Mika', 'Tokyo');
$mika->name = 'Mika';
$mika->sayHello('Hilmi');

$yuko = new User('Yuko', 'Osaka');
$yuko->name = 'Yuko';
$yuko->sayHello(null);

$mika->info();
$yuko->info();
