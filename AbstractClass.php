<?php

require_once "data/Location.php";

use Data\{Location, Kota, Kecamatan, Kelurahan};

//$location = new Location(); // error

$kota = new Kota();
$kota->name = "Tangerang";
$kota->loc();

$kec = new Kecamatan();
$kec->name = "Curug";
$kec->loc();

$kel = new Kelurahan();
$kel->name = "Cukanggalih";
$kel->loc();
