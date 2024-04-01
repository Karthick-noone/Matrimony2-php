<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <!-- <link rel="stylesheet" href="../../vendors/typicons/typicons.css"> -->
  <!-- <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css"> -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- <link rel="stylesheet" href="../../vendors/select2/select2.min.css"> -->
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">   <!--X -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <script src="/../../../js/jquery-1.8.2.min.js" ></script>
</head>

<body>


<?php
session_start();

if(! isset($_SESSION['mat'])and $_SESSION['mat']!=="xyz")
{
  ?>
  <script>
  window.location.href="/../../project/adminlogin/login.php";
  </script>
  <?php
}

?>


<script>
                      function xyz()
                      {
                        var oldpassword=document.getElementById("oldpassword").value;
                        var newpassword=document.getElementById("newpassword").value;
                        var confirmpassword=document.getElementById("confirmpwd").value;
                        $.ajax({
                          url:"password.php",
                          data:{oldpassword : oldpassword,newpasswords : newpassword,confirmpwd : confirmpassword,},
                              type:'POST',
                              success:function(result)
                              {
                                alert(result);
                                
                                if(result == "successful")
                                {
                                  document.getElementById("successmsg").innerHTML="Password change successfully";
                                }
                                else
                                {
                                  
                                }
                              }
                        });
                      }
                      </script>








  <div class="container-scroller">
  
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <div>
           
            <a href="change password.php"><button type="button">Change Password</button></a>&nbsp; &nbsp;
            <button type="button" ><a href="../../../../../../login.php?id=logout">Logout</a></button>
            </div>            
          </li>          
        </ul>
        
      </div>
    </nav>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper " >
            <div class="main-panel ">        
        <div class="content-wrapper">
          <div class="row" style="margin-left:300px;">
            <div class="col-md-12 grid-margin stretch-card">
              <!-- <div class="card">
                <div class="card-body">
                  <h4 class="card-title">welcome</h4>
                 
                </div> -->
                <h3>Welcome...</h3>
                <!-- <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>For</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Mothertongue</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                     <tr>
                     <?php 
//              require(__DIR__ .'/class/database.php');
// $eee3=$connect->prepare("select * from reg1");
// $eee3->execute();
// $sss3=$eee3->FetchAll();
// foreach($sss3 as $sssk)
// {
//  print $sss3['Name'];
// }?>
                        

                    </tr>
                    </tbody>
                    </tabel> -->

              </div>
            </div>            
                
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <!-- container-scroller -->
  <!-- base:js -->
  <!-- <script src="../../vendors/js/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- inject:js -->
  <!-- <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script> -->
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script> -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>
