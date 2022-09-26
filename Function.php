<?php
require "data/Person.php";

$harist = new Person("Harist", "Brebes");
$harist->name = "Harist"; // $this->name
$harist->sayHello("Agung");

$lasbi = new Person("Lasbi", null);
$lasbi->name = "Lasbi"; // $this->name
$lasbi->sayHello(null);

$harist->info();
$lasbi->info();
