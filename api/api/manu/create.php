<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once("../../configs/db_config.php");
include_once("../../model/Manufacturers.class.php");


$data=json_decode(file_get_contents("php://input"));

$manu= new Manufacturers("","$data->name","$data->contact");
$result = $manu->save();



    echo json_encode(["success"=>$result]);






?>