<?php include 'db_connection.php'; ?>

<?php $id = $_GET['id'] ?? '#';

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
$result_sCat = $conn->query($sql_sCat);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Teams | INFSPL- Investing Intellect For You</title>
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

		/* Tablet responsiveness */
		@media (max-width: 991px) {
			.grid {
				grid-template-columns: repeat(2, 1fr);
			}
		}

		/* Mobile responsiveness */
		@media (max-width: 767px) {
			.grid {
				grid-template-columns: repeat(1, 1fr);
			}
		}
	</style>
</head>

<body class="site-body style-v1">
	<?php include 'header.php'; ?>
	</header>
	<!-- End Header -->
	<!-- Teams -->
	<div class="section section-teams section-pad" id="team" style="padding-top: 40px; padding-bottom: 30px;">
		<div class="container">
			<div class="content row">
				<div class="wide-md center" style="margin-bottom: 30px;">
					<h2 class="heading-section" style="font-size: 42px; font-weight: 700; color: #1e566f; margin-bottom: 20px; letter-spacing: 1px;">TEAM</h2>
					<h5 class="heading-sm-lead" style="font-size: 18px; font-weight: 600; color: #666; letter-spacing: 2px; margin: 0 auto; margin-top: 4px;">MANAGEMENT TEAM</h5>
				</div>

				<div class="team-member-row row" style="margin-top: 20px;">

					<?php
					// get team
					$sql_members = "SELECT * FROM members WHERE language_id=169 ORDER BY id ASC";
					$result_members = $conn->query($sql_members);
					$img_path = 'https://infspl.com/development/assets/front/img/';
					
					if ($result_members->num_rows > 0) {
						$count = 0;
						while ($row = $result_members->fetch_assoc()) {
							$count++;
							$id2 = $row['id'];
							$team_img = $row['image'];
							$team_path = 'members/';
							$img_team_path = $img_path . $team_path . $team_img;
							$team_name = $row['name'];
							$team_rank = $row['rank'];
							$team_linkedIn = $row['linkedin'];

							$team_odd_even = ($id2 % 2 == 0) ? 'even' : 'odd';

							// Show first 3 members under MANAGEMENT & STRATEGY
							if ($count <= 3) {
								echo "
								<div class='col-md-4 col-sm-6 col-xs-6 $team_odd_even' style='margin-bottom: 40px;'>
									<!-- Team Profile -->
									<div class='team-member' style='text-align:center; margin-top:40px;'>
										<div class='team-photo' 
											style='width:250px; height:250px; margin:0 auto; overflow:hidden; border-radius:50%; 
											border:4px solid #fff; box-shadow:0 0 12px rgba(0,0,0,0.15);'>
											
											<a href='team-details.php?id=$id2'>
												<img alt='$team_name' src='$img_team_path' 
													style='width:100%; height:100%; object-fit:cover; object-position:top; border-radius:50%; 
													transition:transform 0.3s ease; cursor:pointer;'>
											</a>
										</div>
										
										<div class='team-info center' style='margin-top:15px;'>
											<h4 class='name' style='color:#40454b; margin-bottom:5px;'>
												<a href='team-details.php?id=$id2' style='color:inherit; text-decoration:none;'>$team_name</a>
											</h4>
											<p class='sub-title' style='font-size:0.9em; color:#a5abb2;'>$team_rank</p>
										</div>
									</div>
									<!-- Team #end -->
								</div>
								";
							}
						}
					} else {
						echo "<p class='center'>No team members found.</p>";
					}
					?>
				</div><!-- TeamRow #end -->

				<?php
				// Show remaining members under CORE
				$sql_members_core = "SELECT * FROM members WHERE language_id=169 ORDER BY id ASC";
				$result_members_core = $conn->query($sql_members_core);
				
				if ($result_members_core->num_rows > 3) {
					$count_core = 0;
					
					echo "
					<div class='wide-md center' style='margin-top: 40px; margin-bottom: 20px;'>
						<h5 class='heading-sm-lead' style='font-size: 18px; font-weight: 600; color: #666; letter-spacing: 2px;'>CORE TEAM</h5>
					</div>
					
					<div class='team-member-row row' style='margin-top: 10px;'>
					";
					
					while ($row = $result_members_core->fetch_assoc()) {
						$count_core++;
						
						// Show remaining members (after first 3)
						if ($count_core > 3) {
							$id2 = $row['id'];
							$team_img = $row['image'];
							$team_path = 'members/';
							$img_team_path = $img_path . $team_path . $team_img;
							$team_name = $row['name'];
							$team_rank = $row['rank'];
							$team_linkedIn = $row['linkedin'];

							$team_odd_even = ($id2 % 2 == 0) ? 'even' : 'odd';

							echo "
							<div class='col-md-4 col-sm-6 col-xs-6 $team_odd_even' style='margin-bottom: 40px;'>
								<!-- Team Profile -->
								<div class='team-member' style='text-align:center; margin-top:40px;'>
									<div class='team-photo' 
										style='width:250px; height:250px; margin:0 auto; overflow:hidden; border-radius:50%; 
										border:4px solid #fff; box-shadow:0 0 12px rgba(0,0,0,0.15);'>
										
										<a href='team-details.php?id=$id2'>
											<img alt='$team_name' src='$img_team_path' 
												style='width:100%; height:100%; object-fit:cover; object-position:top; border-radius:50%; 
												transition:transform 0.3s ease; cursor:pointer;'>
										</a>
									</div>
									
									<div class='team-info center' style='margin-top:15px;'>
										<h4 class='name' style='color:#40454b; margin-bottom:5px;'>
											<a href='team-details.php?id=$id2' style='color:inherit; text-decoration:none;'>$team_name</a>
										</h4>
										<p class='sub-title' style='font-size:0.9em; color:#a5abb2;'>$team_rank</p>
									</div>
								</div>
								<!-- Team #end -->
							</div>
							";
						}
					}
					
					echo "</div><!-- Core TeamRow #end -->";
				}
				?>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Gallery Section -->
	<div class="section section-contents section-pad" style="padding-top: 30px;">
		<div class="container">
			<div class="content row">

				<div class="wide-md text-center" style="margin-bottom: 30px;">
					<h2 class="heading-section" style="font-size: 36px; font-weight: 700; color: #1e566f; letter-spacing: 1px;">Gallery</h2>
				</div>
				<!-- Gallery -Photo -->
				<div class="gallery gallery-col3 gallery-grids gallery-lightbox hover-zoom">
					<div class="grid">
						<?php
						$sql_gal = "SELECT * FROM galleries WHERE language_id=169 ORDER BY serial_number";
						$result_gal = $conn->query($sql_gal);
						
						if ($result_gal->num_rows > 0) {
							while ($row = $result_gal->fetch_assoc()) {
								$id = $row['id'];
								$image = $row['image'];
								$cat_path = 'gallery/';
								$img_cat_path = $img_path . $cat_path . $image;
								$name = $row['title'];

								echo "
								<a href='$img_cat_path'>
									<div class='gallery-item'><img src='$img_cat_path' style='width: 100%;' alt='$name'></div>
									<p style='text-align: center; margin-top: 10px;'>$name</p>
								</a>
								";
							}
						} else {
							echo "<p>No gallery images found.</p>";
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