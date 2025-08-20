<?php session_start();
unset($_SESSION["unid"]);
unset($_SESSION["uname"]);
unset($_SESSION["uemail"]);

session_unset();
session_destroy();

header("location:index.php");

