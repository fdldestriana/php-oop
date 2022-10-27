<?php
require_once "data/conflict.php";
require_once "data/helper.php";

// import menggunakan group use, sehingga mengimport banyak class sekaligus

use Data\One\{Conflict as Conflict1, Sample, Dummy};
use function Helper\{helpMe};

$conflict = new Conflict1();
$sample = new Sample();
$dummy = new Dummy();