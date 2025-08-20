<?php
$folder="models";
foreach (glob("{$folder}/*.class.php") as $filename)
{
    include $filename;
}

$directories = glob($folder.'/*' , GLOB_ONLYDIR);
foreach($directories as $dir){
    foreach (glob("{$dir}/*.class.php") as $filename)
    {   
        include_once $filename;
    }
}

