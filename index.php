<?php

session_start();
$page = "include/login.php";

if(!empty($_SESSION['clientid'])){
	header("location: Client");
}

if(isset($_GET['p']))
{
	$page = $_GET['p'];

	switch($page)
	{
		case "register.php":
			{
				$page = "register.php";
				break;
			}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "include/head.php"?>
</head>
<body>
	
	<div class="limiter">
		<?php include $page ?>
	</div>
	
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>