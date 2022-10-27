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