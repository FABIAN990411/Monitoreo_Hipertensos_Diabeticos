<?php
session_start();
error_reporting(0);
include('../include/config.php');
include('include/checklogin.php');
check_login();
if (isset($_POST['submit'])) {

  $vid = $_GET['viewid'];
  $bp = $_POST['bp'];
  $bs = $_POST['bs'];
  $weight = $_POST['weight'];
  $temp = $_POST['temp'];
  $pres = $_POST['pres'];


  $query .= mysqli_query($con, "insert   tblmedicalhistory(PatientID,BloodPressure,BloodSugar,Weight,Temperature,MedicalPres)value('$vid','$bp','$bs','$weight','$temp','$pres')");
  if ($query) {
    echo '<script>alert("Se ha añadido él historia médico del paciente.")</script>';
    echo "<script>window.location.href ='manage-patient.php'</script>";
  } else {
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
  }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Médico | inf. paci</title>

  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
  <link href="../vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
  <link href="../vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
  <link href="../vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
  <link href="../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
  <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="screen">
  <link href="../vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
  <link href="../vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />
</head>

<body>
  <div id="app">
    <?php include('include/sidebar.php'); ?>
    <div class="app-content">
      <?php include('include/header.php'); ?>
      <div class="main-content">
        <div class="wrap-content container" id="container">
          <!-- start: PAGE TITLE -->
          <section id="page-title">
            <div class="row">
              <div class="col-sm-8">
                <h1 class="mainTitle">Médico</h1>
              </div>

            </div>
          </section>
          <?php include('../formatoVer.php'); ?>
          <p align="center">
                    <button class="btn btn-orange waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">agregar historial médico</button>
                </p>

                <?php  ?>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Medical History</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered table-hover data-tables">

                                    <form method="post" name="submit">

                                        <tr>
                                            <th>
                                                Presión sanguínea :</th>
                                            <td>
                                                <input name="bp" class="form-control wd-450" required="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Azúcar en la sangre :</th>
                                            <td>
                                                <input name="bs" class="form-control wd-450" required="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Peso :</th>
                                            <td>
                                                <input name="weight" class="form-control wd-450" required="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Temperatura corporal :</th>
                                            <td>
                                                <input name="temp" class="form-control wd-450" required="true">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Prescripción :</th>
                                            <td>
                                                <textarea name="pres" rows="12" cols="14" class="form-control wd-450" required="true"></textarea>
                                            </td>
                                        </tr>

                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" name="submit" class="btn btn-primary">Guardar</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- start: FOOTER -->
        <?php include('../include/footer.php'); ?>
        <!-- end: FOOTER -->

        <!-- start: SETTINGS -->
        <?php include('../include/setting.php'); ?>

        <!-- end: SETTINGS -->
      </div>
      <!-- start: MAIN JAVASCRIPTS -->
      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="../vendor/modernizr/modernizr.js"></script>
      <script src="../vendor/jquery-cookie/jquery.cookie.js"></script>
      <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="../vendor/switchery/switchery.min.js"></script>
      <!-- end: MAIN JAVASCRIPTS -->
      <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
      <script src="../vendor/maskedinput/jquery.maskedinput.min.js"></script>
      <script src="../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
      <script src="../vendor/autosize/autosize.min.js"></script>
      <script src="../vendor/selectFx/classie.js"></script>
      <script src="../vendor/selectFx/selectFx.js"></script>
      <script src="../vendor/select2/select2.min.js"></script>
      <script src="../vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="../vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
      <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
      <!-- start: CLIP-TWO JAVASCRIPTS -->
      <script src="assets/js/main.js"></script>
      <!-- start: JavaScript Event Handlers for this page -->
      <script src="assets/js/form-elements.js"></script>
      <script>
        jQuery(document).ready(function() {
          Main.init();
          FormElements.init();
        });
      </script>
      <!-- end: JavaScript Event Handlers for this page -->
      <!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>