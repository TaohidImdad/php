<?php 

$timeout = 86400;
//Set the maxlifetime of the session
ini_set( "session.gc_maxlifetime", $timeout );
//Set the cookie lifetime of the session
ini_set( "session.cookie_lifetime", $timeout );


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check against a hardcoded username and password for simplicity
    if ($username == "admin" && $password == "password") {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

<form method="post" action="">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>


