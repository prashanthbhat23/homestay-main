<?php 
include "../database.php";

if (isset($_POST['submit']) && isset($_FILES['slider_image'])) {

	$img_name = $_FILES['slider_image']['name'];
	$img_size = $_FILES['slider_image']['size'];
	$tmp_name = $_FILES['slider_image']['tmp_name'];
	$error = $_FILES['slider_image']['error'];
	$title= $_POST['title'];

	if ($error === 0) {
		if ($img_size > 1000000000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_slider.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/home_slider/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO home_slider (title,image_url) 
				        VALUES('$title','$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: view_slider.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_slider.php?error=$em");
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_slider.php?error=$em");
	}

}

if(isset($_POST["submit_food"])){
	$img_name = $_FILES['food_image']['name'];
	$img_size = $_FILES['food_image']['size'];
	$tmp_name = $_FILES['food_image']['tmp_name'];
	$error = $_FILES['food_image']['error'];

	$name= $_POST['name'];
	$ingredients= $_POST['ingredients'];
	$catogory= $_POST['catogory'];
	$price= $_POST['price'];

	if ($error === 0) {
		if ($img_size > 1000000000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_food.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/food/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$insert_food = "INSERT INTO food (name,ingredients,category,price,image) 
				        VALUES('$name','$ingredients','$catogory','$price','$new_img_name')";
				mysqli_query($conn, $insert_food);
				header("Location: view_food.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_food.php?error=$em");
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_food.php?error=$em");
	}
}


if(isset($_POST["submit_gallery"])){
	$img_name = $_FILES['gallery_image']['name'];
	$img_size = $_FILES['gallery_image']['size'];
	$tmp_name = $_FILES['gallery_image']['tmp_name'];
	$error = $_FILES['gallery_image']['error'];

	if ($error === 0) {
		if ($img_size > 1000000000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_gallery.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/gallery/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$insert_image = "INSERT INTO gallery (image) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $insert_image);
				header("Location: view_gallery.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_gallery.php?error=$em");
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_gallery.php?error=$em");
	}
}

if(isset($_POST["submit_room"])){
	$img_name = $_FILES['room_image']['name'];
	$img_size = $_FILES['room_image']['size'];
	$tmp_name = $_FILES['room_image']['tmp_name'];
	$error = $_FILES['room_image']['error'];

	$r_type=$_POST["r_type"];
	$desc=$_POST["desc"];
	$price=$_POST["price"];

	if ($error === 0) {
		if ($img_size > 1000000000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_room.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/rooms/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$insert_image = "INSERT INTO stay (room_type,description,image,price) 
				        VALUES('$r_type','$desc','$new_img_name','$price')";
				mysqli_query($conn, $insert_image);
				header("Location: view_rooms.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_room.php?error=$em");
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_room.php?error=$em");
	}
}
?>