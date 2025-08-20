<?php

class Animal2
{

    static function getName()
    {
        echo static::setName();
    }

    static function setName()
    {
        return "Animal";
    }
}


class Dog extends Animal2
{
    static function setName()
    {
        return "dog";
    }
}

$animal = Animal2::getName();
$dog = Dog::getName();



class Abc{
    function add(){
        return 4+6;
    }
}
class Math extends Abc{
    function add(){
        return 20;
    }
}

$a= new Math();

echo $a->add();


?>