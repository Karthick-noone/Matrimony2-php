<?php
include('admin/passwordpage/class/database.php');
?>
<?php
   if(isset($_POST['vericode']))
   {
$code=$_POST['vericode'];
$abc=$connect->prepare("select * from otpverify where otp='$code'" );
$abc->execute();
$xxx=$abc->rowCount();

if($xxx==1)

{
    print "success";
   }
   else
   {
    print "invalid code";
   }
}
?>