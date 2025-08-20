<?php 


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// fopen()	Open a file
// fwrite()	Write data to a file
// fread()	Read data from a file
// fclose()	Close a file
// file_get_contents()	Read entire file as a string
// file_put_contents()	Write data to file
// fgets()	Read a single line from a file
// feof()	Check if end of file is reached
// file_exists()	Check if file exists
// unlink()	Delete a file
// copy()	Copy a file
// rename()	Rename/move a file
// mkdir()	Create a new directory
// rmdir()	Remove an empty directory
// scandir()	List files/directories in a directory
// chmod()	Change file permissions
// basename()	Get filename from a path
// dirname()	Get directory path
// filesize()	Get file size in bytes
// is_file()






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



//deletedir(getcwd().DIRECTORY_SEPARATOR."text");

//print_r(scandir(getcwd().DIRECTORY_SEPARATOR."text"));
// function deletedir($path){
//     $filePath= scandir($path);

//     if (count($filePath) >2) {
//       foreach ($filePath as $key => $value) {
//           if($value != "." && $value != ".."){
                 
//                 $filePath= $path.DIRECTORY_SEPARATOR.$value;

//                 if(is_dir($filePath)){
//                     deletedir($filePath);
//                 }else{
//                   //print_r("file: $filePath");
//                   unlink($filePath);
//                 }

               
//           }
//       }

        
//     }

//     rmdir($path);
// }

const FILE = "a/abc.php";
//print_r(pathinfo(__FILE__)) ;

//echo basename(FILE);
//echo dirname(FILE);
//echo realpath(__FILE__);
//filesize();  //bite  round($file/1024,2)
//$kilo= round($file/1024,2)
//echo round(disk_free_space("D:")/1024/1024/1024) ;
 //echo disk_total_space("D:");
 //echo date ("d-m-Y  H:s:i", fileatime(__FILE__));
 echo date ("d-m-Y  H:s:i", fileatime(__FILE__)); //accesss
 echo date ("d-m-Y  H:s:i", filectime(__FILE__)); //change
 echo date ("d-m-Y  H:s:i", filemtime(__FILE__)); //modified





?>




