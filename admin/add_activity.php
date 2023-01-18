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
        <!-- if (isset($_GET['error'])):  -->
		<!-- <p> echo $_GET['error']; </p> -->
	    <!-- endif  -->
        <div class="panel panel-info">
            <div class="panel-heading">
                Add Activity
            </div>
            <div class="panel-body">
                <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Enter Name</label>
                        <input class="form-control" type="text" name="name">
                        <label>Enter Description</label>
                        <input class="form-control" type="text" name="description">
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
                                <input type="file" name="activity_image" class="dropzone">
                            </div>
                        </div>
                        <button type="submit" name="activity_upload" class="btn btn-info">ADD</button>
                </form>
            </div>
        </div>
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