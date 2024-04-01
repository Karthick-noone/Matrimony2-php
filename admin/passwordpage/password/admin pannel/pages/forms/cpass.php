<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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

if(!isset($_SESSION['loger']))
      {
        ?>
        <script>
          window.location.href = "index.php";
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
                          url:"pass.php",
                          data:{oldpassword : oldpassword,newpasswords : newpassword,confirmpwd : confirmpassword,},
                              type:'POST',
                              success:function(result)
                              {
                                alert(result);
                                
                                if(result == "successful")
                                {
                                  window.location.href="/../../../../../../login.php";
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
            <button type="button"><a href="../../../../../../admin8.php"  style="text-decoration:none;">back</a></button>&nbsp; &nbsp;
            <button type="button"  > Change Password</button>&nbsp; &nbsp;
            <button type="button" ><a href="../../../../../adlogin.php?id=logout">Logout</a></button>
            
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
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Changing the Password</h4>
                  <form class="forms-sample" >

  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Old Password</label>
                      <input type="password" class="form-control" placeholder="Old pwd" id="oldpassword">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" class="form-control"  placeholder="New pwd" id="newpassword" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm New Password</label>
                      <input type="password" class="form-control"  placeholder="confirm pwd" id="confirmpwd">
                    </div>
                 
                    <button type="button" class="btn btn-primary mr-2"  onclick="xyz()" >Change</button>
                    
                    <a class="btn btn-light" href="../../../../../../admin8.php">Cancel</a>
                   
                   <span style="color:green" id="successmsg"></span>
                   <span style="color:red" id="errormsg"></span>
                    


                    
                  </form>
                </div>
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
