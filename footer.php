<?php
include "database.php";
$sql = "SELECT * FROM setting limit 1";
$res = mysqli_query($conn,  $sql);
$data = $res->fetch_assoc();
?>
<!-- Start Footer -->
<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p><?=$data['about_us'] ?></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Useful links</h3>
					
					<p><a href="reservation.php">Reservation</a></p>
					<p><a href="about.php">About Us</a></p>
					<p><a href="gallery.php">Gallery</a></p>
					<p><a href="activities.php">Activities</a></p>
					<p><a href="contact.php">Contact Us</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead"><?=$data['address'] ?></p>
					<p class="lead"><a href="tel:+91<?=$data['phone'] ?>">+91 <?=$data['phone'] ?></a></p>
					<p><a href="mailto:<?=$data['email'] ?>"> <?=$data['email'] ?></a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						
				        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></l>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2023 <a href="index.php">Hritage Homestay</a>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->