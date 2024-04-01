<?php
session_start();
require(__DIR__ . '/matbase.php');
// if(isset($_POST['reid']))
// {
//     $em=$_POST['em'];
// 	$id=$_POST['reid'];

// 	$res=$connect->prepare("insert into request values('','$em','$id')");
// 	$res->execute();
// 	print "success";
// 	}	

if (isset($_POST['reid'])) {
	$em = $_POST['em'];
	$id = $_POST['reid'];

	$checkRequest = $connect->prepare("SELECT * FROM request WHERE req_from=:em AND req_to=:id");
	$checkRequest->bindParam(':em', $em);
	$checkRequest->bindParam(':id', $id);
	$checkRequest->execute();

	if ($checkRequest->rowCount() > 0) {
		print "You have already requested for this profile.";
	} else {
		$res = $connect->prepare("insert into request values('', '$em', '$id','NULL')");
		$res->execute();
		print "Request submitted successfully!";
	
	}
}

if(isset($_POST['ss11'])){
	$ss1=$_POST['ss11'];
	$ss2=$_POST['ss22'];
	$ss3=$_POST['ss33'];
	$ss4=$_POST['ss44'];
	$ss5=$_POST['ss55'];
	$ss6=$_POST['ss66'];
	$ss7=$_POST['ss77'];
	$updtid=$_POST['updtid'];
	
	$fnc=$connect->prepare("UPDATE wedding SET name='$ss1',gender='$ss2',dob='$ss3',mobile='$ss4',email='$ss5',occupation='$ss6',state='$ss7' where  id='$updtid'");
	$fnc->execute();
	print "update successfully";
	
	}
?>
