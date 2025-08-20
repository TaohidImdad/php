<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
set_time_limit(0);
//https://curl.se/docs/caextract.html

$ch= curl_init("https://cdn.pixabay.com/photo/2018/01/12/14/24/night-3078326_1280.jpg");

// curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
// curl_setopt($ch , CURLOPT_POSTFIELDS, "abc=2");
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// for download
$file= fopen("image.jpg",'w');
curl_setopt($ch,CURLOPT_FILE,$file);



$result=curl_exec($ch);
$error=curl_error($ch);
if ($error){
    print_r($error);
}


?>