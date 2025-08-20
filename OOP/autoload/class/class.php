<?php 


$folder= "class";

  foreach(glob("{$folder}/*.class.php") as $file){
     // print_r($file);
    
    include_once $file;
  }

$folder2= "model";

  foreach(glob("{$folder2}/*.php") as $file){
      include $file;
  }






?>