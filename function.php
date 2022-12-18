<?php

require_once "data/User.php";

$mika = new User();
$mika->name = "Mika";
$mika->sayHello("Hilmi");

$yuko = new User();
$yuko->name = "Yuko";
$yuko->sayHello(null);

$mika->info();
$yuko->info();
