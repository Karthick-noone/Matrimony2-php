<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
   .card {
    box-shadow: 1px 2px 10px 5px rgba(20,20,20,0.2);
}

.btnnn{
  border: none;
  padding: 10px;
  background-color: transparent;
  font-size: 20px;
  border-radius: 10px;
  transition-duration: 0.6s;

}
.btnnn:hover{
  background-color: #C3C4C9;
  box-shadow: 1px 2px 10px 5px rgba(20,20,20,0.1);
}
.btn:hover{
  background-color: #C3C4C9;
  box-shadow: 1px 2px 10px 5px rgba(20,20,20,0.1);
}
.btnnn2 {
    border: none;
    padding: 10px;
    background-color: transparent;
    font-size: 20px;
    border-radius: 10px;
    transition-duration: 0.6s;
  }

  .btnnn2:hover {
    background-color: #C3C4C9;
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.1);
  }
.sidebar {
    top: 0;
    left: 0;
    background-color: #ffffff;
    padding-top: 20px;
    overflow-y: auto;
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.1);

    /* Add scroll for long content */
  }

  /* Style the links in the sidebar */
  .sidebar a {
    padding: 14px;
    text-align: left;
    color: black;
    text-decoration: none;
    font-size: 18px;
    display: block;
    border-radius: 10px;
  }

  /* Change the color of links on hover */
  .sidebar a:hover {
    background-color: #cfe2ff;
    font-size: 20px;
  }
  .brgr{
    display:none;
  }
  .remov{
    display:none;
  }
  @media screen and (max-width:920px) {
     
.sidebar{
  display:none;
  width:100%

}
.brgr{
  display:block;
}
.btnnn {
    border: none;
    background-color: transparent;
    font-size: 10px;
    border-radius: 5px;
    transition-duration: 0.6s;
    display:none;
  }
  .btnnn2 {
    border: none;
    background-color: transparent;
    font-size: 10px;
    border-radius: 5px;
    transition-duration: 0.6s;
    display:none;
  }
}
/* @media screen (max-width:500px){
  

.logo{
    width: 40px;
  }
} */
@media screen and (min-width:700px) {

.btnnn2 {
  border: none;
  background-color: transparent;
  font-size: 10px;
  border-radius: 5px;
  transition-duration: 0.6s;
  display:none;
}
}
  
</style>
<script>
  function men(){
document.getElementById("sidebar").style.display="block";
document.getElementById("nvbtn").style.display="block";
document.getElementById("nvbtn1").style.display="block";
document.getElementById("nvbtn2").style.display="block";
document.getElementById("rmv").style.display="block";
document.getElementById("mnu").style.display="none";
  }
  function rem(){
document.getElementById("sidebar").style.display="none";
document.getElementById("nvbtn").style.display="none";
document.getElementById("nvbtn1").style.display="none";
document.getElementById("nvbtn2").style.display="none";
document.getElementById("rmv").style.display="none";
document.getElementById("mnu").style.display="block";
  }
  </script>
<body>  <?php
  require(__DIR__ . '/matbase.php');


  if (!isset($_SESSION['loger'])) {
    ?>
    <script>
      window.location.href = "index.php";
    </script>
    <?php
  }



  if (isset($_GET['idxyz'])) {
    $qry = "select * from wedding where id='$_GET[idxyz]'";
  } else {
    $qry = "select * from wedding where email='$_SESSION[loger]'";
  }
  $eee = $connect->prepare($qry);
  $eee->execute();
  $sss = $eee->fetchAll();
  foreach ($sss as $sss2)

    $logpersonemail = $_SESSION['loger'];

  ?>
  <div class="container-fluid">
    <div class="row bg-primary-subtle hd">
      <div class="nav-scroller mb-3 mt-3">
        <img src="  img/tek_matrimony_logo.png" style="background-color: transparent; width: 150px" ; />
        <nav class="nav float-end" style="">
          <a href="admin8.php"> <button class="m-3 btnnn"><img src="img/left-arrows.png" width="20px" alt="">
          Back</button> </a>
          <a href="chnpass.php"><button class="m-3 btnnn"><img src="img/lock.png" width="20px" alt="">Change Password</button></a>
          <a href="index.php?xyz"><button class="m-3 btnnn"><img src="img/turn-off.png" width="20px"
                alt="">Logout</button></a>
                <div><button class="btn brgr" onclick="men()" id="mnu"><img src="img/menu.png" width="20px"></button>
                <button class="btn remov"  onclick="rem()" id="rmv"><img src="img/remove.png" width="20px"></button></div>

