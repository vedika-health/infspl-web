<?php 
// Include database connection if not already included
if (!isset($conn)) {
	include 'db_connection.php';
}
?>
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
				<img class="logo logo-dark" alt="INFSPL" src="image/logo.png" srcset="image/logo.png 2x">
				<img class="logo logo-light" alt="INFSPL" src="image/logo.png" srcset="image/logo.png 2x">
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
					<li class="dropdown"><a href="./">Home</a></li>
					<li class="dropdown"><a href="index.php#who">About Us<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="index.php#who">Who are we </a></li>
							<li><a href="index.php#service">What we do</a></li>
							<li><a href="index.php#trust">Trust the best </a></li>
							<li><a href="index.php#clients">Our Clients</a></li>
							<li><a href="index.php#test">Testimonials</a></li>
							<!-- <li><a href="portfolio.php#portfolio">Portfolio Company</a></li>
							<li><a href="portfolio.php#incubation">Incubation Centers</a></li> -->
						</ul>
					</li>
					<li><a href="teams.php">Team</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">Services <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php
							$sql_cat = "SELECT * FROM scategories WHERE language_id=169";
							$result_cat = $conn->query($sql_cat);

							if ($result_cat->num_rows > 0) {
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
					<li><a href="index.php#awards">Awards</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li class="quote-btn"><a class="btn" href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
			<!-- #end MainNav -->
		</div>
	</div>
	<!-- #end Navbar -->
