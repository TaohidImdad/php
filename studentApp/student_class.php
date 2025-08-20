<?php session_start();

if (!isset($_SESSION["uid"])) {
  header("location:index.php");
}


class Student
{ //

  private $id;
  private $name;
  private $course;

  // constructor
  function __construct($id, $name, $course)
  {
    $this->id = $id;
    $this->name = $name;
    $this->course = $course;
  }

  //Setter function
  //   public function setName($_name){
  //      $this->name=$_name;
  //   }     

  //   public function setCourse($_course){
  //     $this->course=$_course;
  //  }       


  //   //getter function
  //   public function getName(){
  //      return $this->name;
  //   }

  //   public function getCourse(){
  //     return $this->course;
  //  }

  //--------CRUD function---------

  public function save()
  {
    $csv = $this->id . "," . $this->name . "," . $this->course . PHP_EOL;
    file_put_contents("student_data.txt", $csv, FILE_APPEND);
  }

  public static function delete($_id)
  {
    $rows = file("student_data.txt");
    $students = "";
    foreach ($rows as $row) {
      list($id) = explode(",", $row);
      if ($id != $_id) {
        $students .= $row;
      }
    }
    file_put_contents("student_data.txt", $students);
  }

  public function update()
  {
    $rows = file("student_data.txt");
    $students = "";
    foreach ($rows as $row) {
      list($id, $name, $course) = explode(",", $row);

      if ($id == $this->id) {
        $csv = $this->id . "," . $this->name . "," . $this->course . PHP_EOL;
        $students .= $csv;
      } else {
        $csv = $id . "," . $name . "," . $course;
        $students .= $csv;
      }
    }
    file_put_contents("student_data.txt", $students);
  }



  public static function display()
  {
    $rows = file("student_data.txt");
    $html = "<table>";
    $html .= "<tr><th>Id</th><th>Name</th><th>Course</th><th>Action</th></tr>";
    foreach ($rows as $row) {
      list($id, $name, $course) = explode(",", $row);

      $edit = action_button(["action" => "student_edit.php", "name" => "btnEdit", "value" => "Edit", "id" => $id]);
      $delete = action_button(["action" => "#", "name" => "btnDelete", "value" => "Delete", "id" => $id]);

      $html .= "<tr><td>$id</td><td>$name</td><td>$course</td><td>$edit  $delete</td></tr>";
    }
    $html .= "</table>";
    return $html;
  }

  public static function search($_id)
  {
    $rows = file("student_data.txt");

    $data = [];
    foreach ($rows as $row) {
      list($id, $name, $course) = explode(",", $row);
      if ($id == $_id) {
        $data = ["name" => $name, "course" => $course];
        break;
      }
    }

    return $data;
  }
  public static function searchid($_id)
  {
    $rows = file("student_data.txt");
    foreach ($rows as $row) {
      list($id, $name, $course) = explode(",", $row);
      if ($id == $_id) {
        echo "ID: $id<br>";
        echo "Name:$name<br>";
        echo "Course:$course<br><br><br>";
        break;
      }
    }
  }


  //UI functions
  //Util functions
  //Event functions
  //Outputing/report functions

  function __toString()
  {
    return "Id: " . $this->id . ", Name: " . $this->name . ", Course:" . $this->course;
  }
}
