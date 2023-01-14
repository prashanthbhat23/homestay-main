<?php
include "../database.php";
// logout_user

if(isset($_POST["logout_admin"])){
    unset($_SESSION["admin_auth"]);
    $msg="Logged out successfully !";
    $_SESSION["message"]=$msg;
    header("location:../login.php");
    exit(0);
}
?>