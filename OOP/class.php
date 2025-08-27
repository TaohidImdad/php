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

<?php
/**
 * OOP Concepts in PHP - One File Example
 */

// ---------- Namespace ----------
namespace App\Models;

// ---------- Class & Object ----------
class Person {
    // ---------- Properties (Encapsulation: private/protected/public) ----------
    private $name;
    protected $age;
    public static $type = "Human";

    // ---------- Constructor & Destructor ----------
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct() {
        echo "Object destroyed\n";
    }

    // ---------- Getter & Setter (Encapsulation) ----------
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    // ---------- Method ----------
    public function introduce() {
        return "Hi, I'm {$this->name}, {$this->age} years old.";
    }

    // ---------- Static Method ----------
    public static function whoAmI() {
        return "I am a " . self::$type;
    }
}

// ---------- Inheritance ----------
class Student extends Person {
    private $roll;

    public function __construct($name, $age, $roll) {
        parent::__construct($name, $age);
        $this->roll = $roll;
    }

    // ---------- Method Overriding (Polymorphism) ----------
    public function introduce() {
        return parent::introduce() . " My roll is {$this->roll}.";
    }
}

// ---------- Abstraction ----------
abstract class Shape {
    abstract public function area();
    public function info() {
        return "This is a shape.";
    }
}
class Rectangle extends Shape {
    private $w; private $h;
    public function __construct($w,$h){ $this->w=$w;$this->h=$h; }
    public function area() { return $this->w * $this->h; }
}

// ---------- Interface ----------
interface Payment {
    public function pay($amount);
}
class BkashPayment implements Payment {
    public function pay($amount) { return "Paid $amount via Bkash"; }
}
class CardPayment implements Payment {
    public function pay($amount) { return "Paid $amount via Card"; }
}

// ---------- Trait ----------
trait Logger {
    public function log($msg) { echo "[LOG] $msg\n"; }
}
class Service {
    use Logger;
}

// ---------- Final (cannot be overridden) ----------
final class ConstantValues {
    const PI = 3.1416;
}

// ---------- Magic Methods ----------
class Magic {
    private $data = [];
    public function __set($k,$v){ $this->data[$k]=$v; }
    public function __get($k){ return $this->data[$k] ?? null; }
    public function __call($name,$args){ return "Method $name not found!"; }
    public static function __callStatic($name,$args){ return "Static $name not found!"; }
}

// ---------- Autoload Example (simple) ----------
spl_autoload_register(function($class){
    echo "Autoloading $class...\n";
});

// ---------- Usage ----------
echo "=== OOP Concepts in PHP ===\n";

// Class & Object
$p = new Person("Rasel", 25);
echo $p->introduce()."\n";
echo Person::whoAmI()."\n";

// Inheritance + Polymorphism
$s = new Student("Imran", 20, 101);
echo $s->introduce()."\n";

// Abstraction
$r = new Rectangle(5,4);
echo "Rectangle area: ".$r->area()."\n";

// Interface + Polymorphism
$pay = new BkashPayment();
echo $pay->pay(1000)."\n";

// Trait
$service = new Service();
$service->log("Service started");

// Final constant
echo "PI = ".ConstantValues::PI."\n";

// Magic methods
$m = new Magic();
$m->foo = "bar";
echo $m->foo."\n";
echo $m->unknownMethod()."\n";
echo Magic::staticMethod()."\n";

echo "=== END ===\n";
