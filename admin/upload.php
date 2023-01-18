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
				exit(0);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_slider.php?error=$em");
				exit(0);
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_slider.php?error=$em");
		exit(0);
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
			exit(0);
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
				exit(0);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_food.php?error=$em");
				exit(0);
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_food.php?error=$em");
		exit(0);
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
			exit(0);
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
				exit(0);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_gallery.php?error=$em");
				exit(0);
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_gallery.php?error=$em");
		exit(0);
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
			exit(0);
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
				exit(0);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_room.php?error=$em");
				exit(0);
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_room.php?error=$em");
		exit(0);
	}
}

if(isset($_POST["activity_upload"])){
	$img_name = $_FILES['activity_image']['name'];
	$img_size = $_FILES['activity_image']['size'];
	$tmp_name = $_FILES['activity_image']['tmp_name'];
	$error = $_FILES['activity_image']['error'];

	$name= $_POST['name'];
	$description= $_POST['description'];

	if ($error === 0) {
		if ($img_size > 1000000000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_activity.php?error=$em");
			exit(0);
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/activity/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$insert_activity = "INSERT INTO activities (name,image,description) 
				        VALUES('$name','$new_img_name','$description')";
				mysqli_query($conn, $insert_activity);
				header("Location: view_activity.php");
				exit(0);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_activity.php?error=$em");
				exit(0);
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_activity.php?error=$em");
		exit(0);
	}
}


if(isset($_POST["place_upload"])){
	$img_name = $_FILES['place_image']['name'];
	$img_size = $_FILES['place_image']['size'];
	$tmp_name = $_FILES['place_image']['tmp_name'];
	$error = $_FILES['place_image']['error'];

	$name= $_POST['name'];
	$description= $_POST['description'];
	$distance= $_POST['distance'];

	if ($error === 0) {
		if ($img_size > 1000000000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_nearbyplaces.php?error=$em");
			exit(0);
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/places/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$insert_places = "INSERT INTO places (name,description,distance,image) 
				        VALUES('$name','$description','$distance','$new_img_name')";
				mysqli_query($conn, $insert_places);
				header("Location: view_nearbyplaces.php");
				exit(0);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: add_nearbyplaces.php?error=$em");
				exit(0);
			}
		}
	}else {
		// echo "<script>alert('$error')</script>";
		$em = "unknown error occurred!";
		header("Location: add_nearbyplaces.php?error=$em");
		exit(0);
	}
}

//deleting section

//delete slider
if(isset($_POST["del_slider"])){
	$slider_id = $_POST["slider_id"];
	$del_slider_img = $_POST["del_slider_img"];

	$del_slider_query="DELETE FROM home_slider WHERE id='$slider_id'";
    $run_del_slider_query=mysqli_query($conn,$del_slider_query);

    if($run_del_slider_query){
        unlink("../assets/images/home_slider/".$del_slider_img);
		$msg="Slider Deleted !";
        $_SESSION["message"]=$msg;
        header("location:view_slider.php");
        exit(0);
    }
    else{
        $msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:view_slider.php");
        exit(0);
    }
}
//delete room
elseif(isset($_POST["del_room"])){
	$room_id = $_POST["room_id"];
	$del_room_img = $_POST["del_room_img"];

	$del_room_query="DELETE FROM stay WHERE id='$room_id'";
    $run_del_room_query=mysqli_query($conn,$del_room_query);

    if($run_del_room_query){
        unlink("../assets/images/rooms/".$del_room_img);
		$msg="room Deleted !";
        $_SESSION["message"]=$msg;
        header("location:view_rooms.php");
        exit(0);
    }
    else{
        $msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:view_rooms.php");
        exit(0);
    }
}
//delete food
elseif(isset($_POST["del_food"])){
	$food_id = $_POST["food_id"];
	$del_food_img = $_POST["del_food_img"];

	$del_food_query="DELETE FROM food WHERE id='$food_id'";
    $run_del_food_query=mysqli_query($conn,$del_food_query);

    if($run_del_food_query){
        unlink("../assets/images/food/".$del_food_img);
		$msg="food Deleted !";
        $_SESSION["message"]=$msg;
        header("location:view_food.php");
        exit(0);
    }
    else{
        $msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:view_food.php");
        exit(0);
    }
}
//delete gallery
elseif(isset($_POST["del_gallery"])){
	$gallery_id = $_POST["gallery_id"];
	$del_gallery_img = $_POST["del_gallery_img"];

	$del_gallery_query="DELETE FROM gallery WHERE id='$gallery_id'";
    $run_del_gallery_query=mysqli_query($conn,$del_gallery_query);

    if($run_del_gallery_query){
        unlink("../assets/images/gallery/".$del_gallery_img);
		$msg="gallery Deleted !";
        $_SESSION["message"]=$msg;
        header("location:view_gallery.php");
        exit(0);
    }
    else{
        $msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:view_gallery.php");
        exit(0);
    }
}

