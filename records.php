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
        $query = "SELECT * FROM MedicalRecords";
        $result = mysqli_query($con, $query);

        echo "<table border='1'>
    <tr>
    <th>Patient's ID</th>
    <th>Date of Birth</th>
    <th>Age</th>
    <th>Address</th>
    <th>Phone Number</th>
    <th>Shots Given</th>
    <th>Illnesses</th>
    </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['PatientID'] . "</td>";
            echo "<td>" . $row['DateOfBirth'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['PhoneNumber'] . "</td>";
            echo "<td>" . $row['ShotsGiven'] . "</td>";
            echo "<td>" . $row['Illnesses'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        // Close the database connection
        mysqli_close($con);
        ?>
    </div>
    <section class="buttons">
        <button class="homeButton">Home</button>
    </section>
    <script src="script.js"></script>
</body>

</html>