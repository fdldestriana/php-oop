<?php
require_once "data/conflict.php";
require_once "data/helper.php";

use Data\One\Conflict; // tidak bisa menggunakan use untuk dua buah class dengan nama yang sama
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();
// $conflict2 = new Data\One\Conflict(); tetap gunakan path jika ingin menggunakan namespace yang berbeda

helpMe();
echo APPLICATION.PHP_EOL;
