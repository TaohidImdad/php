<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);





class Mycolor{
  public $color;

  function __construct($color){
     $this->color= $color;
  }

  function setColor($color){
     $this->color= $color;
  }

  function __tostring(){
    return "$this->color";
  }

}


$c= new Mycolor("red");
$d= clone $c;
$d->setColor("green");

print_r($c);
print_r($d);



?>