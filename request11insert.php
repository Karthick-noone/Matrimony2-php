<?php
session_start();
require(__DIR__ . '/matbase.php');

if (isset($_POST['upacc2'])) {
    $upacc2 = $_POST['upacc2'];
	$statuspodravanga = $_POST['statuspodravanga1'];
	$yaarukpodranga = $_POST['yaarukpodranga1'];


    $res = $connect->prepare("UPDATE request SET status = '$upacc2' WHERE req_from='$statuspodravanga' and req_to='$yaarukpodranga'");
    if ($res->execute()) {
        echo "Accepted successfully";
    } else {
        echo "Error occurred during the request.";
    }
} 

if (isset($_POST['uprej2'])) {
    $uprej2 = $_POST['uprej2'];
    $upaaa2 = $_POST['upaaa2'];
    $upbbb2 = $_POST['upbbb2'];

    $res = $connect->prepare("UPDATE request SET status = :status WHERE req_from = :req_from AND req_to = :req_to");
    
    $res->bindParam(':status', $uprej2);
    $res->bindParam(':req_from', $upaaa2);
    $res->bindParam(':req_to', $upbbb2);

    if ($res->execute()) {
        echo "Rejected successfully";
    } else {
        echo "Error occurred during the request.";
    }
}

?>
