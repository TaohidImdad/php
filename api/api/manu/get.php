<?php 
include_once("../../configs/db_config.php");
include_once("../../model/Manufacturers.class.php");


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');



if (isset($_GET["id"])) {
    $result = Manufacturers::get($_GET["id"]);
    echo json_encode(["data"=>$result]);
}




?>