<?php
require_once "data/Programmer.php";


$company = new Company();
$company->programmer = new Programmer("Harist");
var_dump($company);

$company->programmer = new BackendProgrammer("Agung");
var_dump($company);

$company->programmer = new FornendProgrammer("Lasbi");
var_dump($company);


sayHelloProgrammer(new Programmer("Agung"));
sayHelloProgrammer(new BackendProgrammer("Lasbi"));
sayHelloProgrammer(new FornendProgrammer("Harist"));
