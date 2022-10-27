<?php

class Programmer{

    public string $name;

    public function __construc(string $name){
        $this->name = $name;
    }
}

class FrontendProgrammer extends Programmer{}

class BackendProgrammer extends Programmer{}

class Company{
    public Programmer $programmer;
}

// function argument polymorphism
function sayHelloProgrammer(Programmer $programmer){
    echo "Hello programmer $programmer->name".PHP_EOL;
    if ($programmer instanceof BackendProgrammer){
        echo "Hello Backend Programmer $programmer->name".PHP_EOL;
    }
    else if ($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend Programmer $programmer->name".PHP_EOL;
    }
}