</nav>
<div class="nav">
        <a href="admin8.php"  style="text-decoration:none;"> <button id="nvbtn" class="m-3 btnnn2"><img src="img/left-arrows.png" width="20px" alt="">
          Back</button> </a>
          <a href="chnpass.php"  style="text-decoration:none;"><button id="nvbtn1" class="m-3 btnnn2"><img src="img/lock.png" width="20px" alt=""  style="text-decoration:none;">Change Password</button></a>
          <a href="index.php?xyz"  style="text-decoration:none;"><button id="nvbtn2" class="m-3 btnnn2"><img src="img/turn-off.png" width="20px"
                alt="">Logout</button></a></div>
      </div>
    </div>
  </div>

    
    <div class="container-fluid">
  <div class="row">
      <!-- Sidebar -->
      <div id="sidebar" class="sidebar col-md-2 col-xl-2 rounded">

      <div class="col-md-3 d-flex">
          <div>
          <img class="rounded-circle  mx-2" src="img/<?php print $sss2['picture']; ?>"  alt="" width="40px" height="40px" style="border-radius: 5px;" >
    </div>
    <div><h4 class="my-2 mx-2"><?php print $sss2['name']; ?></h4></div>
          
        </div>
        <hr>

        <a href="admin8.php"> <img src="img/icons8-home-32.png" width="20px">&nbsp;&nbsp;Home</a>
        <a href="aboutme.php"> <img src="img/icons8-more-info-32.png" width="20px">&nbsp;&nbsp;About</a>
        <a href="suggest.php"> <img src="img/suggestion.png" width="20px">&nbsp;&nbsp;Suggestion</a>
        <a href="request.php"> <img src="img/customer.png" width="20px">&nbsp;&nbsp;Requests</a>
        <a href="sendrqst.php"> <img src="img/add-user.png" width="20px">&nbsp;&nbsp;Send Requests</a>
        <a href="view11.php"> <img src="img/edit.png" width="20px">&nbsp;&nbsp;Edit profile</a>
        <a href="uploto1.php"> <img src="img/icons8-photo-editor-50.png" width="20px">&nbsp;&nbsp;Edit Photo</a>
      </div>

      <div class="col-lg-12 col-md-6 col-sm-2 col-xl-9 m-3 rounded">
       


    
        <div class="col-md-4">
      

          <?php

          $res = $connect->prepare("SELECT * FROM `request` WHERE `req_from`='$logpersonemail' and `req_to`='$sss2[email]'");
          $res->execute();
          while ($requestedProfile = $res->fetch()) {
            ?>

            <p><b> Status : </b>
              <?php print $requestedProfile['status'] ?>
            </p>

            <?php
          }
          ?>
          </div>


        
        <!-- <div class="col-md-4">
          <img src="img/<?php print $sss2['picture']; ?>" width="200px" height="200px" class="rounded-circle " />
        </div>
        <div class="col-md-4">
          <p><b> Name : </b>
            <?php print $sss2['name']; ?>
          </p>
          <p><b> Gender : </b>
            <?php print $sss2['gender']; ?>
          </p>
          <p><b> Date Of Birth : </b>
            <?php print $sss2['dob']; ?>
          </p>
          <p><b> Mobile No : </b>
            <?php print $sss2['mobile']; ?>
          </p>
          <p><b>Email I'd : </b>
            <?php print $sss2['email']; ?>
          </p>
        </div> -->

        <div class="text-center mt-2 mx-2">
      <h1 class="display-5">About  <?php print $sss2['name']; ?></h1>
    </div>       

      
        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12 grid-margin stretch-card mx-5"><br>
          <div class="card">
            <div class="card-body">
              <div class="container">
                <div>
                  <h2 class="text-center">See how well your profile matches his preference</h2>
                </div>
                <hr>
                <div class="row">

                <div class=" col-md-3">
          <img class="card-img-top my-3 mx-1 rounded-circle" src="img/<?php print $sss2['picture']; ?>"  alt="Card image cap" width="200px" height="300px" style="border-radius: 5px;" >
        </div>

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-4">
                    <h3>About him/her</h3><br>
                    <p><b>Family Status : </b>
                      <?php print $sss2['famstatus']; ?><br>
                    </p>
                    <p><b>Family type : </b>
                      <?php print $sss2['famtype']; ?><br>
                    </p>
                    <p><b>Family value : </b>
                      <?php print $sss2['famvalue']; ?><br>
                    </p>
                    <p><b>Any Disability : </b>
                      <?php print $sss2['disability']; ?>
                    </p>
                  </div>


                  <br>

                  <div class="col-md-4">
                    <h3>His religious preferences</h3><br>
                    <table class="f">
                      <p><b>Religion : </b>
                        <?php print $sss2['religion']; ?>
                      </p>
                      <p><b>Caste : </b>
                        <?php print $sss2['caste']; ?>
                      </p>
                      <p><b>Subcaste : </b>
                        <?php print $sss2['subcaste']; ?>
                      </p>
                      <p><b>Suddhajadhagam : </b>
                        <?php print $sss2['suddha']; ?>
                      </p>

                    </table>
                  </div>

                 
                  <div class="row">
                    
                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;       
                <div class="col-md-3">
                      <h3><i class="mdi mdi-tie"></i> His professional details</h3><br>
                      <p><b>Occupation : </b>
                        <?php print $sss2['occupation']; ?>
                      </p>
                      <p><b>Employed in : </b>
                        <?php print $sss2['employed']; ?>
                      </p>
                      <p><b>Work Location : </b>
                        <?php print $sss2['location']; ?>
                      </p>
                      <p><b>Annual Income : </b>
                        <?php print $sss2['amount']; ?>
                      </p>
                    </div>
                    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    <div class="col-md-3">
                      <h3>His basic preferences</h3><br>


                      <p><b>Marrital status : </b>
                        <?php print $sss2['marital']; ?>
                      </p>
                      <p><b>Mother tongue : </b>
                        <?php print $sss2['mother']; ?>
                      </p>
                      <p><b>Physical status : </b>
                        <?php print $sss2['disability']; ?>
                      </p>


                    </div>
                  </div>
                  </div>
                  <script>

                    let requestSent = false;

                    function req(logem, reqprsnid) {
                      if (!requestSent) {
                        $.ajax({
                          url: "view10insert.php",
                          data: { em: logem, reid: reqprsnid },
                          type: "POST",
                          success: function (submit) {
                            alert(submit);
                            window.location.href = "admin8.php";
                          },
                          error: function () {
                            alert("Error occurred during the request.");
                          }
                        });
                        requestSent = true;
                      }
                    }

                    function edt(id){
                      document.getElementById("e1"+id).style.display="block";
                      document.getElementById("e2"+id).style.display="block";
                      document.getElementById("e3"+id).style.display="block";
                      document.getElementById("e4"+id).style.display="block";
                      document.getElementById("e5"+id).style.display="block";
                      document.getElementById("e6"+id).style.display="block";
                      document.getElementById("e7"+id).style.display="block";
                      document.getElementById("e8"+id).style.display="block";
                      document.getElementById("vv2"+id).style.display="block";
                      document.getElementById("vv1"+id).style.display="none";
                  

                    }
                    function svt(id){
                      document.getElementById("e1"+id).style.display="none";
                      document.getElementById("e2"+id).style.display="none";
                      document.getElementById("e3"+id).style.display="none";
                      document.getElementById("e4"+id).style.display="none";
                      document.getElementById("e5"+id).style.display="none";
                      document.getElementById("e6"+id).style.display="none";
                      document.getElementById("e7"+id).style.display="none";
                      document.getElementById("e8"+id).style.display="none";
                      document.getElementById("vv2"+id).style.display="none";
                      document.getElementById("vv1"+id).style.display="block";
                  
                     var ss1 = document.getElementById("e1" + id).value || document.getElementById("li1" + id).innerHTML;
  var ss2 = document.getElementById("e2" + id).value || document.getElementById("li2" + id).innerHTML;
  var ss3 = document.getElementById("e3" + id).value || document.getElementById("li3" + id).innerHTML;
  var ss4 = document.getElementById("e4" + id).value || document.getElementById("li4" + id).innerHTML;
  var ss5 = document.getElementById("e5" + id).value || document.getElementById("li5" + id).innerHTML;
  var ss6 = document.getElementById("e6" + id).value || document.getElementById("li6" + id).innerHTML;
  var ss7 = document.getElementById("e7" + id).value || document.getElementById("li7" + id).innerHTML;

$.ajax({
url:"view10insert.php",
data:{
  // alert(ss2);
ss11:ss1,
ss22:ss2,
ss33:ss3,
ss44:ss4,
ss55:ss5,
ss66:ss6,
ss77:ss7,
updtid:id
},
type:'POST',
success:function(alert){
alert(alert);
}

});


}



                  </script>


                </div>
              </div>
            </div>
          </div>
        </div>
      
</div>
</div>
    </div>
  <?php
  include('footer1.php');
  ?>  
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>