<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">

            <?php
            $vid = $_GET['viewid'];
            $ret = mysqli_query($con, "select * from tblpatient where ID='$vid'");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {
            ?>
                <table border="1" class="table table-bordered">
                    <tr align="center">
                        <td colspan="4" style="font-size:20px;color:blue">
                            Información del paciente</td>
                    </tr>

                    <tr>
                        <th scope>Nombre</th>
                        <td><?php echo $row['PatientName']; ?></td>
                        <th scope>Correo</th>
                        <td><?php echo $row['PatientEmail']; ?></td>
                    </tr>
                    <tr>
                        <th scope>Telefono</th>
                        <td><?php echo $row['PatientContno']; ?></td>
                        <th>Dirección</th>
                        <td><?php echo $row['PatientAdd']; ?></td>
                    </tr>
                    <tr>
                        <th>Sexo </th>
                        <td><?php echo $row['PatientGender']; ?></td>
                        <th>Edad</th>
                        <td><?php echo $row['PatientAge']; ?></td>
                    </tr>
                    <tr>

                        <th>Antecedentes Médicos</th>
                        <td><?php echo $row['PatientMedhis']; ?></td>
                        <th>Fecha de creación</th>
                        <td><?php echo $row['CreationDate']; ?></td>
                    </tr>

                <?php } ?>
                </table>
                <?php

                $ret = mysqli_query($con, "select * from tblmedicalhistory  where PatientID='$vid'");



                ?>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <tr align="center">
                        <th colspan="8">Medical History</th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Presión sanguínea</th>
                        <th>
                            Peso</th>
                        <th>Azúcar en la sangre</th>
                        <th>Temperatura corporal</th>
                        <th>
                            Prescripción médica</th>
                        <th>Fecha </th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                        <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['BloodPressure']; ?></td>
                            <td><?php echo $row['Weight']; ?></td>
                            <td><?php echo $row['BloodSugar']; ?></td>
                            <td><?php echo $row['Temperature']; ?></td>
                            <td><?php echo $row['MedicalPres']; ?></td>
                            <td><?php echo $row['CreationDate']; ?></td>
                        </tr>
                    <?php $cnt = $cnt + 1;
                    } ?>
                </table>

        
        </div>
    </div>
</div>