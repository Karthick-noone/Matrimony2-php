<?php
session_start();
require(__DIR__ . '/matbase.php');
if(isset($_POST['upmrgstatus2']))
{
	$upmrgstatus2=$_POST['upmrgstatus2'];
	$upnofchil2=$_POST['upnofchil2'];
	$upchilsta2=$_POST['upchilsta2'];
	$upfamsta2=$_POST['upfamsta2'];
	$upfamty2=$_POST['upfamty2'];
    $upfamval2=$_POST['upfamval2'];
    $upany2=$_POST['upany2'];

	$res=$connect->prepare("update wedding set marital='$upmrgstatus2',childrens='$upnofchil2',living='$upchilsta2',famstatus='$upfamsta2',famtype='$upfamty2',famvalue='$upfamval2',disability='$upany2' where randmcd='$_SESSION[sesno]'");
	$res->execute();

	print "success";
	}	
?>