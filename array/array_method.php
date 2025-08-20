<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// numaric 
$carBrands = ["Cheverolet", "Chrysler","Ford", "Honda", "Toyota"];
//associative
$germanCars = [20 => "Audi", 22 => "Porche", 25 => "VW"];

//array of array
$states = [
    "Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
    "Nebraska" => array("population" => "1,711,263", "capital" => "Omaha")
   ];

  //createing array
   $state[1] = "Pennsylvania";
   $state[2] = "New Jersey";

   // extracting array
   list($a ,$b) = ["Cheverolet", "Chrysler"];

   // range
     range(1,20);
   //is_array();

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");


$states = array("Ohio", "New York");
unset($states[2]);
array_unshift($states, "California", "Texas");

$state2 = array("Ohio", "New York");
array_push($states, "California", "Texas");

$states = array("Ohio", "New York", "California", "Texas");
$state = array_shift($states);

$states = array("Ohio", "New York", "California", "Texas");
$statepop = array_pop($states);

$states = ["California", "Hawaii", "Ohio", "New York"];
//if(in_array($state, $states)) echo "Not to worry, $state is smoke-free!";

$state2["Pennsylvania"] = "December 12, 1787";
$state2["Ohio"] = "March 1, 1803";
$state2["Delaware"] = "December 7, 1787";
if (array_key_exists("Ohio", $state2)){
   // echo "ok";
}


$state3["Ohio"] = "March 1";
$state3["Delaware"] = "December 7";
$state3["Pennsylvania"] = "December 12";
$founded = array_search("December 7", $state3);
//if ($founded) printf("%s was founded on %s.", $founded, $state3[$founded]);

$state4["Delaware"] = "December 7, 1787";
$state4["Pennsylvania"] = "December 12, 1787";
$state4["New Jersey"] = "December 18, 1787";
$keys = array_keys($state4);
$keys = array_values($state4);
//print_r($keys);


$simpsons = [
    ['name' => 'Homer Simpson', 'gender' => 'Male' ,'age=>30'],
    ['name' => 'Marge Simpson', 'gender' => 'Female' ,'age=>31'],
    ['name' => 'Bart Simpson', 'gender' => 'Male' ,'age=>29']
   ];
   $names = array_column($simpsons, 'name','gender');
  // print_r($names);

//    print_r(key($simpsons[0] ));
//    print_r(next($simpsons[0] ));
//    print_r(prev($simpsons[0] ));
//    print_r(current($simpsons[0] ));
//    print_r(reset($simpsons[0] ));
//    print_r(end($simpsons[0] ));
  

//print_r(count($simpsons,1));
//print_r(sizeof($simpsons));


$states5 = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];
$stateFrequency = array_count_values($states5);
$uniqueStates = array_unique($states5);

$states = array("Delaware", "Pennsylvania", "New Jersey");
//print_r(array_reverse($states));
//print_r(array_reverse($states,1));

$state = array(0 => "Delaware", 1 => "Pennsylvania", 2 => "New Jersey");
$state = array_flip($state);


$grades = array(42, 98, 100, 100, 43, 12);
//sort($grades); //SORT_STRING   SORT_REGULAR   SORT_NUMERIC
//rsort($grades); //SORT_STRING   SORT_REGULAR   SORT_NUMERIC



$states6 = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
asort($states6);
arsort($states6);
// print_r($states6);
//print_r(asort($states6));



function multi(&$value,$key ){
     $value=$value * 5; 
 }
$grades5 = array(42, 98, 100, 100, 43, 12);
array_walk($grades5, 'multi');
//print_r($grades5);


$pic=array("picture1.jpg", "picture10.jpg", "picture2.jpg", "picture20.jpg");
$pic2=array("PICTURE10.jpg", "Picture1.JPG", "picture2.jpg", "picture20.jpg");

natsort($pic);
natcasesort($pic2);
//print_r($pic2);


ksort($states6);
krsort($states6);
// print_r($states6);

$num = array(1,2,3,10,44,50);

$a= function($a,$b){
   return $a<=>$b;
};

usort($num, $a);
// print_r($num);


$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9");
$cards = array_merge($face, $numbered);
shuffle($cards);
//print_r($cards);


$class1 = array("John" => 100, "James" => 85);
$class2 = array("Micky" => 78, "John" => 45);
$classScores = array_merge_recursive($class1, $class2);
//print_r($classScores);


$abbreviations = array("AL", "AK", "AZ", "AR");
$states = array("Alabama", "Alaska", "Arizona", "Arkansas");
$stateMap = array_combine($abbreviations,$states);
//print_r($stateMap);

$string= "Hamim,Javed,Raju";
$arrafl= preg_split("(, |,)", $string);
$arrays= explode(",",$string);
$arr2= implode(',',$arrays);
$arr3 = join(",",$arrays);
//print_r($arr3);



$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Colorado", "Connecticut");
$subset = array_slice($states, 4);
//print_r($subset);


$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Connecticut");
$subset = array_splice($states, 4,0,['Hello']);

//print_r($states);
//print_r($subset);

$array1 = array("OH", "CA", "NY", "HI", "CT");
$array2 = array("OH", "CA", "HI", "NY", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI");
//$intersection = array_intersect($array1, $array2, $array3);
$diff = array_diff($array3,$array1 );


print_r($diff);
//print_r($intersection);


// $array1 = array("OH" => "Ohio", "CA" => "California", "HI" => "Hawaii");
// $array2 = array("50" => "Hawaii", "CA" => "California", "OH" => "Ohio");
// $array3 = array("TX" => "Texas", "MD" => "Maryland", "OH" => "Ohio");
// $intersection = array_intersect_assoc($array1, $array2, $array3);
//print_r($intersection);

$grades = array(42, 45, 42);

$rand= array_rand($grades); //key
echo $rand;


// $grades = array(42, "hello", "42");


//  $aaa= array_filter($grades, function($value){
//         if($value > 50) return $value;
//   });

//  print_r($aaa);

//  $total = array_sum($grades);
//  print $total;


/*
1. array()
2. list()
3. explode()
4. range()
5. is_array()
6. print_r()
7. array_unshift()
8. array_push()
9. array_pop()
10. in_array()
11. array_key_exists()
12. array_search()
13. array_keys()
14. array_values()
15. array_column()
16. key()
17. next()
18. current()
19. prev()
20. reset()
21. end()
22. array_walk()
23. count()
24. sizeof()
25. array_count_value()
26. array_unique()
27. array_reverse()
28. array_flip()
29. sort()
30. asort()
31. rsort()
32. arsort()
33. natsort()
34. netcasesort()
35. ksort()
36. krsort()
37. usort()
38. array_marge()
39. array_marge_recursive()
40. array_combine()
41. array_slice()
42. array_splice()
43. array_intersect()
44. array_intersect_key()
45. array_intersect_assoc()
46. array_diff()
47. array_diff_key()
48. array_diff_assoc()
49. array_udiff_assoc()
50. array_udiff_uassoc()
51. array_diff_uassoc()
52. array_rand()
53. shuffle()
54. array_sum()
55. array_chunk()

*/
 

?>