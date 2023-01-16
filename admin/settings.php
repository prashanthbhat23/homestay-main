<?php include "../database.php"; 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

    <div id="wrapper">
        <?php include "admin_nav.php"; ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                $sql = "SELECT * FROM setting limit 1";
                $res = mysqli_query($conn,  $sql);
                $data = $res->fetch_assoc();
                ?>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        General site settings
                    </div>
                    <div class="panel-body">
                        <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Site Name</label>
                                <input class="form-control" type="text" value="<?=$data['title'] ?>" name="title">
                                <label>About Us</label>
                                <textarea class="form-control" type="text" name="description"><?=$data['about_us'] ?></textarea>
                            </div>
                            <button type="submit" name="general_set" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Contact detail settings
                    </div>
                    <div class="panel-body">
                        <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Phone No</label>
                                <input class="form-control" value="<?=$data['phone'] ?>" type="number" name="phone">
                                <label>Email</label>
                                <input class="form-control" value="<?=$data['email'] ?>" type="email" name="email">
                                <label>Map Link</label>
                                <input class="form-control" value="<?=$data['map'] ?>" type="text" name="map">
                                <label>Address</label>
                                <textarea class="form-control" type="text" name="address"><?=$data['address'] ?></textarea>
                            </div>
                            <button type="submit" name="contact_set" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3>
                        Shutdown Website
                        </h3> 
                        <p>
                            By Shutting down Website , Website will be inaccessible!!!
                        </p>
                        <div class="right">
                            <form id="myform" action="../authentication.php" method="POST">
                                <?php 
                                if($data["shutdown"]==0){ ?>
                                <button name="down" type="submit" class="timer btn btn-danger">Shut Down</button>
                                <?php } 
                                else{?>
                                <button name="live" type="submit" class="timer btn btn-success">Live</button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- CUSTOM Gallery Call SCRIPTS -->
    <script src="assets/js/galleryCustom.js"></script>
</body>

<script>
    $('textarea').css("resize", "vertical");
</script>
</html>