<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BXDEV - Bontang Web Development</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<!-- Icon -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/line-icons.css">
	<!-- Nivo Lightbox -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/nivo-lightbox.css">
	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
	<!-- Responsive Style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<!-- Plus -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/toastr.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> -->
	<!-- Part Style -->
	<!-- Main Style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/header.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/service.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/about.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/intro.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/sponsor.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/pricing.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/counter.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/contact.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/information.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/upcoming.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/footer.style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/preload.style.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!-- SECTION: HEADER -->
	<?php $this->load->view('part/header.part.php') ?>
	<!-- /SECTION: HEADER -->
	<!-- SECTION: TIMER -->
	<?php $this->load->view('part/timer.part.php') ?>
	<!-- /SECTION: TIMER -->
	<!-- SECTION: SERVICE -->
	<?php $this->load->view('part/service.part.php') ?>
	<!-- /SECTION: SERVICE -->
	<!-- SECTION: ABOUT -->
	<?php $this->load->view('part/about.part.php') ?>
	<!-- /SECTION: ABOUT -->
	<!-- SECTION: INTRO -->
	<?php $this->load->view('part/intro.part.php') ?>
	<!-- /SECTION: INTRO -->
	<!-- SECTION: SPONSOR -->
	<?php $this->load->view('draft/sponsor.part.php') ?>
	<!-- /SECTION: SPONSOR -->
	<!-- SECTION: PRICING -->
	<?php $this->load->view('part/pricing.part.php') ?>
	<!-- /SECTION: PRICING -->
	<!-- SECTION: COUNTER -->
	<?php $this->load->view('draft/counter.part.php') ?>
	<!-- /SECTION: COUNTER -->
	<!-- SECTION: CONTACT -->
	<?php $this->load->view('part/contact.part.php') ?>
	<!-- /SECTION: CONTACT -->
	<!-- SECTION: INFORMATION -->
	<?php $this->load->view('part/information.part.php') ?>
	<!-- /SECTION: INFORMATION -->
	<!-- SECTION: UPCOMING -->
	<?php $this->load->view('draft/upcoming.part.php') ?>
	<!-- /SECTION: UPCOMING -->
	<!-- SECTION: FOOTER -->
	<?php $this->load->view('part/footer.part.php') ?>
	<!-- /SECTION: FOOTER -->
	<!-- SECTION: POP UP EMAIL -->
	<?php $this->load->view('popup/email.popup.php') ?>
	<!-- /SECTION: POP UP EMAIL -->
	<!-- Go to Top Link -->
	<a href="#" class="back-to-top">
		<i class="lni-chevron-up"></i>
	</a>
	<?php $this->load->view('part/preload.part.php') ?>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.countdown.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.nav.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/nivo-lightbox.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/video.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/swiper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/toastr.min.js"></script>
	<!-- Start of Google Map Embed Code -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> -->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
	<script src="<?php echo base_url(); ?>assets/script/map.script.js"></script>
	<!-- End of Google Map Embed Code -->
	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6357888.js"></script>
	<!-- End of HubSpot Embed Code -->
	<script>
	//    featured slider
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		loop: true,
		slidesPerView: 'auto',
		effect: 'coverflow',
		grabCursor: true,
		centeredSlides: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		spaceBetween: 30,
		coverflow: {
			rotate: 5,
			stretch: 0,
			depth: 100,
			modifier: 3,
			slideShadows: false
		}
	});
	</script>
	<script>
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-top-right",
		"preventDuplicates": true,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}

	function handleStateChange() {
		var timeBadge = new Date().toTimeString().split(' ')[0];
		var state = navigator.onLine ? 'online' : 'offline';
		// Display an info toast with no title
		toastr.warning(`Connection state changed to: ${state} at ${timeBadge}`, 'Connection Status')
	}

	window.addEventListener('online', handleStateChange);
	window.addEventListener('offline', handleStateChange);
	</script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>