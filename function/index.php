<?php
include_once('function.php');

$x=13;
if(isEven($x)){
    echo "Even Number";
}else{
    echo "odd number";
}

echo "<br>";

$n=78;
echo "The Facterial of {$n} is ".factorial(x: $n);

echo "<br>";

$food= "fish";
$qty= 5;

//echo cooking($food, $qty);
echo cooking($food,5);
echo "<br>";

echo add(6,6);
echo "<br>";
echo addNumber(1,5,6,8);
echo "<br>";
echo largeTask();
echo "<br>";
echo recursive(0, 100, 5);

echo "<br>";
echo febonacci(0, 1, 10);
echo "<br>";
echo facterial(4);

