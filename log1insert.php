<?php
session_start();
require(__DIR__ . '/matbase.php');

if (isset($_POST['usna2'])) {
    $usr = $_POST['usna2'];
    $pwd = $_POST['pwd2'];
    
    $res = $connect->prepare("select * from wedding where email = :usr and password = :pwd");
    $res->bindParam(':usr', $usr);
    $res->bindParam(':pwd', $pwd);
    $res->execute();
    
    $row = $res->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Check if the 'otp' field in the database has a value
        if (!empty($row['otp'])) {
            $_SESSION['loger'] = $usr;
            print "success";
        } else {
            print "Login unsuccessful.Verify Your Number.";
        }
    } else {
        print "Invalid username and password";
    }
}
?>
