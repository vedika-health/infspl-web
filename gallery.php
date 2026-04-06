<?php include 'db_connection.php'; ?>


<?php


$sql_gal = "SELECT * FROM galleries WHERE language_id=169 ORDER BY serial_number";
$result_gal = $conn->query($sql_gal);
$img_path = 'https://infspl.com/development/assets/front/img/';

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
$result_sCat = $conn->query($sql_sCat);









?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Gallery | INFSPL- Investing Intellect For You</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-gap: 10px;
		}

		.grid img {
			width: 100%;
		}
	</style>
</head>

<body class="site-body style-v1">
	<?php include 'header.php'; ?>
		<!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text">
							<h1 class="page-title" style="color:#1e566f;">Photo Gallery</h1>
							<!-- <p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat do eiusmod tempor incidid.</p>						 -->
						</div>


					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/gallery_infs.png" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	<!-- End Header -->
	<!-- Content Section -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">



				<div class="gaps size-lg"></div>
				<div class="wide-md text-center">
					<h2>Gallery </h2>

				</div>
				<!-- Gallery -Photo #D -->
				<div class="gallery gallery-col3 gallery-grids gallery-lightbox hover-zoom">
					<div class="grid">

						<?php
						if ($result_gal->num_rows > 0) {
							// Output data of each row
							while ($row = $result_gal->fetch_assoc()) {
								$id = $row['id'];
								$image = $row['image'];
								$cat_path = 'gallery/';
								$img_cat_path = $img_path . $cat_path . $image;
								$name = $row['title'];

								echo "
								<a href='$img_cat_path'>
								<div class='gallery-item'><img src='$img_cat_path' width: '600' height: '400'></div>$name
								</a>
							";

							}
						} else {
							echo "0 results";
						}
						?>

					</div>

				</div>
				<!-- Gallery #end -->



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

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>

</html>