<?php
session_start();
include "../config.php";

$page = "home.php";

if(!empty($_SESSION['clientid'])){

	$clientid = $_SESSION['clientid'];
	$sql = "SELECT * FROM tbl_users WHERE id = '$clientid'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
}
else{
	header("location: ../index.php");
}

if(isset($_GET['p'])){
	$page = $_GET['p'];

	switch($page){
		case "about.php":
			{
				$page = "about.php";
				break;
			}
		
		case "cart.php":
			{
				$page = "cart.php";
				break;
			}
		case "contact.php":
			{
				$page = "contact.php";
				break;
			}
	}
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php include "include/head.php" ?>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<?php include "include/navbar.php"?>
		</nav>

		<!-- Slider -->

		<!-- Slider -->
		
		<!--Main Page-->

		<!--Main Page-->
		<?php include $page ?>
		<!-- Footer -->
		<?php include "include/footer.php" ?>
		<!-- Footer -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

