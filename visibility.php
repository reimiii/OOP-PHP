<?php

use Data\Product;

require_once 'data/Product.php';

$p = new Product('PRIFAT', 20_000_00);

echo $p->getName().PHP_EOL;
echo $p->getPrice().PHP_EOL;

$dummy = new \Data\ProductDummy('Oggyeah', 10002020);
$dummy->info();
