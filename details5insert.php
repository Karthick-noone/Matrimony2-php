<?php
 session_start();
require(__DIR__ . '/matbase.php');
if(isset($_POST['uphedu2']))
{
	$uphedu2=$_POST['uphedu2'];
	$upeduca2=$_POST['upeduca2'];
	$upemploye2=$_POST['upemploye2'];
	$upoccupa2=$_POST['upoccupa2'];
	$upmoney2=$_POST['upmoney2'];
    $upannual2=$_POST['upannual2'];
    $upwork2=$_POST['upwork2'];
    $upstate2=$_POST['upstate2'];

	$res=$connect->prepare("update wedding set highestedu='$uphedu2',education='$upeduca2',employed='$upemploye2',occupation='$upoccupa2',annual='$upmoney2',amount='$upannual2',location='$upwork2',state='$upstate2' where randmcd='$_SESSION[sesno]'");
	$res->execute();

	print "success";
	}	
?>