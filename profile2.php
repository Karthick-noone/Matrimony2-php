<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
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
<body style="background-image: url('img/bgwed.jpg'); min-height: 750px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
    <?php require(__DIR__ . '/matbase.php'); ?>
    <div class="container col-lg-12 col-sm-12 col-md-8 col-xl-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-start">
                    <img src="img/tek_matrimony_logo.png" width="200px" height="100px" alt="Logo">
                </div>
                <div class="text-center">
                    <h5>Great! You have completed <span class="fs-3">20%</span></h5>
                </div>
            </div>
        </div>
        <div class="container mt-0" style="background-color: pink; max-width: 1050px; padding: 20px;">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <img src="img/iml1.jpg" width="330px" height="500px" alt="Image">
                </div>
                <div class="col-lg-8">
                    <h3>Please provide us basic details.</h3>
                    <form>
                        <div class="mb-3">
                            <label for="dob" class="col-form-label">
                                <h6>Date of Birth</h6>
                            </label>
                            <input type="date" class="form-control" id="dob">
                            <p>Your <span id="profilechoice"></span>'s date of birth helps us find the perfect match.</p>
                        </div>
                        <div class="mb-3">
                            <label for="religion" class="form-label">
                                <h6>Religion</h6>
                            </label>
                            <select id="reli" class="form-select">
                                <option selected disabled>Choose...</option>
                                <option>Christian</option>
                                <option>Hindu</option>
                                <option>Islam</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="motherTongue" class="form-label">
                                <h6>Mother Tongue</h6>
                            </label>
                            <select id="mother" class="form-select">
                                <option selected disabled>Choose...</option>
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Tamil</option>
                                <option>Malayalam</option>
                                <option>Telugu</option>
                                <option>Bengali</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">
                                <h6><span style="color: red;">*</span> Email ID</h6>
                            </label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label">
                                <h6><span style="color: red;">*</span> Password</h6>
                            </label>
                            <input type="password" class="form-control" id="pass">
                            <center><small>Make sure to remember your Email ID and Password for Login into your Profile</small></center>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="button" onclick="upd()"
                                class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
var storedProfile = sessionStorage.getItem("profile");
if (storedProfile) {
        document.getElementById("profilechoice").textContent =storedProfile;
    }

            function upd() 
            {
                var dob2 = document.getElementById("dob").value;

                var reli2 = document.getElementById("reli").value;

                var mother2 = document.getElementById("mother").value;

                var email2 = document.getElementById("email").value;

                var pass2 = document.getElementById("pass").value;


            // Check if any of the fields are empty
            
             if (dob2 === '' || reli2 === '' || mother2 === '' || email2 === '' || pass2 === '') {
             alert("Please fill in all fields");
             return; // Exit the function if any field is empty
             }
             if (pass2.length < 6 || pass2.length > 8) {
    alert("Password must be between 6 and 8 characters");
    return; // Exit the function or stop further code execution
}
             $.ajax({
        url: "profile2insert.php", // Check if the URL is correct
        data: {
            updob2: dob2,
            upreli2: reli2,
            upmother2: mother2,
            upemail2: email2,
            uppass2: pass2
        },
        type: "POST",
        success: function (submit) {
            if (submit === "success") {
                alert("Data updated successfully. Proceed to next page!");
                window.location.href = "pro3.php";
            } else {
                alert("Email Already Exists."); // You can provide an appropriate error message
            }
        },
        error: function () {
            alert("An error occurred while updating the data");
        }
    });
}

        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>