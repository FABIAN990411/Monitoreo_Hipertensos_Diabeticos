<?php
session_start();
error_reporting(0);
include("../include/config.php");
if (isset($_POST['submit'])) {
	$ret = mysqli_query($con, "SELECT * FROM admin WHERE username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'");
	$num = mysqli_fetch_array($ret);
	if ($num > 0) {
		$extra = "dashboard.php"; //
		$_SESSION['login'] = $_POST['username'];
		$_SESSION['id'] = $num['id'];
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	} else {
		$_SESSION['errmsg'] = "Nombre de usuario o contraseña no válidos";
		$extra = "index.php";
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin-Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
	<link href="../vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/plugins.css">
	<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />
	<link rel="stylesheet" href="../assets/css/main.css">
</head>

<style>
	.login {

		background-size: 100% 100%;
		background-image: url("assets/images/admi.jpg");

	}
</style>

<body class="login">
	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">


			<div class="box-login">
				<form class="form-login" method="post">
					<h3 class="k">
						<FONT COLOR="white">
							<center>LOGIN ADMINISTRADOR</center>

					</h3>

					<fieldset>

						<p>
							<FONT COLOR="black"> Por favor ingrese su usuario y contraseña para iniciar sesión.<br />
								<span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg'] = ""); ?></span>
						</p>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Usuario">
								<i class="fa fa-user"style="color:orange"></i> </span>

						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Contraseña">
								<i class="fa fa-lock"style="color:orange"></i>
							</span>
						</div>
						<div class="form-actions">

							<button type="submit" class="btn btn-orange pull-right" name="submit">
								Regìstrate <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>

					</fieldset>
				</form>

				<div class="copyright">
					&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Unicor</span>. <span>All rights reserved</span>
				</div>

			</div>

		</div>
	</div>
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/modernizr/modernizr.js"></script>
	<script src="../vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="../vendor/switchery/switchery.min.js"></script>
	<script src="../vendor/jquery-validation/jquery.validate.min.js"></script>

	<script src="assets/js/main.js"></script>

	<script src="assets/js/login.js"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			Login.init();
		});
	</script>

</body>
<!-- end: BODY -->


</html>
<br><br><br><br><br>
<?php
include "include/footer2.php";
?>