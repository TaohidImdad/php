<?php

//  print_r(scandir(getcwd()));

//  //is_dir();

//  mkdir("test",0777,true);
//  sleep();
//  unlink();
//  rmdir();
//file_exists();


// mkdir("text/f/f/f3",0777,true);
// file_put_contents("text/a.txt","hello world");
// file_put_contents("text/f/b.txt","hello world");
// file_put_contents("text/f/f/c.txt","hello world");
// file_put_contents("text/f/f/f3/d.txt","hello world");



deletedir(getcwd().DIRECTORY_SEPARATOR."text");

//print_r(scandir(getcwd().DIRECTORY_SEPARATOR."text"));
function deletedir($path){
    $filePath= scandir($path);

    if (count($filePath) >2) {
      foreach ($filePath as $key => $value) {
          if($value != "." && $value != ".."){
                 
                $filePath= $path.DIRECTORY_SEPARATOR.$value;

                if(is_dir($filePath)){
                    deletedir($filePath);
                }else{
                  //print_r("file: $filePath");
                  unlink($filePath);
                }

               
          }
      }

        
    }

    rmdir($path);
}




?>