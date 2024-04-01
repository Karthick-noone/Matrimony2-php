<?php
session_start();
require(__DIR__ . '/matbase.php');
if (isset($_POST['profile2'])) {
	$profile2 = $_POST['profile2'];
	$name2 = $_POST['name2'];
	$gender2 = $_POST['gender2'];
	$mobile2 = $_POST['mobile2'];
	$randomno=substr(str_shuffle('1234567890abcdefghijklmopqrstuvwxyz'),0,9);
	$res=$connect->prepare("insert into wedding values ('','$profile2','$name2','$gender2','$mobile2','2023-11-12','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','$randomno')");
	$res->execute();
	 $_SESSION['sesno']=$randomno;
	print "success";
}

?>