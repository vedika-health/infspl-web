<?php include 'db_connection.php'; ?>


<?php
$id = $_GET['id'];
$cat_id = $_GET['cat_id'];

$sql_services = "SELECT * FROM services WHERE scategory_id=$cat_id AND id=$id AND language_id=169 ";
$result_services = $conn->query($sql_services);
$service_path = 'services/';
$img_path = 'https://infspl.com/development/assets/front/img/';

// Initialize variables
$category_name = '';
$sql_sCat = "SELECT * FROM scategories WHERE language_id=169 AND id=" . intval($cat_id) . " LIMIT 1";
$result_sCat = $conn->query($sql_sCat);
if ($result_sCat && $result_sCat->num_rows > 0) {
	$row_cat = $result_sCat->fetch_assoc();
	$category_name = $row_cat['name'];
}


if ($result_services->num_rows > 0) {
	// Output data of each row
	while ($row1 = $result_services->fetch_assoc()) {
		$service_id = $row1['id'];
		$service_name = $row1['title'];
		$service_image = $row1['main_image'];
		$img_service_path = $img_path . $service_path . $service_image;
		$service_summary = $row1['summary'];
		$serial_number = $row1['serial_number'];
		$service_meta = $row1['meta_keywords'];
		$serial_content = $row1['content'];
		// if ($serial_number % 2 == 0) {
		// 	$oddOrEven = 'even';
		// } else if ($serial_number = 1) {
		// 	$oddOrEven = 'even first';
		// } else {
		// 	$oddOrEven = 'odd';
		// }

	}
} else {
	echo "0 results";
}
?>









<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Service | INFSPL- Investing Intellect For You</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	.service-detail-container {
		max-width: 900px;
		margin: 0 auto;
	}

	.service-detail-container .heading-lg {
		text-align: center;
		margin-bottom: 2rem;
		color: #1f2d3d;
		font-size: 30px;
		line-height: 1.3;
	}

	.service-content {
		font-size: 16px;
		line-height: 1.8;
		text-align: justify;
		color: #3a3a3a;
	}

    .service-content p,
    .service-content div,
    .service-content p.MsoNormal {
        margin-bottom: 1em;
        line-height: 1.8 !important;
        text-align: justify !important;
    }

    .service-content ul,
    .service-content ol {
        margin: 0 0 1.2em 1.8em;
        padding-left: 0;
        text-align: left !important;
    }

    .service-content li {
        margin-bottom: 0.6em;
        text-align: left !important;
    }

    .service-content * {
        word-break: break-word;
    }

    .service-listing {
        padding: 60px 0;
        background-size: cover !important;
        background-position: center center !important;
        background-repeat: no-repeat !important;
        background-attachment: scroll !important;
        position: relative;
        min-height: 300px;
    }

    .service-listing h2 {
        text-align: center;
        margin-bottom: 35px;
        color: #ffffff;
    }

    .service-listing .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px 35px;
        max-width: 960px;
        margin: 0 auto;
    }

    .service-listing .service-grid a {
        color: #ffffff;
        font-weight: 400;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 6px 4px;
    }

    .service-listing .service-grid a:hover {
        color: #f3c669;
        text-decoration: underline;
    }

    .service-listing .service-grid .service-icon {
        font-size: 28px;
        line-height: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
    }

    .service-listing .service-grid a:hover .service-icon {
        color: #f3c669;
    }
	</style>
</head>

