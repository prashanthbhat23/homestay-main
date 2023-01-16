<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "admin_auth.php";
include "../database.php"; 
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS--> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
      
    </style>
</head>

<body>
    <div id="wrapper">
        <?php include "admin_nav.php"  ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <h1>Homestay Bookings</h1><br>
        <div class="row">
            <?php
            $i=1;
            $view_booking_query="SELECT * FROM booking";
            $run_view_booking_query = mysqli_query($conn,$view_booking_query);
            if($run_view_booking_query){
            while($row = $run_view_booking_query->fetch_assoc()) {
            ?>
        <div class="col-3">    
<div class="card" style="width: 18rem;">
        <div class="card-body">
            <ul>
                <li>
                <?= $i ?>
                </li>
                <li>
                <?=$row["u_name"]?>
                </li>
                <li>
                <?=$row["room_type"]?>
                </li>
                <li>
                <?=$row["check_in"]?>
                </li>
                <li>
                <?=$row["check_out"]?>
                </li>
                <li>
                <?=$row["phone"]?>
                </li>
                <li>
                <?=$row["adhar"]?>
                </li>
                <li>
                <?=$row["final_price"]?>
                </li>
                <li>
                <?php 
                if($row["status"]==1){ ?>
                    <button class="btn btn-sm btn-info">Complete</button>
                <?php
                }
                ?>
                </li>
            </ul>
        </div>
    </div>
            </div>
            <?php 
            $i++;
            } }
            else{
                echo "no run q";
            }
            ?>
</div>
   
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->
    <!-- <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script> -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>



</body>

</html>
