<?php
session_start();
require(__DIR__ . '/matbase.php');

if (isset($_SESSION['loger'])) {
    $loggedUserEmail = $_SESSION['loger'];

    $qry = "SELECT w.*, r.* FROM wedding w
            INNER JOIN request r ON w.picture = r.req_from
            WHERE r.em = :loggedUserEmail";

    $eee = $connect->prepare($qry);
    $eee->bindParam(':loggedUserEmail', $loggedUserEmail, PDO::PARAM_STR);
    $eee->execute();

    $profiles = $eee->fetchAll(PDO::FETCH_ASSOC);

    // Return the profiles as JSON
    echo json_encode($profiles);
} else {
    // Handle the case when the user is not logged in
    echo json_encode([]);
}
?>