<body class="site-body style-v1">
	<?php include 'header.php'; ?>
	<!-- End Header -->
	<div style="text-align: center; padding: 30px 0;">
		<h2 class="heading-lg" style="padding-bottom: 30px;">
			<?php echo $category_name; ?> Services
		</h2>
	</div>
	<!-- Banner/Static -->
	<div class="banner banner-static">
		<div class="banner-cpn">
			<div class="container">
				<div class="content row">
					<div class="banner-text">
						<h1 class="page-title">
							<?php echo $service_name; ?>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-bg imagebg">
			<img src=<?php echo $img_service_path; ?> alt="" />
		</div>
	</div>
	<!-- #end Banner/Static -->
	<!-- Content -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">

				<div class="service-detail-container">
					<h2 class="heading-lg">
						<?php echo $service_name; ?>
					</h2>

					<div class="service-content">
						<?php echo $serial_content; ?>
					</div>
				</div>

					<!-- <ul class="list-style dots style-v2">
					<li>Investigating and Verifying core information about a company/organisation before a final
						decision is taken towards Investment.</li>
					<li>For compliance teams, it comes up when considering new business relationships with new vendors
						and third parties.</li>
				</ul>


				The due diligence process allows to identify and assess risks, liabilities, and business problems in the
				company before finalizing the transaction, potentially avoiding losses.<br><br>

				B.Due Diligence may be of different types and depends upon the purpose for which Due Diligence is being
				carried out for;
				<ul class="list-style dots style-v2">
					<li>Financial Due Diligence.</li>
					<li>Regulatory Due Diligence.</li>
					<li>Vendor Due Diligence.</li>
					<li>Technology Diligence etc.</li>

				</ul>
				<h3 class="heading-lg">Our Scope of Services</h2>
					<ul class="list-style dots style-v2">
						<li>Assigning Expert Team having Team Leader with an industry experience of over 21+ years who
							helps in the entire Due Diligence process.
						</li>
						<li>In detail discussion with the Founders/ Business Owners/ Investors to understand the purpose
							& timelines of the Due Diligence. Also about the Organisation of whom Due Diligence needs to
							be conducted, etc.</li>
						<li>Sharing with Organisation of whom Due Diligence needs to be conducted an Initial List of
							Requirements for Due Diligence.</li>
						<li>Upon receipt of the information a detailed Strategy is designed along with the deliverables.
						</li>
						<li>Timely review and updates during the due diligence process is provided. Also if required all
							the required support is also being provided to ensure the desired result is achieved.</li>
						<li>Draft Due Diligence Report sharing with Founders/Business Owners/Investors for their
							internal review & also for further joint discussion.</li>
						<li>Issuing final Due Diligence Report.</li> -->


			</div>
		</div>
	</div>
	<!-- End Content -->
	<!-- Content -->
	<!-- <div class="section section-contents section-pad bg-light">
		<div class="container">
			<div class="content row"> -->


	<!-- <div class="content-box">
					<h4><img class="alignright no-resize" src="image/graph-b.png" alt="" width="120" height="120">Services We Provide</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididu labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit iusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h5>Review of</h5>
					<ul class="list-style dots style-v2">
						<li>-Monthly MIS</li>
						<li>Monthly Financial Statements: Profit & Loss & Balance Sheet. </li>
						<li>Annual Financial Report before discussion & Approval at Board of 
							Directors Meeting & Signatures by Directors.</li>
						<li>-Pricing Policy of each Product together with its Revenue, Expenses & 
							Profit Outcome (Gross Margin & Net Profit) & also giving suggestion for 
							further reduction in the Expenses for better Gross Margin & Net Profit 
							without impact to quality of Product.  </li>
						<li>Marketing Strategy (B2B, B2C, D2C etc.) together with its Financial 
							Impacts, Monthly Burning Cost v/s its Result time lines, etc. 
							-Available Funds, Utilization Time Lines, Gap (if any) & suggestion for fill 
							the Gap on timely basis.</li>
						<li>Agreement with business associates, advisor, joint venture, employees, 
							banks. </li>
						<li>Guidance to Management / Owners & its core Team for preparation of 
							effective future financial milestones/Targets of Company for better vision 
							to Company, Investors, Employees, Lenders etc.  </li>
						<li>Resolving all the Core Accounting Issues.  </li>
						<li>Discussion with CA, CS & Lawyer jointly with Management / Owners for 
							resolving all the core & compliances related issues of Finance, Taxation & 
							Accounts.</li>
						<li>Guidance to Management / Owners & its core Team for betterment in 
							the whole Accounting Process with proper maker & checker authorization 
							points. </li>

					</ul>
					
				</div> -->


	<!-- </div>
		</div>
	</div> -->
	<!-- End Content -->
	<!-- Call Action -->
	<div class="cta-sameline center" style="padding-bottom: 30px;">
					
						<a class="btn" href="contact.php">Contact Us</a>
					</div>
	<!-- End Section -->
	<!-- Contents -->
	<!-- <div class="section section-services section-pad">
		<div class="container">
			<div class="content row">
				
				<h2><img src="image/photo-sm-k.jpg" alt="" class="alignright col-md-4 no-round"> Exceptional client service</h2>
				<p>When it comes to choosing a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa. adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				<p>Working with a professional is an consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididu labore et dolore magna aliqua.</p>
				<div class="clear"></div>
				<div class="gaps size-xs"></div>
				<div class="feature-intro">
					<div class="row">
						<div class="col-sm-4 res-s-bttm">
							<div class="icon-box style-s1">
								<em class="fa fa-bar-chart-o" aria-hidden="true"></em>
							</div>
							<h4>Predictable earnings</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
						</div>
						<div class="col-sm-4 res-s-bttm">
							<div class="icon-box style-s1">
								<em class="fa fa-users" aria-hidden="true"></em>
							</div>
							<h4>Stable income stream</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
						</div>
						<div class="col-sm-4">
							<div class="icon-box style-s1">
								<em class="fa fa-credit-card" aria-hidden="true"></em>
							</div>
							<h4>Cash flow growth</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div> -->
	<!-- End Section -->
	<!-- Content with Parallax -->
    <div class="section service-listing section-pad has-bg has-parallax light"
        style="background-image: url('image/other services.jpg');">
        <div class="container">
            <div class="content row">

                <h2><?php echo $category_name; ?> Services</h2>

                <div class="service-grid">
                    <?php
                    $sql_service = "SELECT * FROM services WHERE scategory_id=$cat_id AND language_id=169 ORDER BY serial_number";
                    $result_service = $conn->query($sql_service);

                    if ($result_service->num_rows > 0) {
                        // Output data of each row
                        while ($row_service = $result_service->fetch_assoc()) {
                            $service_id = $row_service['id'];
                            $service_name = $row_service['title'];

                            $url = 'service.php?id=' . $service_id . '&cat_id=' . $cat_id;

                            echo "<a href='$url'><span class='service-icon'>&rsaquo;</span><span>$service_name</span></a>";
                        }
                    } else {
                        echo "<p style='text-align:center; color:#fff;'>No related services found.</p>";
                    }
                    ?>
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