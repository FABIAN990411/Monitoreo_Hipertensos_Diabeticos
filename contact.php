<?php
include_once('hms/include/config.php');
if (isset($_POST['submit'])) {
	$name = $_POST['fullname'];
	$email = $_POST['emailid'];
	$mobileno = $_POST['mobileno'];
	$dscrption = $_POST['description'];
	$query = mysqli_query($con, "insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
	echo "<script>alert('Your information succesfully submitted');</script>";
	echo "<script>window.location.href ='contact.php'</script>";
}


?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Contacto</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>


</head>

<body>
	<!--start-wrap-->

	<!--start-header-->
	<div class="header">
		<div class="wrap">
			<!--start-logo-->
			<div class="logo">
				<a href="index.html" style="font-size: 30px; color:orange">FONDO DE SALUD UNIVERSIDAD DE CÓRDOBA</a>
			</div>
			<!--end-logo-->
			<!--start-top-nav-->
			<div class="form-actions">

				<br>

				<div class="top-nav">
					<a class="btn btn-orange " href="index.php" role="button">Inicio </a>
				</div>

				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
		<div class="wrap">
			<div class="contact">
				<div class="section group">
					<div class="col span_1_of_3">

						<div class="company_address">
							<h2>medios de contactos:</h2>
							<p>Carrera 6 No. 77- 305 </p>
							<p>Montería - Córdoba, Colombia</p>
							<p>Telefono:(+57) 00000000</p>
							<p>Correo: <span> contacto@correo.unicordoba.edu.co</span></p>

						</div>
					</div>
					<div class="col span_2_of_3">
						<div class="contact-form">
							<h2>Contacte con nosotros</h2>
							<form name="contactus" method="post">
								<div>
									<span><label>Nombre completo</label></span>
									<span><input type="text" name="fullname" required="true" value=""></span>
								</div>
								<div>
									<span><label>Correo</label></span>
									<span><input type="email" name="emailid" required="ture" value=""></span>
								</div>
								<div>
									<span><label>Telefono</label></span>
									<span><input type="text" name="mobileno" required="true" value=""></span>
								</div>
								<div>
									<span><label>Mensaje</label></span>
									<span><textarea name="description" required="true"> </textarea></span>
								</div>
								<div>
									<span><input type="submit" name="submit" value="Enviar"></span>
								</div>

							</form>

						</div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
		<div class="footer">
			<div class="wrap">
				<div class="footer-left">
					<ul>
						<li><a href="index.php">Home</a></li>

						<li><a href="contact.php">contact</a></li>
					</ul>
				</div>

				<div class="clear"> </div>
			</div>
		</div>
		<!--end-wrap-->
</body>

</html>