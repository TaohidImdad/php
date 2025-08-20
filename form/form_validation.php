<?php

if (isset($_POST["btnSubmit"])) {
    //print_r($_POST);
    //Received post data into variables.
    $username = $_POST["txtUsername"];
    $email = $_POST["txtEmail"];
    $password = $_POST["txtPassword"];

    // Input validation
    $errors = [];

    if (!preg_match("/^[a-zA-Z]{2,}$/", $username)) {
        $errors["username"] = "Invalid Username";
    }

    if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9]*[@][a-zA-Z0-9]{2,}[.][a-zA-Z]{2,3}$/", $email)) {
        $errors["email"] = "Invalid Email";
    }

    if (!preg_match("/^[a-zA-Z0-9]{4,8}$/", $password)) {
        $errors["password"] = "Invalid Password";
    }

    // Check if any errors found or not
    if (count($errors) == 0) {
        //No error region. save data into database or file here.
        echo "Saved";

        //clear all post variables after save
        unset($username);
        unset($email);
        unset($password);
    } else {
        //Error found region. Print all errors here

        // foreach ($errors as $error){
        //     echo $error;
        // }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        /* .design{
            background-color:lime;
            border:1px solid #000;
            width:300px;
            margin: 20px auto;
            padding:20px
        } */
    </style>
</head>

<body>

    <form class="design" action="#" method="post" onsubmit="return confirm('Are your sure?')">
        <div>
            Username <br>
            <input type="text" name="txtUsername" /><?php echo isset($errors["username"]) ? $errors["username"] : ""; ?>
        </div>

        <div>
            Email <br>
            <input type="text" name="txtEmail" /><?php echo isset($errors["email"]) ? $errors["email"] : ""; ?>
        </div>

        <div>
            Password <br>
            <input type="password" name="txtPassword" /><?php echo isset($errors["password"]) ? $errors["password"] : ""; ?>
        </div>

        <div style="margin-top:10px;">
            <input type="submit" name="btnSubmit" value="Submit" />
        </div>
    </form>

</body>

</html>