<?php 

session_start();

//Check the session exists or not
if (!$_SESSION['loggedin']) {
     header("location:login.php");
}

echo "welcome  {$_SESSION['username']}";

 

$inactive = 10; // 10 minutes

// Check if 'last_activity' is set and if the inactivity duration has been exceeded
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $inactive) {
    // If inactive, unset all session variables and destroy the session
    session_unset(); // Clear session variables
    session_destroy(); // Destroy the session itself
    echo "Session has been destroyed due to inactivity.";
} else {
    // Update last activity time stamp
    $_SESSION['last_activity'] = time();
}

?>