//delete activity
elseif(isset($_POST["del_activity"])){
	$activity_id = $_POST["activity_id"];
	$del_activity_img = $_POST["del_activity_img"];

	$del_activity_query="DELETE FROM activities WHERE id='$activity_id'";
    $run_del_activity_query=mysqli_query($conn,$del_activity_query);

    if($run_del_activity_query){
        unlink("../assets/images/activity/".$del_activity_img);
		$msg="activity Deleted !";
        $_SESSION["message"]=$msg;
        header("location:view_activity.php");
        exit(0);
    }
    else{
        $msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:view_activity.php");
        exit(0);
    }
}


//delete places
elseif(isset($_POST["del_places"])){
	$places_id = $_POST["places_id"];
	$del_places_img = $_POST["del_places_img"];

	$del_places_query="DELETE FROM places WHERE id='$places_id'";
    $run_del_places_query=mysqli_query($conn,$del_places_query);

    if($run_del_places_query){
        unlink("../assets/images/places/".$del_places_img);
		$msg="place Deleted !";
        $_SESSION["message"]=$msg;
        header("location:view_nearbyplaces.php");
        exit(0);
    }
    else{
        $msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:view_nearbyplaces.php");
        exit(0);
    }
}


//edit slider
elseif(isset($_POST["edit_slider"])){
	$slider_id = $_POST["edit_slider_id"];
	$edit_slider_title = $_POST["edit_slider_title"];
	$edit_slider_img = $_POST["edit_slider_img"];
	unlink("../assets/images/home_slider/".$edit_slider_img);
			$img_name = $_FILES['slider_image']['name'];
			$img_size = $_FILES['slider_image']['size'];
			$tmp_name = $_FILES['slider_image']['tmp_name'];
			$error = $_FILES['slider_image']['error'];
			echo $img_name;
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/home_slider/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$edit_slider_query="UPDATE home_slider SET title='$edit_slider_title',image_url='$new_img_name' WHERE id='$slider_id'";
				$run_edit_slider_query=mysqli_query($conn,$edit_slider_query);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: view_slider.php?error=$em");
				exit(0);
			}
    if($run_edit_slider_query){
		$msg="Slider Updated !";
        $_SESSION["message"]=$msg;
        header("location:view_slider.php");
        exit(0);
    }
    else{
        $msg="Failed to edit !";
        $_SESSION["message"]=$msg;
        header("location:view_slider.php");
        exit(0);
    }
}
//edit room
elseif(isset($_POST["edit_room"])){
	$room_id = $_POST["edit_room_id"];
	$edit_room_type = $_POST["edit_room_type"];
	$edit_room_desc = $_POST["edit_room_desc"];
	$edit_room_price = $_POST["edit_room_price"];
	$edit_room_img = $_POST["edit_room_img"];
	unlink("../assets/images/rooms/".$edit_room_img);
			$img_name = $_FILES['room_image']['name'];
			$img_size = $_FILES['room_image']['size'];
			$tmp_name = $_FILES['room_image']['tmp_name'];
			$error = $_FILES['room_image']['error'];
	
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/rooms/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$edit_room_query="UPDATE stay SET room_type='$edit_room_type',description='$edit_room_desc',image='$new_img_name',price='$edit_room_price' WHERE id='$room_id'";
				$run_edit_room_query=mysqli_query($conn,$edit_room_query);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: view_rooms.php?error=$em");
				exit(0);
			}
    if($run_edit_room_query){
		$msg="room Updated !";
        $_SESSION["message"]=$msg;
        header("location:view_rooms.php");
        exit(0);
    }
    else{
        $msg="Failed to edit !";
        $_SESSION["message"]=$msg;
        header("location:view_rooms.php");
        exit(0);
    }
}
//edit food
elseif(isset($_POST["edit_food"])){
	$food_id = $_POST["edit_food_id"];
	$edit_food_name = $_POST["edit_food_name"];
	$edit_food_ingre = $_POST["edit_food_ingre"];
	$edit_food_category = $_POST["edit_food_category"];
	$edit_food_price = $_POST["edit_food_price"];
	$edit_food_img = $_POST["edit_food_img"];
	unlink("../assets/images/food/".$edit_food_img);
			$img_name = $_FILES['food_image']['name'];
			$img_size = $_FILES['food_image']['size'];
			$tmp_name = $_FILES['food_image']['tmp_name'];
			$error = $_FILES['food_image']['error'];
			
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/food/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$edit_food_query="UPDATE food SET name='$edit_food_name',ingredients='$edit_food_ingre',category='$edit_food_category',price='$edit_food_price',image='$new_img_name' WHERE id='$food_id'";
				$run_edit_food_query=mysqli_query($conn,$edit_food_query);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: view_food.php?error=$em");
				exit(0);
			}
    if($run_edit_food_query){
		$msg="Slider Updated !";
        $_SESSION["message"]=$msg;
        header("location:view_food.php");
        exit(0);
    }
    else{
        $msg="Failed to edit !";
        $_SESSION["message"]=$msg;
        header("location:view_food.php");
        exit(0);
    }
}
//edit gallery
elseif(isset($_POST["edit_gallery"])){
	$edit_gallery_id = $_POST["edit_gallery_id"];
	$edit_gallery_img = $_POST["edit_gallery_img"];
	unlink("../assets/images/gallery/".$edit_gallery_img);
			$img_name = $_FILES['gallery_image']['name'];
			$img_size = $_FILES['gallery_image']['size'];
			$tmp_name = $_FILES['gallery_image']['tmp_name'];
			$error = $_FILES['gallery_image']['error'];
			echo $img_name;
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/gallery/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$edit_gallery_query="UPDATE gallery SET image='$new_img_name' WHERE id='$edit_gallery_id'";
				$run_edit_gallery_query=mysqli_query($conn,$edit_gallery_query);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: view_gallery.php?error=$em");
				exit(0);
			}
    if($run_edit_slider_query){
		$msg="gallery Updated !";
        $_SESSION["message"]=$msg;
        header("location:view_gallery.php");
        exit(0);
    }
    else{
        $msg="Failed to edit !";
        $_SESSION["message"]=$msg;
        header("location:view_gallery.php");
        exit(0);
    }
}
//edit activity
elseif(isset($_POST["edit_activity"])){
	$edit_activity_id = $_POST["edit_activity_id"];
	$edit_activity_name = $_POST["edit_activity_name"];
	$edit_activity_description = $_POST["edit_activity_description"];
	$edit_activity_img = $_POST["edit_activity_img"];
	unlink("../assets/images/activity/".$edit_activity_img);
			$img_name = $_FILES['activity_image']['name'];
			$img_size = $_FILES['activity_image']['size'];
			$tmp_name = $_FILES['activity_image']['tmp_name'];
			$error = $_FILES['activity_image']['error'];
		
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/activity/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$edit_activity_query="UPDATE activities SET name='$edit_activity_name',description='$edit_activity_description',image='$new_img_name' WHERE id='$edit_activity_id'";
				$run_edit_activity_query=mysqli_query($conn,$edit_activity_query);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: view_activity.php?error=$em");
				exit(0);
			}
    if($run_edit_activity_query){
		$msg="activity Updated !";
        $_SESSION["message"]=$msg;
        header("location:view_activity.php");
        exit(0);
    }
    else{
        $msg="Failed to edit !";
        $_SESSION["message"]=$msg;
        header("location:view_activity.php");
        exit(0);
    }
}

