<?php
require(__DIR__.'/../../../../class/database.php');
if(isset($_POST['oldpassword']))
{
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpasswords'];
$confirmpassword=$_POST['confirmpwd'];
$xyz=$connect->prepare("select * from adminlogin where password='$oldpassword'");
$xyz->execute();
$aaa=$xyz->rowCount();
if($aaa>0)
{   
    if($confirmpassword==$newpassword)
    {

   
    $abc=$connect->prepare("update adminlogin SET password='$newpassword' WHERE password='$oldpassword'");
    $abc->execute();

    print "successful";
}
else if($oldpassword != $oldpassword)
{
    $abc=$connect->prepare("select * from adminlogin where password='$oldpassword'");
    $abc->execute();
    
    print "old password not match";
}

else
{
    print "new password not match";
}
}
else
{
    print " old psw not match";
}

}


?> 