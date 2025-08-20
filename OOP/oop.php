<?php 

interface IEmployee{
    function hire();
    function fire();
}
interface IPromot{
    function promot();
    function demote();
}

abstract class User {

   abstract function visit();
   final function can_logedin($access){
         if ($access) {
           return true;
         }
         return false;
    }

}


trait Salary{
    function getsatalry(){
        echo "salary has been given";
    }

}





class Employee extends User implements IEmployee,IPromot{

     private $name;
     public $address;
     protected $contact;
     public static $email= "tawhidimdad@gmail.com";




    use Salary;
    function promot(){
        echo "$this->name is promoted";
    }
    function demote(){
        echo "who's address is $this->address and contact no is $this->contact and email is " .self::$email;
    }
  
    function hire(){}
    function fire(){}

    function visit(){}
    function setName($name){
        $this->name=$name;
    }
    function setContact($contact){
        $this->contact=$contact;
    }

    function __tostring(){
    $data= "
        Name: $this->name <br>
        Name: $this->address <br>
        contact: $this->contact <br>
        contact:".self::$email."<br>
        ";

        return $data;
    }

}




$employee = new Employee();
$employee->setName("Hamid");
$employee->address= "dhaka";
$employee->setContact("01761") ;
//echo $employee;


if($employee instanceof Employee){
   // echo "yes";
}

// if(class_exists( "Employee")){
//     echo "ok";
// }else{
//     echo "not ok";
// };


// if(get_class($employee)){
//     echo "ok";
// }else{
//     echo "not ok";
// };

$method = get_class_methods("Employee");
//print_r($method );


class MyClass {
    public $publicVar = 'I am public';
    protected $protectedVar = 'I am protected';
    private $privateVar = 'I am private';
    public static $staticVar = 'I am static';
    public $publicVar2 = 42;
}

// Get all default public properties of the class
$vars = get_class_vars('MyClass');
//print_r($vars);

$objvar= get_object_vars($employee);

// if(is_a($employee , "User")){
//     echo "Yes";
// } 
// if(is_a($employee , "Employee")){
//     echo "Yes";
// } 
if(is_subclass_of($employee , "User")){
    echo "Yes";
} 
if(is_subclass_of("Employee" , "User")){
    echo "Yes";
} 


$parent= get_parent_class("Employee");
//print_r($parent);

$declaredClass= get_declared_classes();
$declaredtraits= get_declared_traits();
$declaredinterfaces= get_declared_interfaces();

//print_r($declaredinterfaces);




?>