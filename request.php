<?php
session_start();
require(__DIR__ . '/matbase.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<style>
  .card {
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.3);
    padding: 0px;
  transition: transform 0.3s, box-shadow 0.3s;
  /* Add transitions for transform and box-shadow */  
  }
  .card:hover {
  transform: scale(1.05); /* Increase the scale on hover */
  box-shadow: 5px 10px 20px rgba(20, 20, 20, 0.5); /* Adjust the shadow on hover */
}
.card-title{
  color: gray;
}
.card:hover .card-title {
  color: Black; /* Change the text color on hover */
}



  

  .noulne {
    text-decoration: none;
  }

  .btnnn {
    border: none;
    padding: 10px;
    background-color: transparent;
    font-size: 20px;
    border-radius: 10px;
    transition-duration: 0.6s;
  }

  .btnnn:hover {
    background-color: #C3C4C9;
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.1);
  }

  .btnnnn {
    background-color: #C3C4C9;
    border: none;
    padding: 6px;
    background-color: transparent;
    font-size: 20px;
    border-radius: 10px;
    transition-duration: 0.6s;
  }
  .btnnnn:hover {
    background-color: #C3C4C9;
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.1);
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
  /* Add some basic styling for the sidebar */
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

  /* Content container to push it to the right */
  .content {
    margin-left: 250px;
    padding: 20px;
  }

  /* Add styling to the card-container */
  .card-container {
    width: 100%;
  }
  .card-img-top:hover {
    position: relative;
}
/* horizontal scroll bar */
.horizontal-scroll-container {
    overflow-x: auto;
    white-space: nowrap;
    max-width: 100%; /* Adjust the max width as needed */
  }

  .profile-row {
    display: inline-block;
  }

  .profile-card {
    display: inline-block;
    margin-right: 10px; /* Add margin between profile cards */
    padding: 10px; /* Add spacing around profile cards */
    text-align: center; /* Center-align profile cards */
  }
  .brgr{
    display:none;
  }
  .remov{
    display:none;
  }
  @media screen and (max-width:700px) {
     
.sidebar{
  display:none;

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
@media screen (max-width:500px){
  

.logo{
    width: 40px;
  }
}
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

<body>
  <!-- Top Navbar -->
  <div class="container-fluid">
    <div class="row bg-primary-subtle hd">
      <div class="nav-scroller mb-3 mt-3">
        <img src="img/tek_matrimony_logo.png" style="background-color: transparent; width: 150px" ; />
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
        <a href="admin8.php" style="text-decoration:none;"> <button id="nvbtn" class="m-3 btnnn2"><img src="img/left-arrows.png" width="20px" alt="">
          Back</button> </a>
          <a href="chnpass.php" style="text-decoration:none;"><button id="nvbtn1" class="m-3 btnnn2"><img src="img/lock.png" width="20px" alt="">Change Password</button></a>
          <a href="index.php?xyz" style="text-decoration:none;"><button id="nvbtn2" class="m-3 btnnn2"><img src="img/turn-off.png" width="20px"
                alt="">Logout</button></a>
</div>
      </div>
    </div>
  </div>

  <!-- Main Content Container -->
  <div class="container-fluid">
  <div class="row vh-100">
      <!-- Sidebar -->
      <?php
    
    if(!isset($_SESSION['loger']))
    {
      ?>
      <script>
        window.location.href = "index.php";
      </script>
      <?php
    }
      

    $eee4 = $connect->prepare("select * from wedding where email='$_SESSION[loger]'");
    $eee4->execute();
    $sss6 = $eee4->fetch();
 
      ?>

      <div id="sidebar" class="sidebar col-md-2 col-xl-2 rounded ">
      <div class=" col-md-3 d-flex">
          <div>
          <img class="rounded-circle  mx-2" src="img/<?php print $sss6['picture']; ?>"  alt="" width="40px" height="40px" style="border-radius: 5px;" >
    </div>
    <div><h4 class="my-2 mx-2"><?php print $sss6['name']; ?></h4></div>
          
        </div>
        <hr>
        <a href="admin8.php"> <img src="img/icons8-home-32.png" width="20px">&nbsp;&nbsp;Home</a>
        <a href="aboutme.php"> <img src="img/icons8-more-info-32.png" width="20px">&nbsp;&nbsp;About</a>
        <a href="suggest.php"> <img src="img/suggestion.png" width="20px">&nbsp;&nbsp;Suggestion</a>
        <a href="#"> <img src="img/customer.png" width="20px">&nbsp;&nbsp;Requests</a>
        <a href="sendrqst.php"> <img src="img/add-user.png" width="20px">&nbsp;&nbsp;Send Requests</a>
        <a href="view11.php"> <img src="img/edit.png" width="20px">&nbsp;&nbsp;Edit profile</a>
        <a href="uploto1.php"> <img src="img/icons8-photo-editor-50.png" width="20px">&nbsp;&nbsp;Edit Photo</a>
      </div>

      <!-- Main Content -->
      <div class=" col-sm-12 col-md-10 col-xl-10">
        <!-- Your content goes here -->

        <?php
    
      if(!isset($_SESSION['loger']))
      {
        ?>
        <script>
          window.location.href = "index.php";
        </script>
        <?php
      }
        

      $eee4 = $connect->prepare("select * from wedding where email='$_SESSION[loger]'");
      $eee4->execute();
      $sss6 = $eee4->fetch();
   
        ?>




<div class="text-center mt-5" id="profile-requests">
    <h1 class="display-6">Profile Requests</h1>
  </div>
  <?php
  if (isset($_SESSION['loger'])) {
      $loger = $_SESSION['loger'];

      $qry = "SELECT * FROM request WHERE req_to = :loger";
      $eee = $connect->prepare($qry);
      $eee->bindParam(':loger', $loger);
      $eee->execute();

      $requestedProfiles = $eee->fetchAll();
      $requestedProfiles1= $eee->rowCount();
    
      if($requestedProfiles1==0){
        ?>
        
        <center><p class="text-danger m-5">No any requests<img src="img/embarrassed.png" width="50px" height="50"></P></center>
      
        <?php
      }
  ?>

  <div class="horizontal-scroll-container">
    <div class="profile-row">

   <?php
  
      foreach ($requestedProfiles as $requestedProfile) {
          $reqTo = $requestedProfile['req_from'];

          $profileQuery = $connect->prepare("SELECT * FROM wedding WHERE email = :reqTo");
          $profileQuery->bindParam(':reqTo', $reqTo);
          $profileQuery->execute();
          $profileData = $profileQuery->fetch();

          if ($profileData) {
              $profilePicture = $profileData['picture'];

              $profileCardId = 'profile-match-card-' . $profileData['email'];

              echo '<div class="profile-card" id="' . $profileCardId . '">';
              echo '<a class="noulne" href="request11.php?idxyz=' . $profileData['id'] . '">';
              echo '<center>';
              echo '<img src="img/' . $profilePicture . '" width="130px" height="130px" class="rounded-circle" alt="Profile Picture"><br>';
              echo '<h7>' . $profileData['name'];
              if ($requestedProfile['status'] === 'accepted') {
                  echo '<span>✔</span>';
              }
              echo '</h7>';
              echo '</center>';
              echo '</a>';
              echo '</div>';
          } else {
              echo "Profile not found for: " . $reqTo . "<br>";
          }
      }
      ?>
    </div>
  </div>

  <?php
  } else {
      echo "User not logged in.";
  }
  ?>

<br>
      </div>
    </div>
  </div>
  </div>

  </div> <!-- End of .content -->
  </div> <!-- End of .row -->
  </div> <!-- End of .container-fluid -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <?php
  include('footer1.php');
  ?>  
</body>

</html>