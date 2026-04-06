<?php include 'db_connection.php'; ?>


<?php
$id_cat = isset($_GET['id']) ? intval($_GET['id']) : 0;

$img_path = 'https://infspl.com/development/assets/front/img/';
$service_path = 'services/';

// Initialize variables
$category_name = '';
$description = '';
$image = '';
$img_cat_path = '';
$serial_number = 0;

if ($id_cat > 0) {
	$sql_sCat = "SELECT * FROM scategories WHERE language_id=169 AND id=" . $id_cat . " LIMIT 1";
	$result_sCat = $conn->query($sql_sCat);
	
	if ($result_sCat && $result_sCat->num_rows > 0) {
		$row = $result_sCat->fetch_assoc();
		$image = $row['image'];
		$cat_path = 'service_category_icons/';
		$img_cat_path = $img_path . $cat_path . $image;
		$category_name = $row['name'];
		$description = $row['short_text'];
		$serial_number = $row['serial_number'];
	}
}

$sql_services = "SELECT * FROM services WHERE scategory_id=" . $id_cat . " ORDER BY serial_number";
$result_services = $conn->query($sql_services);




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
		.feature-service-row {
			display: flex;
			flex-wrap: wrap;
			margin-left: -15px;
			margin-right: -15px;
		}
		.feature-service-row > div {
			float: none !important;
			clear: none !important;
			padding-left: 15px;
			padding-right: 15px;
		}
		.feature-service-row .even,
		.feature-service-row .odd,
		.feature-service-row .even.first {
			clear: none !important;
			float: none !important;
		}
	</style>
</head>

<body class="site-body style-v1">
	<?php include 'header.php'; ?>
	<!-- End Header -->
	<!-- Banner/Static -->
	<div class="banner banner-static">
		<div class="banner-cpn">
			<div class="container">
				<div class="content row">
					<div class="banner-text">
						<h1 class="page-title" style="color: #1e566f">
							<?php echo $category_name; ?>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-bg imagebg">
			<img src=<?php echo $img_cat_path;?> alt="" />
		</div>
	</div>
	<!-- #end Banner/Static -->
	<!-- Service Section -->
	<div class="section section-services section-pad">
		<div class="container">
			<div class="content row">

				<div class="wide-md center">
					<h2 class="heading-lead">
						<?php echo $category_name; ?>
					</h2>
					<p>
						<?php echo $description; ?>
					</p>

					<!-- <p>A startup company is a newly established business, typically characterized by innovation,
						scalability, and a focus on addressing a specific market need or problem. Startups are
						often founded with a vision to bring a unique product, service, or technology to the
						market.</p>
					<p>To bring uniformity in the identified enterprises, the Department for Promotion of
						Industry and Internal Trade, Ministry of Commerce and Industry, Government of India has
						come out with a definition for an entity to be considered as a Startup:</p> -->
				</div>
				<!-- <div class="wide-md ">
					<ul class="list-style dots style-v2">
						<li>
							<p>Period of existence & operations should not be above 10 years from the Date of
								Incorporation.</p>
						</li>
						<li>
							<p>Incorporated as a Pvt. Ltd. Company or registered as a partnership firm or a
								limited liability partnership in India.</p>
						</li>
						<li>
							<p>Annual turnover not more than Rs. 100 crore in any of the financial years since
								its Incorporation.</p>
						</li>
						<li>
							<p>Entity not formed by splitting up or reconstruction of an existing business.</p>
						</li>

					</ul>


				</div> -->
				<!-- <p class="wide-md center">An entity shall cease to be a Startup on completion of ten years from the date
					of its incorporation/ registration or if its turnover for any previous year exceeds 100 Crore.</p> -->
				<!-- Feature Row  -->
				<div class="feature-row feature-service-row row">

				<?php
if ($result_services->num_rows > 0) {
    while ($row1 = $result_services->fetch_assoc()) {
        $service_id = $row1['id'];
        $service_name = $row1['title'];
        $service_image = $row1['main_image'];
        $img_service_path = $img_path . $service_path . $service_image;
        $service_summary = $row1['summary'];
        $service_fees = isset($row1['service_fees']) ? $row1['service_fees'] : '';
        $serial_number = $row1['serial_number'];

        if ($serial_number % 2 == 0) {
            $oddOrEven = 'even';
        } else if ($serial_number % 3 == 1) {
            $oddOrEven = 'even first';
        } else {
            $oddOrEven = 'odd';
        }

        $url = 'service.php?id=' . $service_id . '&cat_id=' . $id_cat;

        echo "
        <div class='col-md-4 col-sm-6 $oddOrEven'>
            <div class='feature boxed'>
                <a href='$url'>
                    <div class='fbox-photo'>
                        <img src='$img_service_path' alt=''>
                    </div>
                </a>
                <div class='fbox-content' style='text-align:left;'>
                    <h3 class='lead' style='margin:0 0 10px 0; line-height:1.3;'>
                        <a href='$url' style='color:#333; text-decoration:none;'>$service_name</a>
                    </h3>";
        
         if (!empty($service_fees)) {
             echo "
                     <p class='service-fees' style='color:#1e566f; font-weight:bold; font-size:15px; margin:0 0 8px 0; line-height:1.2;'>
                         $service_fees
                     </p>";
         }

        echo "
                    <p style='margin:10px 0 0 0;'>
                        <a href='$url' class='btn-link link-arrow-sm'>Learn More</a>
                    </p>
                </div>
            </div>
        </div>";
    }
} else {
    echo "0 results";
}
?>





				</div>
				<!-- Feture Row  #end -->

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
						<p>We're here to help. Send us an email or call us at  +91 9921003190.</p>
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