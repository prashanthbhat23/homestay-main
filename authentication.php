<?php
include "database.php";
session_start();

if(!isset($_SESSION["auth"]))
{
    $_SESSION["message"]="Log in to visit website";
    header("location: login.php");
    exit(0);
}

if(isset($_POST["down"]))
{
   $sql="UPDATE setting SET shutdown=1";
   $run_sql = mysqli_query($conn, $sql);
   if($run_sql){
       header("location: admin/settings.php");
       exit(0);
   }
}
elseif(isset($_POST["live"]))
{
   $sql="UPDATE setting SET shutdown=0";
   $run_sql = mysqli_query($conn, $sql);
   if($run_sql){
       header("location: admin/settings.php");
       exit(0);
   }
}

$sql="SELECT shutdown FROM setting LIMIT 1";
$run_sql = mysqli_query($conn, $sql);
if($run_sql){
    $data = $run_sql->fetch_assoc();
    if($data["shutdown"]==1){
        header("location: shutt.php");
        exit(0);
    }
}
?>