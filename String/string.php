<?php

"ASCCI CODE  128";

echo chr("128");
echo ord("A");

$string = "Hello World";

echo $string[1];

echo substr($string,1);
echo $length= strlen($string);

echo "<br>";
for ($i=1; $i <= $length ; $i++) { 
   echo  $string[$i * -1];
}

echo strrev($string);

// explode();
// implode();
// join();
// split();

$string = "It is a Test case for,spliting the text";
$hhh= preg_split("/ |,/",$string );

echo PHP_EOL;

print_r($hhh);
echo "<br>";
//string search 
$string = "It is a Test case for,spliting the text";
echo strpos($string, "test");
echo stripos($string, "test",9);
echo strrpos($string, "test",9);
echo strripos($string, "test",9);
// === type check

str_replace("abc", "cde", $count);
str_replace(array("abc"), array("cde"), $count);
str_ireplace(array("abc"), array("cde"), $count);

// trim($abc,"\n");
// ltrim() and rtrim()

wordwrap($string,10);
// nl2br();

$string ="abul Hossen 014";

$abc = sscanf($string , "%s %s %d", $name, $lastname, $mobile);

print_r($abc);

?>