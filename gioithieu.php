<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<title>Thế giới điện thoại</title>
	<link rel="shortcut icon" href="img/favicon.ico" />

	<!-- Load font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
	<!-- Jquery -->
	<script src="lib/Jquery/Jquery.min.js"></script>

	<!-- owl carousel libraries -->
	<link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="lib/owlcarousel/owl.theme.default.min.css">
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Sweet Alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<!-- Slider -->
	<link rel="stylesheet" href="lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="lib/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinHTML5.css">
	<script src="lib/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>

	<!-- tidio - live chat -->
	<!-- <script src="//code.tidio.co/bfiiplaaohclhqwes5xivoizqkq56guu.js"></script> -->

	<!-- our files -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/topnav.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/banner.css">
	<link rel="stylesheet" href="css/taikhoan.css">
	<link rel="stylesheet" href="css/trangchu.css">
	<link rel="stylesheet" href="css/home_products.css">
	<link rel="stylesheet" href="css/pagination_phantrang.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/gioithieu.css">
	<!-- js -->
	<script src="js/dungchung.js"></script>
	<script src="js/trangchu.js"></script>
    <?php require_once "php/echoHTML.php"; ?>
   
</head>

<body>
	<?php addTopNav(); ?>

	<section>
		<?php 
			addHeader(); 
			
		?>
    </section>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.791998149101!2d108.21181131468424!3d16.076279988876536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421847ff5a39c5%3A0x9c422e7cc0c6fa95!2zMzcgQ2FvIFRo4bqvbmcsIFRoYW5oIELDrG5oLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610611780316!5m2!1svi!2s"
         width="1200" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
	<?php
		addContainTaiKhoan();
		//addPlc();
	?>
	<div class="footer">
		<?php addFooter(); ?>
	</div>
	<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
	<i class="fa fa-arrow-down" id="goto-bot-page" onclick="gotoBot()"></i>
</body>
 
</html>