<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once("vendor/autoload.php");
use Sunra\PhpSimple\HtmlDomParser;

$word="Morning";
$url="https://www.isdb-bisew.org";

$ch= curl_init($url);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//  curl_setopt($ch,CURLOPT_RETURNTRANSFER ,1);
$resultl = curl_exec($ch);




// $error=curl_error($ch);
// if ($error){
//     print_r($error);
// }

?>