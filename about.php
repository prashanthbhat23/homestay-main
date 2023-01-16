<?php 
include "authentication.php";

include "database.php";
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
    <title>Heritage Homestay</title>
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

	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
</head>

<body>
    <div class="pop-up-msg">
        <?php include "message.php"; ?>
    </div>
    <?php include "navbar.php"; ?>
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<img src="assets/images/123home.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Heritage Homestay</span></h1>
						
						<p>A heritage homestay is a type of accommodation where guests can stay in a traditional, historical property or building, often owned and operated by a local family. These homestays provide an opportunity for guests to experience the culture and way of life of the local community, while also supporting the preservation of local heritage. Some heritage homestays may be located in rural areas and provide a unique opportunity to experience traditional agriculture and farming practices. </p>
						
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
				</div>
				<!-- <div class="col-md-12">
					<div class="inner-pt">
						<p>Sed tincidunt, neque at egestas imperdiet, nulla sapien blandit nunc, sit amet pulvinar orci nibh ut massa. Proin nec lectus sed nunc placerat semper. Duis hendrerit elit nec sapien porttitor, ut pretium ipsum feugiat. Aenean volutpat porta nisi in gravida. Curabitur pulvinar ligula sed facilisis bibendum. Nullam vitae nulla elit. </p>
						<p>Integer purus velit, eleifend eu magna volutpat, porttitor blandit lectus. Aenean risus odio, efficitur quis erat eget, mattis tristique arcu. Fusce in ante enim. Integer consectetur elit nec laoreet rutrum. Mauris porta turpis nec tellus accumsan pellentesque. Morbi non quam tempus, convallis urna in, cursus mauris. </p>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- End About -->
	<section>
        <div class="container">
		<div class="heading-title text-center">
						<h2>Activities</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
            <div class="owl-carousel">

            <?php  
                $view_activities_query="SELECT * FROM activities";
                $run_view_activities_query = mysqli_query($conn, $view_activities_query);
                if (mysqli_num_rows($run_view_activities_query) > 0) {
                while ($data = mysqli_fetch_assoc($run_view_activities_query)) { 
                ?> 


                <div class="card" style="margin:60px 0;">
                    <img class="card-img-top hvr img-fluid" src="assets/images/activity/<?=$data['image']?>" alt="Card image cap" style="height: 275px;">
                    <div class="card-body">
                        <h2 class="card-text"><?=$data['name']?> </h2>
                        <p class="card-text"><?=$data['description']?></p>

                    </div>
                </div>
        <?php } } ?>

                </div>
            </div>
        </div>
    </section>




	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
							<button data-filter=".Breakfast">Break fast</button>
							<button data-filter=".Lunch">Lunch</button>
							<button data-filter=".Snacks">Snacks</button>
							<button data-filter=".Dinner">Dinner</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
            <?php  
                $view_food_query="SELECT * FROM food";
                $run_view_food_query = mysqli_query($conn, $view_food_query);
                if (mysqli_num_rows($run_view_food_query) > 0) {
                while ($data = mysqli_fetch_assoc($run_view_food_query)) { 
                ?> 
				<div class="col-lg-4 col-md-6 special-grid <?=$data['category']?>">
					<div class="gallery-single fix">
						<img src="assets/images/food/<?=$data['image']?>" class="img-fluid" alt="Image">
						<div class="why-text">
                            <h4><?=$data['name']?></h4>
							<p><?=$data['ingredients']?></p>
						</div>
					</div>
				</div>
				<?php } } ?>
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
    	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Customer Reviews</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <div class="test_box">
                                    <h4>Mark jonson</h4>
                                    <i><img src="assets/images/te1.png" alt="#" /></i>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour,</p>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="test_box">
                                    <h4>Mark jonson</h4>
                                    <i><img src="assets/images/te1.png" alt="#" /></i>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour,</p>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="test_box">
                                    <h4>Mark jonson</h4>
                                    <i><img src="assets/images/te1.png" alt="#" /></i>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour,</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Customer Reviews -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <?php include "footer.php"; ?>
    <!-- ALL JS FILES -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/jquery.superslides.min.js"></script>
    <script src="assets/js/images-loded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/custom.js"></script>
	<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 20,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    })
    </script>
</body>
</html>