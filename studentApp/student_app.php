<?php session_start();

if (!isset($_SESSION["uid"])) {
  header("location:index.php");
}
?>


<style>
  table,
  th,
  td {
    border: 1px solid lightgray;
    border-collapse: collapse;
  }

  td,
  th {
    padding: 10px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>

<a href="student_new.php">New Student</a>
<a href="logout.php">logout</a>
<a href="search.php">search</a>
<?php
require_once("lib.php");
require_once("student_class.php");

if (isset($_POST["btnDelete"])) {
  $id = $_POST["txtId"];
  Student::delete($id);
}

echo Student::display();
?>