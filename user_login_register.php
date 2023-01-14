<?php
session_start();
include "database.php";


// Register user

if(isset($_POST["register_user"])){   
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $adhar=$_POST["adhar"];
    $password=$_POST["password"];
    $re_password=$_POST["re_password"];
    $token = md5(rand());
    if($password == $re_password){
        $register_query="INSERT INTO user (name,email,phone,adhar,password,token) 
        VALUES('$name','$email','$phone','$adhar','$password','$token')";
        $run_register_query=mysqli_query($conn,$register_query);
        if($run_register_query){
            $msg="Registerd successfully !";
            $_SESSION["message"]=$msg;
            header("location:login.php");
            exit(0);
        }
        else{
            $msg="Failed to register !";
            $_SESSION["message"]=$msg;
            header("location:register.php");
            exit(0);
        }
    }
    else{
        $msg="Passwords do not match !";
        $_SESSION["message"]=$msg;
        header("location:register.php");
        exit(0);
    }
}


// Login user

if(isset($_POST["login_user"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $login_query="SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";
    $run_login_query=mysqli_query($conn,$login_query);

    if(mysqli_num_rows($run_login_query) > 0 ){
        foreach ($run_login_query as $row) {
            $user_id = $row["id"];
            $user_name = $row["name"];
            $user_email = $row["email"];
            $user_phone = $row["phone"];
            $user_adhar = $row["adhar"];
        }

        $_SESSION["auth"] = true;
        $_SESSION["auth_user"] =[
            "user_id" => $user_id,
            "user_name" => $user_name,
            "user_email" => $user_email,
            "user_phone" => $user_phone,
            "user_adhar" => $user_adhar,
        ];

        $_SESSION["message"] = "Logged in successfully !";
        header("location: index.php");
        exit(0);
    }
    else{
        $msg="User not found !";
        $_SESSION["message"]=$msg;
        header("location:login.php");
        exit(0);
    }

}

//forgot pass

if(isset($_POST["recover_pass"])){
    $email = $_POST["email"];
    $token = md5(rand());
    
    $check_mail_query = "SELECT email FROM user WHERE email='$email' LIMIT 1";
    $run_check_mail_query = mysqli_query($conn,$check_mail_query);

    if(mysqli_num_rows($run_check_mail_query) > 0){
        $row = mysqli_fetch_array($run_check_mail_query);
        $get_name = $row["name"];
        $get_email = $row["email"];

        $update_token = "UPDATE user SET token = '$token'";
    }
}


// Check if the form has been submitted
if (isset($_POST['review_submit'])) {
    // Get the form data
    $room_id = $_POST['room_id'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    // Insert the review into the database
    $query = "INSERT INTO room_reviews (room_id, review, rating) VALUES (?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('iss', $room_id, $review, $rating);
    $stmt->execute();

    // Retrieve the reviews for a specific room
    $room_id = $_GET['room_id'];
    $query = "SELECT review, rating FROM room_reviews WHERE room_id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $room_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display the reviews
    echo "<h1>Reviews for room $room_id</h1>";
    while ($row = $result->fetch_assoc()) {
        $review = $row['review'];
        $rating = $row['rating'];
        echo "<p>$review ($rating/5 stars)</p>";
    }
}


?>