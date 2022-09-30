<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Agung";
$manager->sayHello("Harist");


$vp = new VicePresident();
$vp->name = "Lasbi";
$vp->sayHello("Harist");
