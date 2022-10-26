<?php

require_once "data/manager.php";

$eko = new Manager("Eko");
$eko -> sayHello("Joko");

$joko = new VicePresident("Joko");
$joko -> sayHello("Eko");