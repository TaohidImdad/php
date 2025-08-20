<?php session_start();

if (isset($_POST["btn"])) {
    $_name = $_POST["name"];
    $_password = $_POST["password"];

    $rows = file("admin.php");
    foreach ($rows as $row) {
        list($id, $name, $password, $email) = explode(",", $row);

        if ($_name == $name && $_password == $password) {

            $_SESSION["uid"] = $id;
            $_SESSION["uname"] = $name;
            $_SESSION["uemail"] = $email;
            header("location:student_app.php");
        } else {
            echo "incourrect username or password";
        }
    }
}



?>








<form action="#" method="post">
    Name <br>
    <input type="text" name="name" id=""> <br>
    passsword <br>
    <input type="text" name="password" id=""><br>
    <input type="submit" name="btn" id="">
</form>