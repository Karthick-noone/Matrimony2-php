<?php
session_start();
require(__DIR__ . '/matbase.php');

if (isset($_POST['updob2'])) {
    $updob2 = $_POST['updob2'];
    $upreli2 = $_POST['upreli2'];
    $upmother2 = $_POST['upmother2'];
    $upemail2 = $_POST['upemail2'];
    $uppass2 = $_POST['uppass2'];

    // Check if the email already exists in the database
    $checkEmailQuery = $connect->prepare("SELECT COUNT(*) FROM wedding WHERE email = :email");
    $checkEmailQuery->bindParam(':email', $upemail2, PDO::PARAM_STR);
    $checkEmailQuery->execute();
    $emailExists = $checkEmailQuery->fetchColumn();

    if ($emailExists) {
        // Email already exists, do not update and display an error message
        echo "Email already exists. Please choose a different email.";
    } else {
        // Email is unique, proceed with the update
        $updateQuery = $connect->prepare("UPDATE wedding SET dob = :dob, religion = :religion, mother = :mother, email = :email, password = :password WHERE randmcd = :session");
        $updateQuery->bindParam(':dob', $updob2, PDO::PARAM_STR);
        $updateQuery->bindParam(':religion', $upreli2, PDO::PARAM_STR);
        $updateQuery->bindParam(':mother', $upmother2, PDO::PARAM_STR);
        $updateQuery->bindParam(':email', $upemail2, PDO::PARAM_STR);
        $updateQuery->bindParam(':password', $uppass2, PDO::PARAM_STR);
        $updateQuery->bindParam(':session', $_SESSION['sesno'], PDO::PARAM_STR);
        $updateQuery->execute();
        
        echo "success";
    }
}

?>