<?php

$db= new PDO("sqlite:my.db");

$result= $db->query("select * from students");

//print_r($result->fetchAll(PDO::FETCH_ASSOC));

$studnets=[
     ["name"=>"Jamal"],
     ["name"=>"Hasan"],
     ["name"=>"Habib"],
];

// foreach ($studnets as $key => $studnet) {
 
//     // print_r($studnet);
//     $result= $db->query("insert into students(name)values('{$studnet['name']}')");
// }


$result= $db->query("select * from students");

//print_r($result->fetchAll(PDO::FETCH_ASSOC));

$stmt = $db->prepare("select * from students where id =?");
$id=1;
 $stmt->execute([$id]);

print_r($stmt->fetch(PDO::FETCH_ASSOC));



?>