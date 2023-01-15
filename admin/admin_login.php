<?php
session_start();

if(isset($_POST["admin_login"])){
    $uname=$_POST["uname"];
    $password=$_POST["password"];

    if($uname != NULL || $password != NULL){
        if($uname == "admin" || $password == "admin123"){
            $_SESSION["admin_auth"]=true;
            $_SESSION["message"]="Log in success!";
            header("location: dashboard.php");
            exit(0);
        }
        else 
        {
            $_SESSION["message"]="Invalid!";
            header("location: admin_index.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION["message"]="Username or password cannot be empty !";
        header("location: admin_index.php");
        exit(0);
    }
}


//log out

if(isset($_POST["logout_admin"])){
    unset($_SESSION["admin_auth"]);
    $msg="Logged out successfully !";
    $_SESSION["message"]=$msg;
    header("location: admin_index.php");
    exit(0);
}

?>