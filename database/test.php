<?php 
error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', true); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE); // Error/Exception file logging engine.
ini_set('error_log', 'D:\www\repo\Idb_batch_61\php\database\errors.log');
//error_log('log.sql');

// define("SERVER","localhost");
// define("USER","root");
// define("PASS","");
// define("DATABASE","batch61");


// $db=new mysqli(SERVER,USER,PASS,DATABASE);

// try {
//    print_r( $db);
// } catch (Exception $th) {
//     trigger_error("not divided by 0");
// }finally{
//     trigger_error("not divided by 0");
// }

$a=0;

function checkNum($number) {
    if($number>1) {
      throw new Exception("Value must be 1 or below");
    }
    return true;
  }
  
  //trigger exception
  //checkNum();

  try {
    checkNum(5);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
  }
  
  //catch exception
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    // error_log($e->getMessage(),'log.sql');
  }



 $data = array_map('str_getcsv',file("name.csv")) ;

 print_r($data[1]);





?>