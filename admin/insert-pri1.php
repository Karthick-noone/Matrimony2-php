
<?php
session_start();
require(__DIR__.'/passwordpage/class/database.php');
if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $psw=$_POST['password'];
    $abc=$connect->prepare("select * from adminlogin where name='$uname'and password='$psw'");
    $abc->execute();
    $num=$abc->rowcount();
	if($num>0)
	{
		$_SESSION['admin']=$uname;
		print "success";
	}
	else
	{
		print "Invalid username and password";
	}
}	

?>