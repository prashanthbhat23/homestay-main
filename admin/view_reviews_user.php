<?php include "../database.php"; 
    $view_room = "SELECT * FROM reviews ORDER BY id DESC";
    $res1 = mysqli_query($conn,  $view_room);

    $sql = "SELECT * FROM setting limit 1";
    $res = mysqli_query($conn,  $sql);
    $data = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$data['title'] ?></title>

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
                if (mysqli_num_rows($res1) > 0) {
                    while ($data = mysqli_fetch_assoc($res1)) {  ?>
                        <div class="col-md-4 ">
                            <div class="portfolio-item awesome mix_all">
                                <div class="overlay">
                                    <p>
                                        <?=$data['name']?>
                                    </p>
                                    <p>
                                        <?=$data['email']?>
                                    </p>
                                    <p>
                                        <?=$data['phone']?>
                                    </p>
                                    <p>
                                        <?=$data['msg']?>
                                    </p>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?=$data['id']?>"><i class="fa fa-trash fa-2x"></i></button>
                                </div>
                            </div>
                        </div>


                         <!--Delete Modal -->
                     <div class="modal fade" id="exampleModal<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete?</h5>
                            </div>
                            <div class="modal-footer">
                            <form role="form" action="delete_review.php" method="POST" enctype="multipart/form-data">
                                <input name="id" type="hidden" value="<?=$data['id']?>">
                                <button name="del_review" type="submit" class="btn btn-primary">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                            </div>
                            </div>
                        </div>
                        </div>    
                        

                        <?php } }
                        else{
                         echo "<h1 style='margin-left : 30px;'> No Reviews yet!</h1>";   
                        }?>

                    </div>


                    

                </div>
    

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div> -->
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