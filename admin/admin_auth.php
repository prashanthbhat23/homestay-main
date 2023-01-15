<?php
session_start();

if(!isset($_SESSION["admin_auth"]))
{
    $_SESSION["message"]="Please Log in";
    header("location: admin_index.php");
    exit(0);
}
?>