<?php
session_start();
require(__DIR__ . '/matbase.php');
if(isset($_POST['cocaste2']))
{
	$cocaste2=$_POST['cocaste2'];
	$cosub2=$_POST['cosub2'];
	$cogoth2=$_POST['cogoth2'];
	$cosuddha2=$_POST['cosuddha2'];
	$res=$connect->prepare("update wedding set caste='$cocaste2',subcaste='$cosub2',gothram='$cogoth2',suddha='$cosuddha2' where randmcd='$_SESSION[sesno]'");
	$res->execute();
	print "success";
	}	
?>