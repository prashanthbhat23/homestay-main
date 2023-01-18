<?php include "../database.php"; 
    $view_gallery = "SELECT * FROM gallery ORDER BY id DESC";
    $result1 = mysqli_query($conn, $view_gallery);

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
                        if (mysqli_num_rows($result1) > 0) {
                        while ($data = mysqli_fetch_assoc($result1)) {  ?>
                        <div class="col-md-4 ">
                            <div class="portfolio-item awesome mix_all" data-cat="awesome">
                                <img src="../assets/images/gallery/<?=$data['image']?>" class="img-responsive " style="width: 100%;height: 250px"
                                    alt="" />
                                <div class="overlay">
                                    <p>Action</p>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal1<?=$data['id']?>"><i class="fa fa-edit fa-2x"></i></button>
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
                            <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
                                <input name="gallery_id" type="hidden" value="<?=$data['id']?>">
                                <input name="del_gallery_img" type="hidden" value="<?=$data['image']?>">
                                <button name="del_gallery" type="submit" class="btn btn-primary">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                            </div>
                            </div>
                        </div>
                        </div>    

                        <!-- Edit Modal -->
                        <div class="modal fade" id="exampleModal1<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Edit gallery</h5>
                            </div>
                            <div class="modal-body">
                
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
                                            <input type="file" name="gallery_image" class="dropzone" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <input name="edit_gallery_id" type="hidden" value="<?=$data['id']?>">
                                <input name="edit_gallery_img" type="hidden" value="<?=$data['image']?>">
                                <button name="edit_gallery" type="submit" class="btn btn-primary">Save Gallery</button>
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