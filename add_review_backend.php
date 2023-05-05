<?php
include "database.php";
session_start();
if(isset($_POST['add_review'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $qry = "INSERT INTO reviews (name,email,phone,msg) VALUES ('$name','$email','$phone','$msg')";
    $run_qry = mysqli_query($conn, $qry);

    if($run_qry){
        $msg="Your Review has been submitted !";
        $_SESSION["message"]=$msg;
        header("location:index.php");
        exit(0);
    }
    else{
        $msg="Review not submitted !";
        $_SESSION["message"]=$msg;
        header("location:add_reviews.php");
        exit(0);
    }
}

?>