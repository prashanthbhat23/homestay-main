<?php
include "database.php";

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
?>