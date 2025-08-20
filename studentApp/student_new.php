<?php session_start();
if (!isset($_SESSION["uid"])) {
  header("location:index.php");
}
?>
<?php
require_once("lib.php");
require_once("student_class.php");

if (isset($_POST["btnSubmit"])) {

  $id = $_POST["txtId"];
  $name = $_POST["txtName"];
  $course = $_POST["txtCourse"];

  //Validation
  $errors = [];

  if (!preg_match("/^[0-9]{1,}$/", $id)) {
    $errors["id"] = "Invalid ID";
  }

  if (!preg_match("/^[a-zA-Z .]{2,}$/", $name)) {
    $errors["name"] = "Invalid name";
  }

  if (!preg_match("/^[a-zA-Z1-9 .]{2,}$/", $course)) {
    $errors["course"] = "Invalid Course";
  }
  //---------------//

  if (count($errors) == 0) {

    $student = new Student($id, $name, $course);
    $student->save();
    //echo "Success"; 
    header("location:student_app.php");
  } else {

    //    foreach($errors as $error){
    //        echo $error."<br>";
    //    }

  }
}

?>

<a href="student_app.php">Manage</a>
<?php
echo form_open("#");

//POST BACK
$id = isset($id) ? $id : "";
$name = isset($name) ? $name : "";
$course = isset($course) ? $course : "";

//ERROR
$id_error = isset($errors["id"]) ? $errors["id"] : "";
$name_error = isset($errors["name"]) ? $errors["name"] : "";
$course_error = isset($errors["course"]) ? $errors["course"] : "";
//echo $id_error;

echo input(["label" => "Id", "type" => "text", "name" => "txtId", "value" => $id, "error" => $id_error]);
echo input(["label" => "Name", "type" => "text", "name" => "txtName", "value" => $name, "error" => $name_error]);
echo input(["label" => "Course", "type" => "text", "name" => "txtCourse", "value" => $course, "error" => $course_error]);
echo input(["type" => "submit", "name" => "btnSubmit"]);
echo "</form>";
?>