//edit places
elseif(isset($_POST["edit_places"])){
	$edit_places_id = $_POST["edit_places_id"];
	$edit_places_name = $_POST["edit_places_name"];
	$edit_places_description = $_POST["edit_places_description"];
	$edit_places_distance = $_POST["edit_places_distance"];
	$edit_places_img = $_POST["edit_places_img"];
	unlink("../assets/images/places/".$edit_places_img);
			$img_name = $_FILES['places_image']['name'];
			$img_size = $_FILES['places_image']['size'];
			$tmp_name = $_FILES['places_image']['tmp_name'];
			$error = $_FILES['places_image']['error'];
		
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/images/places/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$edit_places_query="UPDATE places SET name='$edit_places_name',description='$edit_places_description',distance='$edit_places_distance',image='$new_img_name' WHERE id='$edit_places_id'";
				$run_edit_places_query=mysqli_query($conn,$edit_places_query);
			}else {
				$em = "You can't upload files of this type";
		        header("Location: view_nearbyplaces.php?error=$em");
				exit(0);
			}
    if($run_edit_activity_query){
		$msg="Place Updated !";
        $_SESSION["message"]=$msg;
        header("location:view_nearbyplaces.php");
        exit(0);
    }
    else{
        $msg="Failed to edit !";
        $_SESSION["message"]=$msg;
        header("location:view_nearbyplaces.php");
        exit(0);
    }
}


