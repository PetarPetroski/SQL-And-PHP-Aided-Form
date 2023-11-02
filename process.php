<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of Health Form</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">

        <h1>
            House of Health Form
        </h1>


        <?php
        require 'connect.php';
        ?>
        <section class="buttons">
            <button id="receptionistsButton">Show Receptionists</button>
            <button id="patientsButton">Show Patients</button>
            <button id="medicalRecordsButton">Show Medical Records</button>
            <button id="appointmentsButton">Show Appointments</button>
        </section>
    </div>

    <script src="script.js"></script>
</body>

</html>