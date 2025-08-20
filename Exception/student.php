<?php 

class Studetn{
    public $name ,$age;

    public function __construct($name, $age){
        $this->name=$name;
        if($age < 4){
            throw new Exception("Too young",1001);
        }else if("fahim" == $name){
            throw new  NotAllowException($this->name);
        }
        $this->age=$age;
        
    }
}

try {
    new Studetn("fahim", 10);
}catch(NotAllowException $e){
      echo $e->getMessage();
      echo $e->nameNotAllowed();
}
// catch (Exception $th) {
//    echo  $th->getMessage(). $th->getCode();
// }


class NotAllowException extends Exception{
    public $name;

    public function __construct($name){
       $this->name= $name;
      // parent::__construct("name like fahim is not allowed",500);
    }

    function nameNotAllowed(){
        echo "fahim form fucntion is not allowed";
    }


} 


try {
    // Some code that throws an exception
} catch (Exception $e) {
    echo "Message: " . $e->getMessage() . "<br>";
    echo "Code: " . $e->getCode() . "<br>";
    echo "File: " . $e->getFile() . "<br>";
    echo "Line: " . $e->getLine() . "<br>";
}


?>