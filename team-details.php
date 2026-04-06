<?php include 'db_connection.php'; ?>

<?php 
$id = $_GET['id'] ?? null;

if (!$id) {
	header('Location: teams.php');
	exit;
}

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
$result_sCat = $conn->query($sql_sCat);

// Get specific team member
$sql_member = "SELECT * FROM members WHERE id=$id AND language_id=169";
$result_member = $conn->query($sql_member);

if ($result_member->num_rows == 0) {
	header('Location: teams.php');
	exit;
}

$member = $result_member->fetch_assoc();
$img_path = 'https://infspl.com/development/assets/front/img/';
$team_img = $member['image'];
$team_path = 'members/';
$img_team_path = $img_path . $team_path . $team_img;
$team_name = $member['name'];
$team_rank = $member['rank'];
$team_linkedIn = $member['linkedin'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $team_name; ?> | INFSPL- Investing Intellect For You</title>
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
							<h1 class="page-title" style="color: #1e566f;"><?php echo $team_name; ?></h1>
							<p style="color: #1e566f;"><?php echo $team_rank; ?></p>
						</div>


					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/team_infs.jpg" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	<!-- End Header -->
	<!-- Content Section -->
	<div class="section section-contents bg-light section-pad">
		<div class="container">
			<div class="content ">

				<div class="row">
					<div class="col-md-12">

						<div class='team-profile' id='<?php echo $id; ?>'>
							<div class='team-member row'>
								<div class='team-photo col-md-4 col-sm-5 col-xs-12'>
									<img alt='<?php echo $team_name; ?>' src='<?php echo $img_team_path; ?>'>
								</div>
								<div class='team-info col-md-8 col-sm-7 col-xs-12'>
									<h3 class='name'><?php echo $team_name; ?></h3>
									<p class='sub-title'><?php echo $team_rank; ?></p>
									<?php if ($team_linkedIn): ?>
									<a href='<?php echo $team_linkedIn; ?>' target='_blank'>
										<em class='fa fa-linkedin' aria-hidden='true'></em>
									</a>
									<?php endif; ?>

									<?php
									if ($id == 28) {
										echo "<p> Dinesh brings to the table 21+ Years of Professional Expertise in the Financial
										Domain.
										Being a Chartered Accountant he has worked in multiple leadership roles across
										sectors.
										<br>
										Being a Business Growth Strategist, Dinesh has diverse experience in Core
										Business Services across multiple business domains from small to large scale
										enterprises. He believes in delivering real business value on a real-time basis
										so that each Business can get its benefits on time.
										<br>
										Dinesh's experience in Investment Banking mainly includes Services like: <br>
										-Growth Strategy Advisor for taking Enterprise till successfully raising funds
										from IPO. <br>
										-Virtual Chief Financial Officer (CFO). <br>
										-Consultancy to all kinds of Business related to Financial Decisions. <br>
										-Debt Instruments like OCD, OCRPS, CCPS, NCD, etc. Structuring for all kinds of
										Business. <br>
										-Projected Financials, Valuation of Company, Founders Grooming, Pitch Deck,
										Evaluation of Market Strategy, Competitors Analysis, etc. <br>
										-Raising of Funds for all business sectors of Start-Up, MSME & Large Enterprises
										from Pool of Investors like HNIs, UHNIs, SFO, Private Equity (PE), VCs, and
										Angel Investors <br>
										-Mergers & Acquisitions (M&A). <br>
										-Due Diligence. <br>
										-Legal Framework. <br>
										-Advisory & Mentoring. <br>

										He is also an Angel Investor, Jury & Panel Member at various Recognised Events.
										Dinesh is an avid Reader, a Passionate Mountain Trekker, and a Marathon
										Enthusiast; also believes in giving back to the community through various Social
										Causes.
									</p>";
									} else if ($id == 29) {
										echo "<p>Kapil has experience of over 19+ years in the Corporate Enterprise Domain and also holds a degree in M.Com and MBA Finance. <br>

										He has an in-depth knowledge of Core Business Operations as he handled his Family Business - of Garment Manufacturing and also handled Senior Positions for Corporate Service Delivery in General Insurance, Motor Insurance, Telecom, and Food Sector.  
										<br>
										He has worked in multiple roles and excels at; <br>
										Business Development & Operations <br>
										Deal Sourcing <br>
										Client Relations <br>
										Investor Engagement <br>
										Business tie-ups <br>
										Marketing, etc.   <br>
										
										He also specializes in Idea Validation as knows how to analyze the pulse of the market and helps in new product/service planning and development. <br>
										
										
										
										Kapil is also an Angel Investor, Jury & Panel Member at various Recognised Events. <br>
										Being a foodie at heart, he loves cooking, is a motor enthusiast, and is always ready to go the extra mile to help anyone in need.
										 </p>";
									} else if ($id == 30) {
										echo "<p>Veena has experience of over 15+ years in the Education & Garment Sector. <br>
										She has an in-depth knowledge of Core Business Operations specifically related to Marketing, Advertising, Design, Human Resources, Operations, and IT platforms.      
										<br>
										
										With a natural Creative Acumen, she has vast experience in; <br>
										Product Design <br>
										Marketing <br>
										Social Media Strategy <br>
										People Management and 
										Client Engagement. 
										
										<br>
										Veena always ensures the delivery of the best business-related services on a real-time basis.         
										
										<br>
										At INFSPL, she always ensures the right balance of People, Skills & best mind is maintained at all times.  
										</p>";
									} else {
										echo "<p>Team member information coming soon.</p>";
									}
									?>
								</div>
							</div>
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

		<!-- JavaScript Bundle -->
		<script src="js/jquery.bundle.js"></script>
		<!-- Theme Script init() -->
		<script src="js/script.js"></script>
		<!-- End script -->
</body>

</html>

