<?php include "../database.php"; 
    $sql = "SELECT * FROM activities ORDER BY id DESC";
    $res = mysqli_query($conn,  $sql);
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
                    <?php include "../message.php"; ?>
                        <?php
                if (mysqli_num_rows($res) > 0) {
                    while ($images = mysqli_fetch_assoc($res)) {  ?>
                        <div class="col-md-4 ">
                         <div class="portfolio-item awesome mix_all" data-cat="awesome">
                                <img src="../assets/images/activity/<?=$images['image']?>"
                                    class="img-responsive" alt="" style="height: 250px;" />
                                <div class="overlay">
                                    <p>
                                        <?=$images['name']?>
                                    </p>
                                    <p>
                                        <?=$images['description']?>
                                    </p>
                                    <a class="preview btn btn-info" title="<?=$images['name']?>"
                                        href="../assets/images/activity/<?=$images['image']?>">
                                        <i class="fa fa-search-plus fa-2x"></i></a>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal1<?=$images['id']?>"><i class="fa fa-edit fa-2x"></i></button>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?=$images['id']?>"><i class="fa fa-trash fa-2x"></i></button>
                                </div>
                            </div>                           
                        </div>

                        <!--Delete Modal -->
                        <div class="modal fade" id="exampleModal<?=$images['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete?</h5>
                            </div>
                            <div class="modal-footer">
                            <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
                                <input name="activity_id" type="hidden" value="<?=$images['id']?>">
                                <input name="del_activity_img" type="hidden" value="<?=$images['image']?>">
                                <button name="del_activity" type="submit" class="btn btn-primary">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                            </div>
                            </div>
                        </div>
                        </div>    

                        <!-- Edit Modal -->
                        <div class="modal fade" id="exampleModal1<?=$images['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Edit  activity</h5>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label>Enter Name</label>
                                    <input class="form-control" type="text" name="edit_activity_name" value="<?=$images['name']?>">
                                    <label>Enter Description</label>
                                    <input class="form-control" type="text" name="edit_activity_description" value="<?=$images['description']?>">

                                </div>
                
                                <div class="form-group">
                                        <label class="control-label">Upload File</label>
                                        <div class="preview-zone hidden">
                                            <div class="box box-solid">
                                                <div class="box-header with-border">
                                                    <div><b>Preview</b></div>
                                                    <div class="box-tools pull-right">
                                                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                                                            <i class="fa fa-times"></i> Reset This Form
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body"></div>
                                            </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                            <div class="dropzone-desc">
                                                <i class="glyphicon glyphicon-download-alt"></i>
                                                <p>Choose an image file or drag it here.</p>
                                            </div>
                                            <input type="file" name="activity_image" class="dropzone" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <input name="edit_activity_id" type="hidden" value="<?=$images['id']?>">
                                <input name="edit_activity_img" type="hidden" value="<?=$images['image']?>">
                                <button name="edit_activity" type="submit" class="btn btn-primary">Save activity</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                            </div>
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
</html>