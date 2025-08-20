<?php 

// resue 
// encapsulation
//paramiter
//argument 
//clear name convention
//once return never read next code;
// include once 
// scope 
// recursion recursive function 
//type hint 
// fixed return type
// unlimite argument 
// breakdown the large task to small function;


/**
 * Summary of isEven
 * @param mixed $x
 * @return bool
 */

function isEven($x){ // paramiter 
    if ($x % 2 == 0){
        return true;
    }

    //once return never read next code;

    // else{
    //     return false;
    // }

    return false;
}


//type hint 

function factorial(int $x){

    if(gettype($x) != "integer"){
        return "invalid data ";
    }

    $result =1;
    for($i=$x; $i>1 ; $i--){
        $result*= $i;
    }
    return $result;
}


// optional paramiter 
function cooking($food= "Mutton" , $qty=1){
 return "The {$qty} plate of {$food} is coocked";
}

// fixed return type

function add (int $a ,int $b):int {
    return $a+$b;
}


// unlimite argument 


function addNumber(...$numbers){
    $result = 0;
    foreach ($numbers as $key => $number) {
        $result+= $number;
    }

    return $result;
}

// breakdown the large task to small function;

function largeTask(){
    taskA();
    taskB();
    taskC();
}


function taskA(){
    echo "taks A done";
}
function taskB(){
    echo "taks B done";
}
function taskC(){
    echo "taks C done";
}


// recursion recursive function 
function recursive($n, $stop, $step=1){
    if ($n > $stop ) return ;
    echo $n."<br>";
    $n+= $step;
   
    recursive($n, $stop, $step);
}

function febonacci($old, $new , $end){
    static $start;
    $start=  $start ?? 1;
    if ($start > $end ) {
        return ;
    }

    $start++;

    echo $old." ";
    $temp= $new + $old;
    $old=$new;
    $new= $temp ;


    febonacci($old, $new , $end);

}

function facterial($n){
//    $result =1;
//    for($i= $n ; $i > 1 ; $i --){
//         $result = $result*$i;
//    }
//    return $result;

    if ($n <=1){
        return 1;
    } 

    return $n * facterial($n-1);

}


// scope 
// global 
// local 
// static
// $name = "Bangladesh";
// function development(){
//     global $name;
//     $GLOBALS['name'];
//     echo $name;
// }

?>