//booking

if(isset($_POST["complete_booking"])){
	$book_id=$_POST["book_id"];

	$set_book_query="UPDATE booking SET status=0 WHERE id='$book_id'";
	$run_set_book_query=mysqli_query($conn,$set_book_query);

	if($run_set_book_query)
	{
		$msg="Booking completed !";
        $_SESSION["message"]=$msg;
        header("location:bookings.php");
        exit(0);
	}
	else
	{
		$msg="Failed to complete !";
        $_SESSION["message"]=$msg;
        header("location:bookings.php");
        exit(0);
	}
}
elseif(isset($_POST["delete_booking"])){
	$book_id=$_POST["book_id"];

	$set_book_query="DELETE FROM booking WHERE id='$book_id'";
	$run_set_book_query=mysqli_query($conn,$set_book_query);

	if($run_set_book_query)
	{
		$msg="Booking Deleted !";
        $_SESSION["message"]=$msg;
        header("location:bookings.php");
        exit(0);
	}
	else
	{
		$msg="Failed to delete !";
        $_SESSION["message"]=$msg;
        header("location:bookings.php");
        exit(0);
	}
}
//user disable
if(isset($_POST["disable_user"])){
	$user_id=$_POST["user_id"];

	$set_user_query="UPDATE user SET isactive=0 WHERE id='$user_id'";
	$run_set_user_query=mysqli_query($conn,$set_user_query);

	if($run_set_user_query)
	{
		$_SESSION["auth"] = false;
		$msg="User disabled !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
	else
	{
		$msg="Failed to disable !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
}
//user enable
elseif(isset($_POST["enable_user"])){
	$user_id=$_POST["user_id"];

	$set_user_query="UPDATE user SET isactive=1 WHERE id='$user_id'";
	$run_set_user_query=mysqli_query($conn,$set_user_query);

	if($run_set_user_query)
	{
		$_SESSION["auth"] = true;
		$msg="User enabled !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
	else
	{
		$msg="Failed to enable !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
}

//room disable
if(isset($_POST["disable_room"])){
	$room_id=$_POST["room_id"];
	echo $room_id;
	$set_room_query="UPDATE stay SET status=1 WHERE id='$room_id'";
	$run_set_room_query=mysqli_query($conn,$set_room_query);

	if($run_set_room_query)
	{
		$msg="Room disabled !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
	else
	{
		$msg="Failed to disable !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
}
//room enable
elseif(isset($_POST["enable_room"])){
	$room_id=$_POST["room_id"];
	echo $room_id;
	$set_room_query="UPDATE stay SET status=0 WHERE id='$room_id'";
	$run_set_room_query=mysqli_query($conn,$set_room_query);

	if($run_set_room_query)
	{
		$msg="Room Enabled !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
	else
	{
		$msg="Failed to enable !";
        $_SESSION["message"]=$msg;
        header("location:dashboard.php");
        exit(0);
	}
}

//setting
if(isset($_POST["general_set"])){
	$title=$_POST["title"];
	$description=$_POST["description"];

	$set_set_query="UPDATE setting SET title='$title',about_us='$description'";
	$run_set_set_query=mysqli_query($conn,$set_set_query);

	if($run_set_set_query)
	{
		$msg="Updated !";
        $_SESSION["message"]=$msg;
        header("location:settings.php");
        exit(0);
	}
	else
	{
		$msg="Failed to update !";
        $_SESSION["message"]=$msg;
        header("location:settings.php");
        exit(0);
	}
}
if(isset($_POST["contact_set"])){
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	// $map=$_POST["map"];
	$address=$_POST["address"];

	$set_set_query="UPDATE setting SET phone='$phone',email='$email',address='$address'";
	$run_set_set_query=mysqli_query($conn,$set_set_query);

	if($run_set_set_query)
	{
		$msg="Updated !";
        $_SESSION["message"]=$msg;
        header("location:settings.php");
        exit(0);
	}
	else
	{
		$msg="Failed to update !";
        $_SESSION["message"]=$msg;
        header("location:settings.php");
        exit(0);
	}
}
?>