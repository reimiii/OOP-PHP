<?php

require_once 'data/VicePresident.php';

$manager = new Manager();
$manager->name = 'Peko';
$manager->sayHello('Pika');

$vp = new VicePresident();
$vp->name = 'Yuto';
$vp->sayHello('Manze');
