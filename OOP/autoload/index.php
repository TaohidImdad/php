<?php 
namespace Autoload;
// use model\Product;
// use model\Supplyer;
// use ClassFolder\Role;
// use Autoload\ClassFolder\User;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


include_once "class/class.php";


// spl_autoload_register(function($className){
//  $directories=[
//       "class/",
//       "model/"
//  ];
//   foreach ($directories as $key => $value) {
   
//       $file= __DIR__.DIRECTORY_SEPARATOR.$value.$className. ".php";

//       if(file_exists($file)){
//         require_once $file;
//         return;
//       }
//   }
//   echo "Class $className could not be loaded.";
// });


 $user= new ClassFolder\User();
 $rol= new \ClassFolder\Role();
// $p= new Product();
// $s= new Supplyer();

$date= new \DateTime();

//echo  __DIR__;
// echo __FILE__;
// echo __LINE__;
 //echo __NAMESPACE__;





?>