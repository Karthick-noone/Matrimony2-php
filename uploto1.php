<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/bt5.3.0.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bt5.3.0.js"></script>
    <link rel="stylesheet" href="css/photoupld.css">
</head>

<style>
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

  }
    .a1 {
        height: 500px;
        background-image: url(img/marriage.jpg);
        background-color: hsla(0, 0%, 0%, .452);

    }

    #uploadedImage {
        width: 170px;
        height: 170px;
        background-image: url(img/upld_here.png);
        background-size: cover;
        background-color: rgb(149, 161, 149);
        border-radius: 50%;
        box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.8);
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

    @media screen and (max-width: 1000px) {
        .a1 {
            height: 667px;
            width: 100%;
            background-image: url(img/marriage_2.jpg);
            background-repeat: no-repeat;
            background-size: 70% 70%;
        }

        #uploadedImage {
            width: 85px;
            height: 85px;
            background-size: cover;
            background-image: url(img/upld_here.png);

            border-radius: 50%;
        }
    }

    .brgr{
    display:none;
  }
  .remov{
    display:none;
  }
  @media screen and (max-width:1000px) {
     
.sidebar{
  display:none;
width:100%;
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

<body class="vh-100 ">

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
                alt="">Logout</button></a></div>
      </div>
    </div>
  </div>
  <?php
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
  <div class="row">
      <!-- Sidebar -->
      <div id="sidebar" class="sidebar col-sm-2 col-md-2 col-xl-2 rounded">

      
      <div class=" col-md-3 d-flex">
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

                    <div class="col-lg-12 col-md-2 col-sm-2 col-xl-12 m-3 rounded"
                        style="background-image: url('img/6206886.jpg'); min-height: 700px; background-size: cover; background-repeat: no-repeat; background-position: center; width:80%;">
                        <div class="col-lg-12 col-md-3 col-xl-12 mb-3">
                        <h2 style="color: gray; padding-bottom: 50px;" class="display-6 mb-5">
                                <center>Add your photo and get much more responses!!</center>
                            </h2>
                        </div>



                       
            
                            <div class="col-lg-12 col-md-3 col-xl-12">
                                <div class="col-lg-12 col-xl-12 d-flex justify-content-center"><img id="uploadedImage">
                                </div>
                                <div class="col-lg-12 col-md-6 col-xl-12 ">
                                    <form method="POST" enctype="multipart/form-data">
                                        <center><input type="file" name="stud_pic" id="imageInput" class="mt-5"
                                                required></center>
                                                <center>


                                        <input type="submit" class="btn btn-primary" id="a1" value="upload"
                                                name="submit" onclick="openLoginModal()">
                                                <input type="button" class="btn btn-primary my-1" id="a1" value="Skip"
                                                 name="skip" onclick="skipToNextPage()">
                                                 <script>
    function skipToNextPage() {
        // Replace 'next_page.html' with the URL of the next page you want to navigate to
        window.location.href = 'admin8.php';
    }
</script></center>
                                        
                                    </form>

                                    <?php
    require(__DIR__ . '/matbase.php');

    if (isset($_POST['submit'])) {
        if (isset($_FILES['stud_pic']) && $_FILES['stud_pic']['error'] === UPLOAD_ERR_OK) {
            $pic = $_FILES['stud_pic']['name'];
            $tmp_name = $_FILES['stud_pic']['tmp_name'];

            // Define the target directory where the image should be moved to
            $target_directory = "img/";

            // Move the uploaded file to the target directory
            if (move_uploaded_file($tmp_name, $target_directory . $pic)) {
                $aaa = $connect->prepare("update wedding set picture='$pic' where email='$_SESSION[loger]'");
                $aaa->execute();
                ?>
                <script>
                    
                    window.location.href = "admin8.php";
                </script>
                <?php
            } else {
                echo "Failed to move the uploaded file.";
            }
        } else {
            echo "No file selected or an error occurred while uploading the file.";
        }
    }
    ?>



                                    <center>
                                        <w class="li_flex text-dark">
                                            <li>with in 15 MB of size</li>
                                            <li>jpg / gif / png / bmp</li>
                                        </w>
                                    </center>
                                </div>
                            </div>
                            <center>
                                <div class="col-lg-6 col-xl-6 d-flex text-dark"
                                    style="margin-top:60px; margin-left: 100px ">
                                    <img src="img/wts.png" height="40px" width="40px" alt="">
                                    <p style=" white-space: wrap;margin-left: 15px"> Whatsapp your photos to
                                        <b>+919878987865</b> & we will upload<br>
                                        them instantly.
                                    </p>
                                </div>
                            </center>
                            <center>
                                <div class="col-lg-6 col-xl-6 d-flex" style=" margin-left: 100px">
                                    <img src="img/face.png" height="40px" width="40px" alt="">
                                    <p><b><span style="color: black;margin-left: 15px">Select Photos</span></b>
                                        <span class="text-dark">from your Facebook account and upload.</span><br><span
                                            style="color: dark">(we'll naver post anythig on your
                                            wall)</span>
                                    </p>
                                </div>
                            </center>
                        </div>
                    </div>


    </div>
</div>
</div>
    </div>
    <?php
  include('footer1.php');
  ?>  
    <script>
        const imageInput = document.getElementById('imageInput');
        const uploadedImage = document.getElementById('uploadedImage');
        imageInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    uploadedImage.src = e.target.result;
                    uploadedImage.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });



    </script>
</body>

</html>