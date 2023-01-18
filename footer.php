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
					<h3>Opening hours</h3>
					
					<p><span class="text-color">Mon-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
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
						
				        <li class="list-inline-item"><a href="https://www.facebook.com/prashanthbhat.padyana"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://wa.me/9446783911?text=Hello%2C%20I%20have%20some%20queries%20regarding%20your%20homestay%20!%20"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/prashanthbhat23/"><i class="fa fa-instagram" aria-hidden="true"></i></a></l>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2023 <a href="#">Hritage Homestay</a>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->