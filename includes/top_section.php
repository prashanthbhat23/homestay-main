<?php 
include "authentication.php";

include "database.php";

$sql = "SELECT * FROM setting limit 1";
$res = mysqli_query($conn,  $sql);
$data = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title><?=$data['title'] ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="pop-up-msg">
        <?php include "message.php"; ?>
    </div>
    <?php include "navbar.php"; ?>
