<?php
require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Eko");
var_dump($company);

$company->programmer = new FrontendProgrammer("Eko");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);