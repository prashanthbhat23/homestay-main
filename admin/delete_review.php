<?php
include "../database.php"; 
if(isset($_POST['del_review'])){
    $id = $_POST['id'];
    $qry = "DELETE FROM reviews where id = '$id'";
    $run_qry = mysqli_query($conn, $qry);

    if($run_qry){
        $msg="Review Deleted!";
        $_SESSION["message"]=$msg;
        header("location:view_reviews_user.php");
        exit(0);
    }
    else{
        $msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:view_reviews_user.php");
        exit(0);
    }
}

?>