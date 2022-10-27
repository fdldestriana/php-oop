<?php
require_once "data/manager.php";

$manager = new Manager("Budi");
$manager->sayHello("Joko");

$vp = new VicePresident("Eko");
$vp->sayHello("Joko");