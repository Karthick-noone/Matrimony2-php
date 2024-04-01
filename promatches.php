<!-- <?php
session_start();
require(__DIR__ . '/matbase.php');
?> -->

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

.card:hover .card-title {
  color: Black; /* Change the text color on hover */
}


  .hd {
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.2);
  }

  .hideee {
    display: none;

  }

  .myDIV:hover+.hideee {
    display: block;
    color: red;
    transition-duration: 0.8s;

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

  /* Add some basic styling for the sidebar */
  .sidebar {
    top: 0;
    left: 0;
    background-color: #333;
    padding-top: 20px;
    overflow-y: auto;
    /* Add scroll for long content */
  }

  /* Style the links in the sidebar */
  .sidebar a {
    padding: 15px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
  }

  /* Change the color of links on hover */
  .sidebar a:hover {
    background-color: #555;
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


</style>


<body>
  <!-- Top Navbar -->
  <div class="container-fluid">
    <div class="row bg-primary-subtle hd">
      <div class="nav-scroller mb-3 mt-3">
        <img src="../matrimony/img/tek_matrimony_logo.png" style="background-color: transparent; width: 150px" ; />
        <nav class="nav float-end" style="">
          <a href="admin8.php"> <button class="m-3 btnnn"><img src="img/left-arrows.png" width="20px" alt="">
          Back</button> </a>
          <a href="admin/passwordpage/password/admin%20pannel/pages/forms/cpass.php"><button class="m-3 btnnn"><img src="img/lock.png" width="20px" alt="">Change Password</button></a>
          <a href="index.php?xyz"><button class="m-3 btnnn"><img src="img/turn-off.png" width="20px"
                alt="">Logout</button></a>
        </nav>
      </div>
    </div>
  </div>

  <!-- Main Content Container -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="sidebar col-md-2 col-xl-2">
        <a href="admin8.php">Home</a>
        <a href="aboutme.php">About</a>
        <a href="promatches.php">Suggestion</a>
        <a href="uploto1.php">Edit Photo</a>
        <a href="view11.php">Edit preferences</a>
      </div>

      <!-- Main Content -->
      <div class=" col-md-10 col-xl-10">
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

        

        <h1 class="display-6 text-center mt-5">Profile Matches</h1>

        <div class="row featurette">
          <!-- scroller -->
          <?php
      $sss = $connect->prepare("select * from wedding where email='$_SESSION[loger]'");
      $sss->execute();
      $ppp = $sss->Fetch();
      if ($ppp['gender']=="Female")
       {
        $search = "Male";
      } else {
        $search = "Female";
      }
      ?>

          <?php
$logperson_caste=$ppp['caste'];

      $eee = $connect->prepare("select * from wedding where gender='$search' and caste='$logperson_caste' and subcaste='$ppp[subcaste]'");
      $eee->execute();
      $sss = $eee->fetchAll();
      $num = $eee->rowCount();
if($num==0)
{
?>
          <center>
            <h4>There is no related Profile for selected cast (
              <?php print $sss6['subcaste']; ?> )
            </h4>
          </center>

          <div class="card-container" style="width: 18rem;">
            <?php
}
      foreach ($sss as $sss2) {
        ?>
            <div class="card" style="width: 15rem; display: inline-block; margin-right: 15px; margin-left: 30px; margin-top:10px;">
            <a href="view10.php?idxyz=<?php print $sss2['id'] ?>">
    <img src="img/<?php print $sss2['picture']; ?>" width="200px" height="200px" class="card-img-top mx-auto" />
</a>
              <div class="card-body">
                <h5 class="card-title">Name&nbsp;:&nbsp;
                  <?php print $sss2['name']?>
                </h5>
                <h5 class="card-title">Caste&nbsp;:&nbsp;
                  <?php print $sss2['caste']?>
                </h5>
              </div>
            </div>
            <?php
}
?>
          
        </div>
        
        <div class="text-center mt-5">
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

  $picturesPerRow = 3; 

  print '<div class="row">';

  $count = 0; 

  foreach ($requestedProfiles as $requestedProfile) {
    $reqTo = $requestedProfile['req_from'];

    $profileQuery = $connect->prepare("SELECT * FROM wedding WHERE email = :reqTo");
    $profileQuery->bindParam(':reqTo', $reqTo);
    $profileQuery->execute();
    $profileData = $profileQuery->fetch();

    if ($profileData) {
        $profilePicture = $profileData['picture'];

        $profileCardId = 'profile-match-card-' . $profileData['email']; // Unique ID for each profile card

        print '<div class="col-md-2" id="' . $profileCardId . '">'; // Add ID to the profile card
        print '<a class="noulne" href="request11.php?idxyz=' . $profileData['id'] . '">';?>
        <center>
          <?php print '<img src="img/' . $profilePicture . '" width="130px" height="130px" class="rounded-circle" alt="Profile Picture"><br>';
        ?>
          <h7>
            <?php print $profileData['name']?>
            <?php
       if ($requestedProfile['status'] === 'accepted') {
          print '<span >✔</span>';/*  */ // Checkmark symbol ✓
      }
      
      
      ?>
          </h7>
        </center>
        <?php

       

        print '</a>';
        print '</div>';

        $count++;

        if ($count % $picturesPerRow == 0) {
            print '</div><div class="row">';
        }
    } else {
        print "Profile not found for: " . $reqTo . "<br>";
    }
}
print '</div>';
} else {
  print "User not logged in.";
}
?>
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
</body>

</html>