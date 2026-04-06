<!-- Footer Widget-->
<div class="footer-widget style-v2 section-pad-md">
	<div class="container">
		<div class="row">
			<div class="widget-row row">
				<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
					<!-- Each Widget -->
					<div class="wgs wgs-footer wgs-text">
						<div class="wgs-content">
							<p><img src="image/logo.png" srcset="image/logo.png 2x" alt=""></p>
							<p>INFSPL is a Business Growth Strategists and an Investment Banking Company providing services for StartUp, MSME & Large Enterprise.
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
							198 City Hub,<br>
							3rd Floor, Office No – 311,<br>
							Sankar Nanasaheb Karpe Rd,<br>
							Ganesh Peth, Pune-411002, Maharashtra, India
							<p style="margin: 10px 0;">
								<em class="fa fa-envelope-o" aria-hidden="true" style="margin-right: 8px;"></em>
								<a href="#" style="color: #1e566f">contact@infspl.com</a>
							</p>
							<p style="margin: 10px 0;">
								<em class="fa fa-phone" aria-hidden="true" style="margin-right: 8px;"></em>
								<span>+91 9921003190</span>
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
					<p>&copy; 2025 Intellectual Investments & Financial Services Pvt. Ltd. <a href="#">All Rights
							Reserved</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Copyright -->

<!-- Floating Call and WhatsApp Icons -->
<style>
	.floating-call-icon {
		position: fixed;
		right: 20px;
		bottom: 95px;
		width: 60px;
		height: 60px;
		background-color: #1e566f;
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
		cursor: pointer;
		transition: all 0.3s ease;
		text-decoration: none;
		z-index: 9999;
	}

	.floating-call-icon:hover {
		background-color: #164354;
		transform: scale(1.1);
		box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
	}

	.floating-call-icon i {
		color: #fff;
		font-size: 28px;
	}

	/* Adjust WhatsApp widget position to be below call icon and match size */
	#wh-widget-send-button {
		right: 20px !important;
		left: auto !important;
		bottom: 20px !important;
		position: fixed !important;
		z-index: 9998 !important;
		width: 40px !important;
		height: 40px !important;
	}
	
	/* Ensure WhatsApp button is properly positioned below call icon */
	body #wh-widget-send-button {
		right: 20px !important;
		left: auto !important;
		bottom: 20px !important;
		width: 60px !important;
		height: 60px !important;
	}
	
	/* Match WhatsApp button image size */
	#wh-widget-send-button img,
	#wh-widget-send-button svg {
		width: 60px !important;
		height: 60px !important;
	}
</style>

<a href="tel:+919921003190" class="floating-call-icon" title="Call Us">
	<i class="fa fa-phone" aria-hidden="true"></i>
</a>

<!-- WhatsApp Widget Script -->
<script type="text/javascript">
	(function () {
		var options = {
			whatsapp: "919921003190", // WhatsApp number
			call_to_action: "Message us", // Call to action
			position: "right", // Position changed to 'right'
		};
		var proto = document.location.protocol,
			host = "getbutton.io",
			url = proto + "//static." + host;
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.async = true;
		s.src = url + '/widget-send-button/js/init.js';
		s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
		var x = document.getElementsByTagName('script')[0];
		x.parentNode.insertBefore(s, x);
	})();
</script>

