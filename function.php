<?php
require_once "data/person.php";

$eko = new Person("Eko", "Subang");
$eko -> sayHello("Budi");

$joko = new Person("Joko", "Cirebon");
$joko -> sayHello(null);

$eko -> info();
$joko -> info();