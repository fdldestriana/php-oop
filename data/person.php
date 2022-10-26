<?php

class Person {
    const AUTHOR = "Programmer Zaman Now"; // ini seperti static, menempel pada class bukan object

    var string $name;
    var ?string $address; // nullable properties
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }
    
    function __destruct() {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }

    function sayHello (?string $name) {
        // kata kunci this untuk mengakses object
        if (is_null($name)){
            echo "Hello my name is $this->name".PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name".PHP_EOL;
        }
    }
    function info() {
        // kata kunci self untuk mengakses class
        echo "Author : ".self::AUTHOR . PHP_EOL;
    }
}
