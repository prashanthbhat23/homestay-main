<?php 
session_start();
if(isset($_SESSION["auth"])){
  $msg="You are already logged in !";
  $_SESSION["message"]=$msg;
  header("location:index.php");
  exit(0);
}
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
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>
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
   

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap);

body {
  background: #E9EFF2;
}

a{
  color: #3461FD;
  text-decoration: none;
}

a:hover, a:focus{
  text-decoration: underline;
}

.container{
  max-width: 1090px;
  width: 100%;
  min-height: 100vh;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 1rem;
}

.page-title{
  font-weight: 600;
  font-size: 2rem;
  color: #3461FD;
}

.page-desc{
  font-weight: 400;
  font-size: 1rem;
  color: #404040;
}

.form{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  max-width: 20rem;
  width: 100%;
  position: relative;
  gap: .5rem;
}

.form input:not(.btn){
  width: 100%;
  display: block;
  font-size: 1rem;
  padding: .75rem 1rem;
  border: 1px solid #F9FBFC;
  background: #F9FBFC;
  border-radius: .5rem;
  transition: all .25s ease 0s;
  color: #212325;
  box-shadow: 1px 2px 4px 0px #0b163c40;
}

.form input:focus:not(.btn){
  border-color: #3461FD;
  box-shadow: 1px 2px 4px 0px #0b163c40, 0 0 0 3px #3461FD80;
}

.btn{
  width: 100%;
  display: block;
  font-size: 1rem;
  font-weight: 500;
  padding: .75rem 1rem;
  border: 1px solid #3461FD;
  background: #3461FD;
  border-radius: .5rem;
  transition: all .25s ease 0s;
  color: #E9EFF2;
  cursor: pointer;
  box-shadow: 0px 3px 5px 0px #3461FD40;
}

.btn:hover, .btn:focus{
  background: #3461FDDD;
  border-color: #3461FDDD;
  box-shadow: 0px 3px 5px 0px #3461FD40, 0 0 0 3px #3461FD80;
}

.forgot-link{
  font-size: .85rem;
  width: 100%;
  text-align: end;
}

.form-link-holder{
  font-size: .9rem;
  color: #404040;
}

.error-noti{
  background: #DC3535;
  padding: 1rem;
  max-width: 20rem;
  width: 100%;
  border-radius: .5rem;
  color: #E9EFF2;
  box-shadow: 0px 3px 5px 0px #3461FD40;
}

.error-input{
  border-color: #DC3535 !important;
}

.error-input:focus{
  box-shadow: 1px 2px 4px 0px #0b163c40, 0 0 0 3px #DC353580 !important;
}
</style>
</head>

<body class="container">
  <h1 class="page-title">
    Recover your Password
</h1> 
<form action="login.php" method="POST" class="login-form form">
    <?php include "message.php" ?>
    <input type="text" class="input" placeholder="New Password" name="new_pass">
    <input type="text" class="input" placeholder="Confirm password" name="new_pass_confirm">
    <input type="submit" name="reset_pass" value="Reset" class="send-btn btn">
  </form>
</body>

<!-- ALL JS FILES -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/jquery.superslides.min.js"></script>
    <script src="assets/js/images-loded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/custom.js"></script>
</html>