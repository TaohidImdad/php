<?php 

$timeout = 300;

//Set the maxlifetime of the session
ini_set( "session.gc_maxlifetime", $timeout );
//Set the cookie lifetime of the session
ini_set( "session.cookie_lifetime", $timeout );

//Start a new session
session_start();

//Set the default session name
$s_name = session_name();
$_SESSION['uname']="happy";








header("location:abc.php");







   

?>