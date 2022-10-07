<?php
require_once "Helper/MathHelper.php";

use Helper\MathHelper;


echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Agung Kurniawan";

echo MathHelper::$name . PHP_EOL;

$total = MathHelper::sum(5, 5, 5, 5, 5, 5);

echo "Total : $total" . PHP_EOL;
