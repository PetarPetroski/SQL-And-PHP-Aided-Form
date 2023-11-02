function attachEventListeners() {
    document.getElementById("receptionistsButton").addEventListener("click", function () {
        window.location.href = "receptionist.php";
    });

    document.getElementById("patientsButton").addEventListener("click", function () {
        window.location.href = "patients.php";
    });

    document.getElementById("medicalRecordsButton").addEventListener("click", function () {
        window.location.href = "records.php";
    });

    document.getElementById("appointmentsButton").addEventListener("click", function () {
        window.location.href = "appointments.php";
    });

    var homeButtons = document.getElementsByClassName("homeButton");
    for (var i = 0; i < homeButtons.length; i++) {
        homeButtons[i].addEventListener("click", function () {
            window.location.href = "process.php";
        });
    }
}

document.addEventListener("DOMContentLoaded", attachEventListeners);
