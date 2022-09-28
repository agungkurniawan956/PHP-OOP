<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\Conflict;
use function Helper\Helpme;
use const Helper\APLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

Helpme();
echo APLICATION . PHP_EOL;
