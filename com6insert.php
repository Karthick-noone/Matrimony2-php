<?php
session_start();
require(__DIR__ . '/matbase.php');
if(isset($_POST['uptext2']))
{
	$uptext2=$_POST['uptext2'];
	

	$res=$connect->prepare("update wedding set comments='$uptext2' where randmcd='$_SESSION[sesno]'");
	$res->execute();

	print "success";
	}	
?>