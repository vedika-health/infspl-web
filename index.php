<?php include 'db_connection.php'; ?>
<?php


// get hero image

$sql = "SELECT * FROM sliders WHERE language_id=169";
$result = $conn->query($sql);
$img_path = 'https://infspl.com/development/assets/front/img/';

// get service categories

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
$result_sCat = $conn->query($sql_sCat);

// get team

$sql_members = "SELECT * FROM members WHERE language_id=169";
$result_members = $conn->query($sql_members);

// get portfolio

$sql_portfolios = "SELECT * FROM portfolios WHERE language_id=169";
$result_portfolios = $conn->query($sql_portfolios);

// get clients

$sql_clients = "SELECT * FROM partners WHERE language_id=169";
$result_clients = $conn->query($sql_clients);

// get testimonials

$sql_test = "SELECT * FROM testimonials WHERE language_id=169 ORDER BY serial_number ASC";
$result_test = $conn->query($sql_test);








//get team














?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>INFSPL- One Stop Solution</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.c-btn {
			border: none;
			background-color: #1e566f;
			padding: 12px 48px 12px 24px;
			border-radius: 4px;
			color: #fff;
			text-align: start;
			/* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='7.41' height='12' viewBox='0 0 7.41 12'%3E%3Cpath d='M10,6,8.59,7.41,13.17,12,8.59,16.59,10,18l6-6Z' transform='translate(-8.59 -6)' fill='%23fff'/%3E%3C/svg%3E"); */
			/* background-repeat: no-repeat;
  			background-position: center; */
		}

		.button-with-overlapping-image {
			position: relative;
			display: inline-flex;
			align-items: center;
			width: 100%;
			padding: 10px 10px;
			/* Adjusted padding */
			border: none;
			border-radius: 20px;
			background-color: #1e566f;
			color: white;
			font-size: 16px;
			cursor: pointer;

			transition: background-color 0.3s ease;

			z-index: 1;
		}
		.button-with-overlapping-image img {
			position: absolute;

			top: -10px;
			width: 680px;
			height: 60px;
			border-radius: 50%;
			z-index: 2;

		}
		.button-with-overlapping-image:hover {
			background-color: rgba(0, 151, 80, 0.7);
		}

		div.circletag {
			display: block;
			width: 40px;
			height: 40px;
			background: #E6E7ED;
			text-align: center;
			align-content: center;
			align-items: center;
			border-radius: 50%;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
		}

		div.circletag>img {
			max-height: 100%;
			max-width: 100%;
		}

		.center {
			text-align: center;
			width: 100%;
			padding-top: 15px;
		}

		.award .owl-prev {
			position: absolute;
			top: 250px;
			left: -40px;
			font-size: 40px !important;
		}

		.award .owl-next {
			position: absolute;
			top: 250px;
			right: -40px;
			font-size: 40px !important;
		}

		#slider.banner {
			height: 70vh;
			min-height: 500px;
			max-height: 600px;
		}

		#slider .fill {
			height: 100%;
		}
	</style>
</head>

