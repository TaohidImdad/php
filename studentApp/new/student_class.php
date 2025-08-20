<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Student{

    public  $id,$name,$course;

    public function __construct( $id,$name, $course){
       $this->id= $id;
       $this->name= $name;
       $this->course= $course;
    }


    public function save(){
        $data="$this->id,$this->name,$this->course".PHP_EOL;
        file_put_contents("student_data.txt",$data,FILE_APPEND);
    }

    public  function update(){
        $file= file("student_data.txt");
        $data="";
        foreach($file as $row){
            list($id,$name,$course)=explode(",",$row);
            
            if($id == $this->id){
                $data.="$this->id,$this->name,$this->course". PHP_EOL;
            }else{
                $data.="$id,$name,$course";
            }

        }
        file_put_contents("student_data.txt",$data);
    }
    public static function delete($_id){
        $file= file("student_data.txt");
        $data="";
        foreach($file as $row){
            list($id)=explode(",",$row);
            if($id != $_id){
                $data.=$row;
            }

        }
        file_put_contents("student_data.txt",$data);
    }
    public static function dispaly(){
        
        $file= file("student_data.txt");
        $html="";
        $html.="<table><tr><th>Id</th><th>Name</th><th>Course</th></tr>";
            foreach($file as $row){
                list($id,$name,$course)=explode(",",$row);
            $html.=" <tr><td>$id</td><td>$name</td><td>$course</td>";
            }
           $html.="</table>";

         echo $html;

    }

}


  (new Student(10,"Hasan","Java"))->update();

//Student::delete("Hasib");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

table,
  th,
  td {
    border: 1px solid lightgray;
    border-collapse: collapse;
    padding: 10px;
  }

  tr:nth-child(even){
    background-color: #f2f2f2;
  }

</style>
<body>
    
<?php Student::dispaly(); ?>
</body>
</html>

