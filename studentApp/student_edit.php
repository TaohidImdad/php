<?php session_start();

if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>
<?php
require_once("lib.php");
require_once("student_class.php");

if (isset($_POST["btnEdit"])) {
    $id = $_POST["txtId"];
    $row = Student::search($id);
    $name = $row["name"];
    $course = $row["course"];
}

if (isset($_POST["btnSaveChange"])) {
    $id = $_POST["txtId"];
    $name = $_POST["txtName"];
    $course = $_POST["txtCourse"];
    $student = new Student($id, $name, $course);
    $student->update();
    header("location:student_app.php");
}

?>
<a href="student_app.php">Back</a>
<?php
echo form_open("#");
echo input(["label" => "Id", "type" => "text", "name" => "txtId", "value" => $id]);
echo input(["label" => "Name", "type" => "text", "name" => "txtName", "value" => $name]);
echo input(["label" => "Course", "type" => "text", "name" => "txtCourse", "value" => $course]);
echo input(["type" => "submit", "name" => "btnSaveChange"]);
echo "</form>";
?>