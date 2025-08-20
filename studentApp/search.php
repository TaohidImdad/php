<?php
require_once("student_class.php");
if (isset($_POST["btn"])) {
    $id = $_POST["id"];
    Student::searchid($id);
}


?>



<a href="student_app.php">Home page</a>
<form action="#" method="post">
    <h3>Search ID</h3>
    <input type="text" name="id" id="">
    <input type="submit" name="btn" id="" value="Go">
</form>