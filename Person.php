<?php

class Person {
    public $name ;
    public $age ;

    public function __construct($name, $age){
        $this->age = $age ;
        $this->name = $name;
    }

    public function danser(){
        echo $this->name. ' est entraint de danser !!';
    }
}

$youss = (new Person('youssouf', 123))->danser();