<body class="site-body style-v1">
	<?php include 'header.php'; ?>
		<!-- Banner/Slider -->
		<div id="slider" class="banner banner-slider carousel ">

			<div class="carousel-inner">

				<?php
				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {
						$hero_img = $row['image'];
						$hero_title = $row['title'];
						$hero_text = $row['text'];
						$hero_button_text = $row['button_text'];
						$hero_button_url = $row['button_url'];
						$cat_path = 'sliders/';
						$hero_image = $img_path . $cat_path . $hero_img;
						$hero_serial = $row['serial_number'];

						if ($hero_serial == 1) {
							$serial_text = 'active';
						} else {
							$serial_text = '';
						}

						echo "<div class='item $serial_text'>
					<!-- Set the first background image using inline CSS below. -->
					<div class='fill' style='background-image:url($hero_image);'>
						<div class='banner-content'>
							<div class='container'>
								<div class='row'>
									<div class='banner-text al-left pos-left light'>
										<h2 style='color: #1e566f; font-size: 2em;'><strong>$hero_title</strong></h2>
										<p style='color: #1e566f; font-size: 18px;'>$hero_text</p>
										<a href=$hero_button_url class='btn'>$hero_button_text</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>";
					}
				} else {
					echo "0 results";
				}

				?>




			</div>

			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</header>
	<!-- End Header -->

	<!-- Service Section -->
	<div class='section section-services' style="padding-top: 60px; padding-bottom: 60px;">
		<div class='container'>
			<div class='content row'>
				<!-- Feature Row  -->
				<div class='feature-row feature-service-row row feature-s4 off-text boxed-w'>
				
					<div class='heading-box' id="services" style="margin-bottom: 40px;">
						<div>
							<center>
								<h2 class='heading-section'>OUR SERVICES
								</h2>
							</center>
						</div>

					</div>


					<?php


					if ($result_sCat->num_rows > 0) {
						// Output data of each row
						$ids = array();

						//	echo $result_sCat;
					


						while ($row = $result_sCat->fetch_assoc()) {


							$id = $row['id'];
							$image = $row['image'];
							$cat_path = 'service_category_icons/';
							$img_cat_path = $img_path . $cat_path . $image;
							$name = $row['name'];
							$description = $row['short_text'];
							$serial_number = $row['serial_number'];






							if ($serial_number % 2 == 0) {
								$everOrOdd = 'odd';

							} else {
								$everOrOdd = 'even';

							}

							// get service categories
					






							echo " <div class='col-md-4 col-sm-6 col-xs-6 $everOrOdd' style='padding: 10px;'>
							<!-- Feature box -->
							<div class='feature'>
								<a href='services.php?id=$id'>
									<div class='fbox-photo'>
										<img src=image/IMAGE$serial_number.jpg alt=''>
									</div>
									<div class='fbox-over'>
										<h3 class='title'>$name</h3>
										<div class='fbox-content'>
											<p>$description</p>
											
										</div>
									</div>
								</a>
							</div>
							
							
						</div>
						
							
						";





						}
					} else {
						echo "0 results";
					}
					?>
					<!-- <a class='button-with-overlapping-image' href=$url>
									 <img src=$img_service_path alt='Circular Image'>
									$service_name
								</a> -->

					<?php







					# code...
					




					?>
					<!-- End Feature box -->
				</div>








				<!-- <a class='button-with-overlapping-image' href=$url>
				<!--					<img src=$img_service_path alt='Circular Image'>-->
				<!--					$service_name-->
				<!--				</a> -->






			</div>
			<!-- Feture Row  #end -->

		</div>
	</div>


	<!-- End Section -->

	<!-- Content -->
	<div class="section section-content section-pad" id="who" style="padding-top: 60px; padding-bottom: 60px;">
		<div class="container">
			<div class="content row">

				<div class="row row-vm">
					<div class="col-md-6 res-m-bttm">
						<h5 class="heading-sm-lead">About us</h5>
						<h2 class="heading-section">Who we are</h2>
						<p>INFSPL is a team of industry experts with an overall
							experience of 47+ years providing an array of services for the StartUp,
							MSME and Large Enterprises.</p>
						<p>INFSPL was formed after identifying a gap in the market about lack of
							awareness of Financial and Business Literacy.
							As there was no single platform catering to the ever increasing
							requirements of the Entrepreneurs, we came up with a one-stop
							customized solution, offering single window services right from idea
							validation to the growth stage. </p>
						<p>We have a team of passionate professionals, providing timely solutions for
							all your business needs, so that you can concentrate more on building
							your business.
						</p>
						<p>Vision – We envision to be the one-stop solution for all your business
							needs. We will be providing all the required assistance at each stage of
							your company’s growth.
						</p>
						<p>Mission – “Investing Intellect For You” our mission is to invest our intellect for you by
							providing a One-Stop Solution for all your Business needs in the form of customized
							solutions at each stage of your growth journey.
						</p>
						<p>Advice & Guidance to each & every Start-Up, MSME, and Large Enterprises for realising the
							actual potential of business & then supporting them at every aspect of business for
							achieving the desired growth of each business at 360 degrees.
						</p>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<img class="no-round" src="image/IMAGE5.jpg" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

	<!-- Content -->
	<div class="section section-contents section-pad image-on-right bg-light" id="service" style="padding-top: 60px; padding-bottom: 60px;">
		<div class="container">
			<div class="row">

				<h5 class="heading-sm-lead">Our Services</h5>
				<h2 class="heading-section">What we do</h2>
				<div class="feature-intro">
					<div class="row">
						<div class="col-sm-7 col-md-6">
							<div class="row">
								<div class="col-sm-6 res-s-bttm">
									<div class="icon-box photo-plx-full">
									<img alt='' src="image/interview.png">
									</div>
									<h4>Financial Advisory</h4>
									<p>We provide customized Financial Advisory Services for all your Business needs.
									</p>
								</div>
								<div class="col-sm-6">
									<div class="icon-box">
									<img alt='' src="image/investing.png">
									</div>
									<h4>Investment Banking</h4>
									<p>Under Investment Banking we provide an end-to-end Fund Raising services for e.g
										Private Equity / Debt Equity.</p>
								</div>
								<div class="gaps size-lg"></div>
								<div class="col-sm-6 res-s-bttm">
									<div class="icon-box">
									<img alt='' src="image/meeting.png">
									</div>
									<h4>Business Growth Advisory</h4>
									<p>We provide a detailed Business Growth strategy plan as per your Business
										requirement.
									</p>
								</div>
								<div class="col-sm-6">
									<div class="icon-box">
									<img alt='' src="image/startup.png">
									</div>
									<h4>StartUp Advisory</h4>
									<p>An end-to-end advisory service right from Idea Valiadation to IPO.</p>
								</div> 
								<div class="gaps size-lg"></div>
								<div class="col-sm-6  res-s-bttm">
									<div class="icon-box">
									<img alt='' src="image/business.png">
									</div>
									<h4>MSME Advisory</h4>
									<p>Micro, Small and Medium enterprises are considered the backbone of the Indian
										economy, we provide end-to-end service focused towards your Business growth.</p>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<div class="section-bg imagebg"><img src="image/what_we_do.jpg" alt=""></div>
	</div>
	<!-- End Content -->

	<!-- Content -->
	<div class="section section-contents section-pad light bg-alternet" id="trust" style="padding-top: 60px; padding-bottom: 60px;">
		<div class="container">
			<div class="row">

				<div class="row justify-content-end">
					<div class="col-md-6 col-sm-6">
						<h2 class="heading-lead" style="color: #1e566f;">Trust the best</h2>
					</div>
					<div class=" col-md-6 col-sm-6">
						<div class="row">
    
							<div class="col-md-6 col-sm-6 res-s-bttm">
								<div class="icon-box photo-plx-full">
									<img alt='' src="image/experience.png">
								</div>
								<h4 style="color: #1e566f;">Experienced</h4>
								<p style="color: #1e566f;">We have a collective team experience of over 47+ years</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="icon-box">
								<img alt='' src="image/fast.png">
								</div>
								<h4 style="color: #1e566f;">Speed</h4>
								<p style="color: #1e566f;">We work at a war footing speed to ensure timely execution.
								</p>
							</div>
							<div class="gaps size-lg"></div>
							<div class="col-md-6 col-sm-6 res-s-bttm">
								<div class="icon-box">
								<img alt='' src="image/file.png">
								</div>
								<h4 style="color: #1e566f;">Accuracy</h4>
								<p style="color: #1e566f;">We keep a watch on the minutest details for an error free
									outcome.
								</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="icon-box">
								<img alt='' src="image/global-network.png">
								</div>
								<h4 style="color: #1e566f;">Network</h4>
								<p style="color: #1e566f;">We are connected with some of the best minds in the Business
									Ecosystem.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-bg imagebg"><img src="image/trust the best.jpg" alt=""></div>
	</div>
	<!-- End Content -->





	<!-- <div class="section section-logos section-pad-sm bg-light bdr-top" id="incubation">
		<div class="container">
			<div class="content row">

				<div class="owl-carousel loop logo-carousel style-v2">
					<div class='logo-item'><a href='images/incubation1.png' target=”_blank”><img alt='' width='190'
								height='190' src=$img_client_path></a></div>
				</div>
				<div class="owl-carousel loop logo-carousel style-v2">
					<div class='logo-item'><a href='images/incubation2.png' target=”_blank”><img alt='' width='190'
								height='190' src=$img_client_path></a></div>
				</div>

			</div>
		</div>
	</div> -->






	<!-- client -->
	<div class="section section-news section-pad" id="clients">
		<div class="container">
			<div class="content row">
				<h5 class="heading-sm-lead center">Some of our</h5>
				<h2 class="heading-section center"> Clients</h2>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Client logo -->
	<div class="section section-pad bg-light" id="test">
		<div class="content row">
			<div class="logo-carousel">
				<?php
				if ($result_clients->num_rows > 0) {
					while ($row = $result_clients->fetch_assoc()) {
						$client_img = $row['image'];
						$client_url = $row['url'];
						$client_path = 'partners/';
						$img_client_path = $img_path . $client_path . $client_img;

						echo "<a href='$client_url' target='_blank'><img src='$img_client_path' width='500' height='600' alt='Client Logo'></a>";
					}
				} else {
					echo "0 results";
				}
				?>
				<!-- End Slide -->
			</div>
			<!-- End Slides -->




		</div>

	</div>
	<!-- End Section -->

	<!-- Testimonials -->
	<div class="section section-quotes section-pad" style="padding-top: 40px; padding-bottom: 40px;">
		<div class="container">
			<div class="content row">
				<h2 class="heading-section center" style="margin-bottom: 30px;">Testimonials</h2>
				<div class="testimonials">
					<div id="testimonial" class="quotes-slider col-md-8 col-md-offset-2">
						<div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true"
							data-auto="true">

							<?php
							if ($result_test->num_rows > 0) {
								while ($row = $result_test->fetch_assoc()) {
									$test_img = $row['image'];
									$test_name = $row['name'];
									$test_rank = $row['rank'];
									$test_comment = $row['comment'];
									$test_path = 'testimonials/';
									$img_portfolio_path = $img_path . $test_path . $test_img;


									echo "<div class='item'>
									<!-- Each Quotes -->
									<div class='quotes'>
										<div class='quotes-text center'>
											<p>$test_comment</p>
										</div>
										<div class='profile'>
											<img src=$img_portfolio_path alt='$test_name' style='max-width: 140px; width: 100%; height: auto; min-height: 60px; object-fit: contain; border-radius: 8px; border: 3px solid #fff; box-shadow: 0 4px 15px rgba(0,0,0,0.2); display: block; margin: 0 auto 15px;'>
											<h5>$test_name</h5>
											<h6>$test_rank
											</h6>
										</div>
									</div>
									<!-- End Quotes -->
								</div>
								<!-- End Slide -->";

								}
							} else {
								echo "0 results";
							}

							?>



						</div>
						<!-- End Slide -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Awards -->
	<div class="section section-quotes section-pad light" style="height:80%; padding-top: 40px; padding-bottom: 40px;" id="awards">
		<div class="container">
			<div class="content row">
				<h2 class="heading-md-lead center" style="color:black; margin-bottom: 30px;">Awards</h2>
				<div class="testimonials center">
					<div id="testimonial" class="quotes-slider">
						<div class="owl-carousel loop has-carousel" data-items="2" data-loop="true" data-dots="true"
							data-auto="true" data-delay="500">
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/1.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/2.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/3.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/4.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>

							<!-- End Slide -->

						</div>
						<!-- End Slides -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->



	






	<!-- Call Action -->
	<div class="call-action cta-small has-bg bg-primary" style="background-image: url('image/plx-cta.jpg');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h2>Have any Question?</h2>
						<p>We're here to help. Send us an email or call us at +91 9921003190.</p>
						<a class="btn btn-alt" href="contact.php">Contact Us</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<?php include 'footer.php'; ?>

	<!-- Rreload Image for Slider -->
	<div class="preload hide">
		<img alt="" src="image/slider-lg-a.jpg">
		<img alt="" src="image/slider-lg-b.jpg">
	</div>
	<!-- End -->

	<!-- Preloader !active please if you want -->
	<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
	<!-- Preloader End -->

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>

</html>