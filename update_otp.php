<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matrimonyyy";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['otp']) && isset($_SESSION['sesno'])) {
    $otp = mysqli_real_escape_string($conn, $_POST['otp']);
    $sesno = $_SESSION['sesno'];

    $sql = "UPDATE wedding SET otp = '$otp' WHERE randmcd = '$sesno'";

    if ($conn->query($sql) === TRUE) {
        echo "OTP stored in the database.";
    } else {
        echo "Error updating OTP: " . $conn->error;
    }
}

$conn->close();
?>
