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
`   
    @media screen and (max-width: 1000px) {
        .a1 {
            height: 667px;
            width: 100%;
            background-image: url(img/marriage_2.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        #uploadedImage {
            width: 85px;
            height: 85px;
            background-size: cover;
            background-image: url(img/upld_here.png);

            border-radius: 50%;
        }
    }
</style>
<?php
if(!isset($_SESSION['sesno']))
{
?>
<script>
   window.location.href="index.php";
   </script>
<?php
}
?>

<body class="vh-100">

    <div class="container-fluid col-lg-10 col-sm-6 col-md-8 col-xl-10 w-100">
        <div class="row">
            <div class="bg-primary-subtle p-3">

                <div class="nav-scroller">
                    <img src="img/tek_matrimony_logo.png"
                        style="background-color: transparent; width:150px" ;>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xl-12 a1 w-100"
                        style="background-image: url('img/6206886.jpg'); min-height: 900px; background-size: cover; background-repeat: no-repeat; background-position: center;">




                        <div class="col-lg-12 col-xl-12">
                            <h2 style="color:darkgray; padding-top: px;" class="display-6 mb-2">
                                <center><b>Add your photo and get much more responses!!</b></center>
                             
                            </h2>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="col-lg-12 col-xl-12 d-flex justify-content-center"><img id="uploadedImage">
                                </div>
                                <div class="col-lg-12 col-xl-12 ">
                                    <form method="POST" enctype="multipart/form-data">
                                        <center><input type="file" name="stud_pic" id="imageInput" class="mt-5" style="margin-left: 50px;"
                                                required></center>
         


                                        <center><input type="submit" class="btn btn-primary mt-2" id="a1" value="upload"
                                                name="submit" onclick="openLoginModal()"><input type="button" class="btn btn-primary mt-2 mx-1" id="a1" value="Skip"
                                                 name="skip" onclick="skipToNextPage()">
                                                 <script>
    function skipToNextPage() {
        // Replace 'next_page.html' with the URL of the next page you want to navigate to
        window.location.href = 'verify.php';
    }</script>
    
</center>
                                        
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
                $aaa = $connect->prepare("update wedding set picture='$pic' where randmcd='$_SESSION[sesno]'");
                $aaa->execute();
                ?>
                <script>
                    alert("Uploaded successfully.")
                    window.location.href = "verify.php";
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
                                        <w class="li_flex">
                                            <li>with in 15 MB of size</li>
                                            <li>jpg / gif / png / bmp</li>
                                        </w>
                                    </center>
                                </div>
                            </div>
                            <center>
                                <div class="col-lg-6 col-xl-6 d-flex"
                                    style="margin-top:60px; margin-left: 100px ">
                                    <img src="img/whatsapp.png" height="40px" width="40px" alt="">
                                    <p style=" white-space: wrap;margin-left: 15px"> Whatsapp your photos to
                                        <b>+91-9777098654</b> & we will upload<br>
                                        them instantly.
                                    </p>
                                </div>
                            </center>
                            <center>
                                <div class="col-lg-6 col-xl-6 d-flex" style=" margin-left: 100px">
                                    <img src="img/face.png" height="40px" width="40px" alt="">
                                    <p><b><span style="margin-left: 15px">Select Photos</span></b>
                                        <span class="">from your Facebook account and upload.</span><br><span
                                            style="">(we'll naver post anythig on your
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
    </div>
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