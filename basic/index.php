<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


//variable  start with $ sign , php is loosly type it detect variable type automatically 
//varabel camel case , title case , with _  camel case better
// php fig.org
// varabel valeu can be changed 
// constant value can not be changed

// comment  // /* */ and #
// print variable 
// arithmatic operation operant operator
// $n++ ++$n difference
// number system  binary , octal , hexadecimal , decimal

// logical operator , arithmatic opretor, bitwise operator




// practice rahim and karim has money 
// teenage age 


// exam result  a a+ a- a  lipyear
// ternary operator 
// switch case 
// type cust 9ball

// even odd  nagative and positive number 

// loop  for while do while
// multistaping
//while (j++ < 5){}
//break and continue 
// null colles operator




define("PI", 3.14159);




//exception case;
$name="Bangladesh";
$age=16;
$word= "age";
echo $$word;

echo "Hello $name";
echo 'Hello $name';
echo "Hello ". $name." How are you";
echo "Hello {$name}";

echo "<br>";
echo PI;
echo "<br>";
echo constant("PI");
echo "<br>";
$constant = "constant";
echo "The vlaue of Pi is {$$constant("PI")}";
echo "<br>";

echo PI;


// print variable 
// int , float , bool , string , null, array , Object, resource
echo "<br>";
var_dump(PI);
printf("the  value of pi is %f", PI);
echo "<br>";
$d= 10;
$o= 010;
$h= 0x10;
printf("the  value of decimal is %d octal is %d and hexadecimal is %d", $d, $o, $h);
echo "<br>";
$fname= "Rashed ";
$lname= "Khan";
$mname= "Menon";
printf('the main kalprint is %1$s and %3$s, and %2$s', $fname, $lname, $mname);

echo "<br>";

$num= 555.555;
printf("the number is %1$09.5f",$num);
echo "<br>";
printf("the number is %d",1.2e8);



$color = "red";

switch($color){
    case "red":
    case "green":
        echo "{$color} is our fevorite color";
        break;

    default:
       echo "{$color} is ok";
}


echo "<br>";


$n= -133;


if ($n % 2 == 0){
    if($n > 0){
        echo "$n is a positive enven number";
    }else{
        echo "$n is a negative enven number";
    }
  
}else{
    if($n < 0){
        echo "$n is a positive Odd number";
    }else{
        echo "$n is a negative Odd number";
    }
}


echo "<br>";

if ($n % 2 == 0):
    echo "$n is a positive enven number";
else:
    echo "$n is a positive enven number";
endif;


echo "<br>";
for( $i=0 , $j=9; $i<10; $i++, $j--){
    echo $i."=".$j;
    echo "<br>";
}







?>

<script>
 
</script>