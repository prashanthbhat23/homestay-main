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
</head>

<body>
    <div id="wrapper">
        <?php include "admin_nav.php"  ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <h1>Homestay Bookings</h1><br>
                <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Room</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Phone</th>
                <th>Adhar</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tbody id="mytable">
            <?php
            $i=1;
            $view_booking_query="SELECT * FROM booking";
            $run_view_booking_query = mysqli_query($conn,$view_booking_query);
            if($run_view_booking_query){
            while($row = $run_view_booking_query->fetch_assoc()) {
            ?>
            <tr>
                <td> <?= $i ?> </td>
                <td> <?=$row["u_name"]?> </td>
                <td> <?=$row["room_type"]?> </td>
                <td> <?=$row["check_in"]?> </td>
                <td> <?=$row["check_out"]?> </td>
                <td> <?=$row["phone"]?> </td>
                <td> <?=$row["adhar"]?> </td>
                <td> <?=$row["final_price"]?> </td>
                <td> 
                <?php 
                if($row["status"]==1){ ?>
                    <button class="btn btn-sm btn-info">Complete</button>
                <?php
                }
                ?>
                </td>
            </tr>
            <?php 
            $i++;
            } }
            else{
                echo "no run q";
            }
            ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>

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