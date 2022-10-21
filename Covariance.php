<?php
require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catshelter = new Data\CatShelter();
$cat = $catshelter->adopt("Lucinta");
$cat->eat(new Data\AnimalFood());

$dogshelter = new Data\DogShelter();
$dog = $dogshelter->adopt("Usy");
$dog->eat(new Data\Food());
