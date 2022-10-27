<?php
require_once "data/animal.php";
use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();

$doggy = new Dog();
$doggy->name = "Doggy";
$doggy->run();