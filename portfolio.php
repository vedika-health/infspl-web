<?php include 'db_connection.php'; ?>
<?php
$sql = "SELECT * FROM blogs WHERE language_id=169";
$result = $conn->query($sql);

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
$result_sCat = $conn->query($sql_sCat);

// get portfolio

$sql_portfolios = "SELECT * FROM portfolios WHERE language_id=169";
$result_portfolios = $conn->query($sql_portfolios);

$img_path = 'https://infspl.com/development/assets/front/img/';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>News | INFSPL- Investing Intellect For You</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
    <link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="site-body style-v1">
    <!-- Header -->
    <header class="site-header header-s1 is-sticky">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="top-aside top-left">
                        <ul class="top-nav">
                            <li><a href="blog_category.php" style="color: #1e566f">Blogs</a></li>
                            <li><a href="career.php" style="color: #1e566f">Career</a></li>

                        </ul>
                    </div>
                    <div class="top-aside top-right clearfix">
                        <ul class="top-contact clearfix">
                            <li class="t-email t-email1">
                                <em class="fa fa-envelope-o" aria-hidden="true"></em>
                                <span><a href="#" style="color: #1e566f">contact@infspl.com</a></span>
                            </li>
                            <li class="t-phone t-phone1">
                                <em class="fa fa-phone" aria-hidden="true"></em>
                                <span style="color: #1e566f">+91 9921003190</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- #end Topbar -->
        <!-- Navbar -->
        <div class="navbar navbar-primary">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="./">
                    <img class="logo logo-dark" alt="" src="image/logo.png" srcset="image/logo2x.png 2x">
                    <img class="logo logo-light" alt="" src="image/logo.png" srcset="image/logo.png 2x">
                </a>
                <!-- #end Logo -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
                        aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Q-Button for Mobile -->
                    <div class="quote-btn"><a class="btn" href="get-a-quote.html">Sign in</a></div>
                </div>
                <!-- MainNav -->
                <nav class="navbar-collapse collapse" id="mainnav">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active"><a href="./">Home</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="index.html">Home - Default</a></li>
                                <li><a href="index-v2.html">Home - Version 2</a></li>
                                <li><a href="index-v3.html">Home - Version 3</a></li>
                                <li><a href="index-v4.html">Home - Version 4</a></li>
                                <li><a href="index-static.html">Home - Image</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown"><a href="/#who">About us<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/#who">Who are we </a></li>
                                <li><a href="/#service">What we do</a></li>
                                <li><a href="/#trust">Trust the best </a></li>
                                <li><a href="/#team">Team</a></li>
                                <li><a href="/#clients">Our Clients</a></li>
                                <li><a href="/#test">Testimonials</a></li>
                                <li><a href="#portfolio">Portfolio Company</a></li>
                                <li><a href="#incubation">Incubation Centers</a></li>


                                <!-- <ul class="dropdown-menu">
                                        <li><a href="shortcode.html">Shortcode - Element</a></li>
                                        <li><a href="shortcode-carousel.html">Shortcode - Carousel</a></li>
                                        <li><a href="shortcode-banner.html">Shortcode - Banner</a></li>
                                    </ul> -->

                                <!-- <li><a href="typography.html">Typography</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Services <b class="caret"></b></a>
                            <ul class="dropdown-menu">

                                <?php


                                $sql_cat = "SELECT * FROM scategories WHERE language_id=169";
                                $result_cat = $conn->query($sql_cat);


                                if ($result_cat->num_rows > 0) {
                                    // Output data of each row
                                
                                    while ($row_cat = $result_cat->fetch_assoc()) {
                                        $id1 = $row_cat['id'];

                                        $name = $row_cat['name'];

                                        echo "<li><a href='services.php?id=$id1'>$name</a></li>";


                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>


                            </ul>
                        </li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="/#awards">Awards</a></li>
                        <li class="quote-btn"><a class="btn" href="contact.php">Contact Us</a></li>
                    </ul>
                </nav>
                <!-- #end MainNav -->
            </div>
        </div>
        <!-- #end Navbar -->
        <!-- Banner/Static -->

        <!-- #end Banner/Static -->
    </header>
    <!-- End Header -->
<!-- portfolio company -->
<div class="section section-quotes bg-dark light" id="portfolio">
		<div class="container">
			<div class="content row">

				<h2 class="heading-md-lead center" style="padding-top: 30px;">Portfolio Companies</h2>

				<div class="testimonials center">
					<div id="testimonial" class="quotes-slider">
						<div class="owl-carousel loop has-carousel" data-items="2" data-loop="true" data-dots="true"
							data-auto="true">
							<?php
							if ($result_portfolios->num_rows > 0) {
								while ($row = $result_portfolios->fetch_assoc()) {
									$portfolio_img = $row['featured_image'];
									$port_title = $row['title'];
									$port_path = 'portfolios/featured/';
									$img_portfolio_path = $img_path . $port_path . $portfolio_img;
									$portfolio_link = $row['website_link'];

									echo "<div class='item'>
									<!-- Each Quotes -->
									<div class='quotes'>
										<div class='quotes-text'>
										</div>
										<center>
										<div class='fbox-photo' style='width:30%; height:30%;'>
											<a href=$portfolio_link target='_blank'><img src= $img_portfolio_path alt=''></a>
											<h5>$port_title</h5>
											
										</div>
										</center>
									</div>
									<!-- End Quotes -->
								</div>";

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

			</div>
		</div>
	</div>
	<!-- End Section -->



	<!-- Incubation -->

	<div class="section section-quotes light" id="incubation">
		<div class="container">
			<div class="content row">

				<h2 class="heading-md-lead center" style="color: black; padding-top: 50px;  ">Incubation Partners</h2>

				<div class="testimonials center">
					<div id="testimonial" class="quotes-slider">
						<div class="owl-carousel loop has-carousel" data-items="2" data-loop="true" data-dots="true"
							data-auto="true">
							<center>
								<div class='item'>
									<!-- Each Quotes -->
									<div class='quotes'>
										<div class='quotes-text'>
										</div>
										<div class='fbox-photo' style='width:30%; height:30%;'>
											<a href='' target='_blank'>
												<<img src='image/incubation1.png' alt=''>
											</a>


										</div>
									</div>
									<!-- End Quotes -->
								</div>
							</center>
							<center>
								<div class='item'>
									<!-- Each Quotes -->
									<div class='quotes'>
										<div class='quotes-text'>
										</div>
										<div class='fbox-photo' style='width:30%; height:30%;'>
											<a href='' target='_blank'><img src='image/incubation2.png' alt=''></a>


										</div>
									</div>
									<!-- End Quotes -->
								</div>
							</center>
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
                        <a class="btn btn-alt" href="contact.html">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Footer Widget-->
    <div class="footer-widget style-v2 section-pad-md">
        <div class="container">
            <div class="row">

                <div class="widget-row row">
                    <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
                        <!-- Each Widget -->
                        <div class="wgs wgs-footer wgs-text">
                            <div class="wgs-content">
                                <p><img src="image/logo.png" srcset="image/logo2x.png 2x" alt=""></p>
                                <p>INFSPL is an Investment Banking Company providing services for StartUp, MSME & Large
                                    Enterprise.
                                </p>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
                        <!-- Each Widget -->
                        <div class="wgs wgs-footer wgs-menu">
                            <h5 class="wgs-title">Our Services</h5>
                            <div class="wgs-content">
                                <ul class="menu">
                                    <li><a href="services.php?id=59">Startup</a></li>
                                    <li><a href="services.php?id=60">MSME</a></li>
                                    <li><a href="services.php?id=61">Large Enterprise</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="footer-col col-md-2 col-sm-6 res-m-bttm">
                        <!-- Each Widget -->
                        <div class="wgs wgs-footer wgs-menu">
                            <h5 class="wgs-title">Quick Links</h5>
                            <div class="wgs-content">
                                <ul class="menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="/#who">About Us</a></li>
                                    <li><a href="teams.php">Team</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="career.php">Career</a></li>
                                    <li><a href="forms.php">Forms</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>

                    <div class="footer-col col-md-3 col-sm-6">
                        <!-- Each Widget -->
                        <div class="wgs wgs-footer">
                            <h5 class="wgs-title">Get In Touch</h5>
                            <div class="wgs-content">
                                <p>
                                    Shivdarshan Chambers,
                                    2nd Floor,Office No – 7&12,
                                    Marketyard Road,

                                    Pune – 411037
                                    Maharashtra, India.
                                </p>
                                <p>
                                    <em class="fa fa-envelope-o" aria-hidden="true"></em>
                                    <span><a href="#" style="color: #1e566f">contact@infspl.com</a></span>
                                </p>
                                <p>
                                    <!-- <span>Toll Free</span>: (1-800) 234 5678<br> -->
                                    <span>Phone</span>: +91 9921003190
                                </p>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/intellectualservices03"><em
                                                class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                    <li><a href="https://mobile.twitter.com/infspl"><em class="fa fa-twitter"
                                                aria-hidden="true"></em></a></li>
                                    <li><a
                                            href="https://www.linkedin.com/company/intellectual-investments-financial-services"><em
                                                class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>

                </div><!-- Widget Row -->

            </div>
        </div>
    </div>
    <!-- End Footer Widget -->

    <!-- Copyright -->
    <div class="copyright style-v2">
        <div class="container">
            <div class="row">

                <div class="row">
                    <div class="site-copy col-sm-7">
                        <p>&copy; 2024 Intellectual Investments & Financial Services Pvt. Ltd. <a href="#">All Rights
                                Reserved</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Copyright -->

    <!-- JavaScript Bundle -->
    <script src="js/jquery.bundle.js"></script>
    <!-- Theme Script init() -->
    <script src="js/script.js"></script>
    <!-- End script -->
</body>

</html>