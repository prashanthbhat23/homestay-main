<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "admin_auth.php"; 
include "../database.php";
?>

<?php
//no of user
$query1="SELECT * FROM user";
$run_query1 = mysqli_query($conn,$query1);
if($run_query1){
    $num_rows_user = $run_query1->num_rows;
}

//no of bookings
$query2="SELECT * FROM booking";
$run_query2 = mysqli_query($conn,$query2);
if($run_query2){
    $num_rows_book = $run_query2->num_rows;
}

//no of rooms
$query3="SELECT * FROM stay";
$run_query3 = mysqli_query($conn,$query3);
if($run_query3){
    $num_rows_room = $run_query3->num_rows;
}
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
                <h3>Dashboard</h3>
            <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red" style="background-color:#7e4b26">
                            <a href="#">
                                <i class="fa fa-user fa-5x" style="font-weight: 900;"> <?php echo $num_rows_user; ?> </i>
                                <h5> Total customers</h5>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="main-box mb-red" style="background-color:#7e4b26">
                            <a href="#">
                                <i class="fa fa-book fa-5x" style="font-weight: 900;"> <?php echo $num_rows_book; ?> </i>
                                <h5> Total Bookings</h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="main-box mb-red" style="background-color:#7e4b26">
                            <a href="#">
                                <i class="fa fa-building fa-5x" style="font-weight: 900;"> <?php echo $num_rows_room; ?> </i>
                                <h5> Total Rooms</h5>
                            </a>
                        </div>
                    </div>


                </div>
			

          
                <h3>Manage User</h3> <br>
            <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Adhar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            $view_user_query="SELECT * FROM user";
                            $run_view_user_query = mysqli_query($conn,$view_user_query);
                            if($run_view_user_query){
                            while($row = $run_view_user_query->fetch_assoc()) {
                            ?>
                        <form id="form" action="upload.php" method="POST">
                            <tr>
                                <td><?= $i ?> <input type="hidden" name="user_id" value="<?=$row["id"]?>"></td>
                                <td> <?=$row["name"]?></td>
                                <td> <?=$row["email"]?></td>
                                <td> <?=$row["phone"]?></td>
                                <td> <?=$row["adhar"]?></td>
                                <?php if($row["isactive"]==1){ ?>
                                <td><button name="disable_user" type="submit" class="timer btn btn-warning btn-sm">Disable</button></td>
                                <?php } 
                                else{?>
                                <td><button name="enable_user" type="submit" class="timer btn btn-success btn-sm">Enable</button></td>
                                <?php } ?>
                            </tr>
                        </form>

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

        <h3>Manage Stay Rooms</h3> <br>
        <div class="row">
        <?php
        $view_stay_query="SELECT * FROM stay";
        $run_view_stay_query = mysqli_query($conn,$view_stay_query);
        if($run_view_stay_query){
        while($row = $run_view_stay_query->fetch_assoc()) {
        ?>    
        <form id="form" action="upload.php" method="POST">
        <div class="col-md-4">
        <div  class="portfolio-item nature landscape mix_all" data-cat="nature landscape" >
            <img src="../assets/images/rooms/<?=$row["image"]?>" class="img-responsive " alt="" style="height:250px;width:100%;" />
            <div class="overlay">
            <p><?=$row["room_type"]?></p>
            <input type="hidden" name="room_id" value="<?=$row["id"]?>">
            <a class="preview timer btn btn-info" title="<?=$row["room_type"]?>" href="../assets/images/rooms/<?=$row["image"]?>"><i class="fa fa-plus"></i></a>
            <?php if($row["status"]==0){ ?>
            <button name="disable_room" type="submit" class="timer btn btn-warning">Disable</button>
            <?php } 
            else{?>
            <button name="enable_room" type="submit" class="timer btn btn-success">Enable</button>
            <?php } ?>
            </div>
        </div>
        </div> 
        </form>
        <?php 
    }
    $no_rows = $run_view_stay_query->num_rows;
    if(!$no_rows > 0){ ?>
    <div class="div" style="margin : auto 30px;">
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            No rooms added
        </div>
    </div>
    
    <?php  }
    }
        ?>
        </div>
        <!-- room end -->
       





        </div>
        </div>
    </div>
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