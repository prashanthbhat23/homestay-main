<?php include "../database.php"; 
    $view_food = "SELECT * FROM food ORDER BY id DESC";
    $res = mysqli_query($conn,  $view_food);
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

                <!-- /. ROW  -->
                <div id="port-folio">
                    <div class="row ">
                        <?php
                if (mysqli_num_rows($res) > 0) {
                    while ($data = mysqli_fetch_assoc($res)) {  ?>
                        <div class="col-md-4 ">
                            <div class="portfolio-item awesome mix_all" data-cat="awesome">
                                <img src="../assets/images/food/<?=$data['image']?>" class="img-responsive "
                                    alt="" style="height: 250px;" />
                                <div class="overlay">
                                    <p>
                                        <?=$data['name']?>
                                    </p>
                                    <p>
                                        <?=$data['ingredients']?>
                                    </p>
                                    <p>
                                        <?=$data['category']?>
                                    </p>
                                    <p>
                                        <?=$data['price']?>
                                    </p>
                                    <a class="preview btn btn-info" title="<?=$data['name']?>"
                                        href="../assets/images/food/<?=$data['image']?>"><i
                                            class="fa fa-plus fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } }?>

                    </div>
                </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    
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

</html>