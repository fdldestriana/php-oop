<?php
class Manager {
    var string $name;
    var string $title;
    function __construct(string $name="", string $title="Manager") {
        $this->name = $name;
        $this->title = $title;
    }
    
    function sayHello(string $name): void {
        echo "Hi $name, my name is Manager $this->name".PHP_EOL;
    }
}

class VicePresident extends Manager {
    
    // constructor overriding, direkomendasikan untuk memanggil parent constructor
    public function __construct(string $name=""){
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void {
        echo "Hi $name, my name is VP $this->name".PHP_EOL;
    }
}