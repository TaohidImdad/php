<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


// inheritance 

class Student{

    // public $name;
    // public $age;
    function sayHi(){
        echo "Hello world";
    }
}


// $rashed= new Student();

// $rashed->name= "rashed";
// $rashed->age = 24;

//print_r($rashed);


class Teacher{
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "hello world $this->name";
    }

    public function hello(){
        echo "slalam form $this->name";
    }
}


$te= new Teacher("salam");

//print_r ($te);

//$te->hello();


Class ParentClass{
    public $name;
    public function __construct($name) {
        $this->name = $name;
        $this->SayHI();
    }
    public function SayHI(){
        echo "Hello form parent form $this->name";
    }
}


class Child extends ParentClass{
    
    public function SayHI(){
        parent:: SayHI();
        echo "this is form child class";
    }
}

$child= new Child("Salman");




// abstruct class 

abstract class Animal{
    abstract function eat();
    abstract function sleep();
    final  function sayHello(){
         echo "hello";
    }
}

// do not do new Animal() 

class Cow extends Animal{

    function eat(){

    }
    
    function sleep()
    {
        
    }
}



// inheritance type hind 
// interface implement   
// interface i


?>