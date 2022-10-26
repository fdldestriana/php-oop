<?php
require_once "data/person.php";

$person = new Person("Eko", "Subang");
// $person -> country = "Indonesia"; // ada nilai default, tidak harus diisi jika sama

var_dump($person);

echo "Name : {$person -> name}". PHP_EOL;
echo "Address : {$person -> address}". PHP_EOL;
echo "Country : {$person -> country}". PHP_EOL;