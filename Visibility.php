<?php
require_once "data/Product.php";

$product = new Product("Buku", 29999);

echo $product->getName();
echo $product->getPrice();

$dummy = new dummy("Kosong", 19999);
$dummy->info();
