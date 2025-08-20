<?php 
include_once("../../configs/db_config.php");
include_once("../../model/Manufacturers.class.php");


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


$result = Manufacturers::getAll();

echo json_encode(["data"=>$result])



?>