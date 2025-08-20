<?php

// array declaration  array("abc","123")  ["abc", "123'] , vardump();  echo array[0] modify array[2]="hamas'
// offset
// array  count(array)  for loop
// array method  array_pop() array_shift() to remove element 
// array array_unshift() array_push() aray[]=""

// associative array   , foreach , array_keys(), array_values()
// explode(); join()  preg_split("/(, |,)/", array)
// multidimentional array 
//serialized unserealized  json_encode() json_decode()
// copy by value  deep copy  $a=5;
// copy by referance shalllow copy   $b=&$a 

// unset([array"key"]) to remove element of array
// isset()  empty() is_numaric()  $name !=""
// array_slice() 
// array_splice() modify actual array
// arary_merge()  array1+ array2
// sort() asort() with key arsort() reversesort() rsort() ksort() krsort()

//array search 
// in_array() , array_search() for index search , key_exist();

// array differ intersect 
//array_intersect() array_intersect_assoc() array_diff() array_diff_assoc()

// array_filter(); arary_map() array_walk();

// value assign  list($a , $b)= array("name","mobil");
// range(2,20,2) mt_rand(0,5); array_rand()



//1 

$students = array(
     "rahim",
     "karim",
     "rashed",
);
$students2 = array(
     "rahim",
     "karim",
     "rashed",
);

for($i=0 ; $i< count($students) ; $i++){
    echo $students[$i]."<br>";
}

for($i=count($students) -1 ; $i>=0 ; $i--){
    echo $students[$i]."<br>";
}

for($i=0 ; $i< count($students) ; $i++){
    array_push($students2,  $students[$i]);
}

print_r($students2);

$foods = [
    "vegitables"=>" alu, begun , tometo",
    "fruit"=>" apple, banana , dalim",
    "meet"=>" chicken, mutton , beef",
];

$foods['meet']=$foods['meet'].', lamb';

// foreach ($foods as $key => $value) {
//     echo $key ."=". $value;
// }

$count= count($foods);
$keys = array_keys($foods);
for ($i=0; $i <$count ; $i++) { 
   $key= $keys[$i];
   echo $foods[$key]."<br>";
}
// $foods["meet"].=", mutton2";

// foreach ($foods as $key => $value) {
//     echo $key ."=". $value;
// }

// $keys = array_keys($foods);

// print_r($keys);

$flowers= 'joba, bokul, hasnahena, togor';

$arrFlow= explode(', ',$flowers);
$arrafl= preg_split("(, |,)", $flowers);

$backtostring= join(",", $arrFlow);

//print_r($arrafl);

$foods = [
    "vegitables"=> explode(","," alu, begun , tometo") ,
    "fruit"=> explode(", "," apple, banana , dalim"),
    "meet"=>explode(", "," chicken, mutton , beef"),
];




$foods3 = [
    "vegitables"=>[" alu, begun , tometo"],
    "fruit"=>[" apple, banana , dalim"],
    "meet"=>[" chicken, mutton , beef"],
];


$sample= [
    [1,2,3,],
    [4,6,2,8],
    [1,2,3, [
        [1,2,3]
    ]],
    ];

print_r($sample);

$flow= serialize($foods3);
$flow2= unserialize($flow);

$flow3= json_encode($foods3);
$flow3= json_decode($flow3,true);

unset($flow3['meet']);
print_r($flow3);

?>