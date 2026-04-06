<?php include 'db_connection.php'; ?>
<?php
$sql = "SELECT * FROM bcategories WHERE language_id=169";
$result = $conn->query($sql);
$img_path = 'https://infspl.com/development/assets/front/img/';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blogs | INFSPL- Investing Intellect For You</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="site-body style-v1">
	<?php include 'header.php'; ?>
	<!-- Banner/Static -->
	<div class="banner banner-static">
		<div class="banner-cpn">
			<div class="container">
				<div class="content row">

					<div class="banner-text">
						<h1 class="page-title">INFSPL Blogs</h1>
						<!-- <p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae dicta.</p>						 -->
					</div>
					

				</div>
			</div>
		</div>
		<div class="banner-bg imagebg">
			<img src="image/blog.jpg" alt="" />
		</div>
	</div>
	<!-- #end Banner/Static -->

	<!-- Content -->
	<div class="section section-blog section-pad">
		<div class="container">
			<div class="content row">

				<div class="row">

					<!-- Blog Post Loop -->
					<div class="row" style="text-align: center;">
						<ul class="blog-posts">

							<?php




							if ($result->num_rows > 0) {
								// Output data of each row
							
								while ($row = $result->fetch_assoc()) {
									$id = $row['id'];
									
									
							

									$name = $row['name'];

									echo " 
									<li class='post post-loop col-sm-4 '>
									<div class='post-thumbs'>
										<a href='news.php?id=$id'><img alt='' src='image/$name.jpg'></a>
									</div>
									<div class='post-entry'>
										
										<h2><a href='news.php?id=$id'>$name</a></h2>
										
										<a class='btn btn-alt' href=news.php?id=$id'>Read More</a>
									</div>
								</li>";


								}
							} else {
								echo "0 results";
							}
							?>





						</ul>
					</div>
					<div class="clear"></div>

					<!-- End Blog Post -->




				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->


	<!-- Call Action -->
	<div class="call-action cta-small has-bg bg-primary" style="background-image: url('image/plx-cta.jpg');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h2>Have any Question?</h2>
						<p>We're here to help. Send us an email or call us at  +91 9921003190.</p>
						<a class="btn btn-alt" href="contact.html">Contact Us</a>
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