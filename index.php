<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matrimony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    body{
        font-family:calibri;
    }
    .your {
        margin-top: 100px;
    }

    .pic {
        text-align: center;
    }

    .navbar-nav {
        flex-direction: column;

    }
    .navs-link {
    display: block;
    padding-left: 15px;
    padding-right:15px;
    text-decoration: none;
    background: 0 0;
    border: 0;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}
    .bgcolor{
      color: black;
    }
    .bgcolor1{
      color: black;
    }
    
      
    .hdclr{
        background-color: #5474fc;
    }
    .hdtxtclr{
        color:white;
        transition: background-color 0.5s ease;

    }
    .hdtxtclr:hover{
        color:#0000ff;
        
    }

    .button {
    margin: 10%;
    text-align: center;
}
.brgr{
    display:none;
  }
  .remov{
    display:none;
  }
@media screen and (max-width:500px){
    .txtt{
        position:fixed;
        display:none;
        /* top: 100px; */
        background-color:white;
        flex-direction:column;
        transform:translateY(71px);
        width:20vh;
        transition: transform 0.40s;
        opacity:1;
        left: 0;
        padding: 20px;
    }
    .brgr{
    display:block;
  }
  .hdtxtclr{
        color:black;
        transition: background-color 0.5s ease;

    }
  .display{
    transform:translateY(0%);
  }
  .abc{
    font-size:13px
  }

  #message{
    font-size:14px;
    
  }
}
@media screen and (min-width:500px){
    .abc{
    font-size:20px;
    
  } 
  .bgcolor1{
    color:black
  }
  #message{
    font-size:25px;
    width:500px
  }
}
    
</style>

<script>
    let button=document.queryselector("mnu");
        link=document.queryselector("txtt");

        button.addEventListener("click",()=>{
            link.classlist.toggle("display");
        })

    </script>

<script>
  function men(){

document.getElementById("txtt").style.display="block";
document.getElementById("hdclr").style.height="100px";
document.getElementById("hdi").style.opacity="0";
document.getElementById("hdi1").style.opacity="0";
document.getElementById("rmv").style.display="block";
document.getElementById("mnu").style.display="none";
  }
  function rem(){

document.getElementById("txtt").style.display="none";
document.getElementById("hdi").style.opacity="1";
document.getElementById("hdi1").style.opacity="1";
document.getElementById("rmv").style.display="none";
document.getElementById("mnu").style.display="block";
  }  </script>


<?php
if(isset($_GET['xyz']))
{
  session_destroy();
 
}
?>
<body>
    
    <?php require(__DIR__ . '/matbase.php'); 
   

        ?>
    
    <div class="container-fluid col-lg-12 col-sm-12 col-md-8 col-xl-10 w-100">
        <div id="hdclr" class="row  hdclr ">
            <div>
                <div class="nav-scroller col-md-12 py-1 my-4">
                    <nav class="nav">
                        <div id="txtt" class="txtt nav">
                        
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Assamese</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Bengali</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Behari</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Gujarati</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Hindi</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Kannada</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Kerala</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Marathi</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Marwadi</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Oriya</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Parsi</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Punjabi</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Rajasthani</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Sindhi</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Tamil</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Telugu</b></a>
                        <a class="nav-item navs-link link-body-emphasis active" href="#" style=text-decoration: none;><b class="hdtxtclr display-2 fs-6">Urdu</b></a>
</div>
<button class="btn remov"  onclick="rem()" id="rmv"><img src="img/remove.png" width="20px"></button>
                        <button class="btn brgr" onclick="men()" id="mnu"><img src="img/menu.png" width="20px"></button>
            
              
            
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div style="background-image: url('img/bckd3.jpg'); min-height: 700px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">


        <div class="container-fluid col-lg-12 col-sm-12 col-md-8 col-xl-12 ">
            <div class="pic">
                <div class="row">
                    <div class="col-md-6 mt-5 ms-3 d-flex">
                        <img src="img/tek_matrimony_logo.png" style="background-color: transparent; width:250px";/>
                        
                    </div>
                    
                    <div id="hdi" class="col-md-1 mt-5 mx-4 text-center">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <strong class="bgcolor">Browse Profiles By</strong>
                                    <div class="text-primary"></div>
                                </a>
                                <ul class="dropdown-menu bg-warning-subtle">
                                    <li><a class="dropdown-item" href="#">LogOut</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div id="hdi1" class="col-md-1 mt-5 mx-3 text-center">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <strong class="bgcolor">Already a member?</strong>
                                    <div class="text-primary"></div>
                                </a>
                                <ul class="dropdown-menu bg-warning-subtle">
                                    <li><a class="dropdown-item" href="#">Yes</a></li>
                                    <li><a class="dropdown-item" href="#">No</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2 mt-5">
                        <!-- Login Popup Button -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal" id="loginButton">
    Login
</button>

                    </div>
                </div>
            </div>

            <div class="my-3">
                <div class="your ms-5">
                    <h4 class="bgcolor">Your search for the perfect match here!</h4>
                </div>
                <div class="mt-1 ms-5">
                    <h5 class="bgcolor display-6 fs-4" >#BeChoosy With India's Biggest Matrimony Service</h5>
                </div>
            </div>
            <div class="row mt-3 ms-5">
           <center><div id="message" class="text-center " style='font-size:25px;width:500px'></div></center>

                <div class="row g-2">
                    <div class="col-md mb-3">
                        <div class="form-floating">
                            <select class="form-select bg-secondary-subtle" id="pro">
                                <option selected disabled>Matrimony Profiles For</option>
                                <option value="Myself">Myself</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Son">Son</option>
                                <option value="Friend">Friend</option>
                                <option value="Relatives">Relatives</option>
                            </select>
                            <label for="floatingSelectGrid"><b>Select Profiles</b></label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control bg-secondary-subtle" id="na"
                                placeholder="Enter Name">
                                
                            <label for="floatingSelectGrid"><b>Name</b></label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select bg-secondary-subtle" id="gen">
                                <option disabled selected>Select Yours</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="floatingSelectGrid"><b>Gender</b></label>
                        </div>
                    </div>
                    <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-secondary-subtle" id="mob"
                                    placeholder="+91 Enter mob.no" required oninput="validateMobileNumber(this);">
                                <label for="floatingInputGrid"><b>Mobile Number</b></label>
                                <p id="mobileError" style="color: red; display: none; font-size:20px">Invalid mobile number</p>
                            </div>
                        </div>
                    <div class="col-md">
                        <button type="button" onclick="regis()" class="btn btn-primary btn-lg px-4 mt-1">Register
                            Free</button>
                    </div>
                    
                </div>
            </div>
            <div class="abc" style="white-space: nowrap; ">
                <center><p class="bgcolor1">By clicking register free, I agree to the <a href="privacy.php"><span class="text-primary" style="cursor:pointer;">T&C</span></a> and <a href="privacy.php"><span class="text-primary">Privacy Policy</span></a></p></center>
            </div>
            
        </div>
    </div>
    <script>
    document.getElementById("loginButton").addEventListener("click", function() {
        // Redirect to the desired page when the button is clicked
        window.location.href = "login.php"; // Replace "other-page.php" with the actual URL you want to navigate to
    });
</script>

<script>
                function regis() {
            var profile = document.getElementById("pro").value;
            var name = document.getElementById("na").value;
            var gender = document.getElementById("gen").value;
            var mobile = document.getElementById("mob").value;


   
            sessionStorage.setItem("profile", profile);
            sessionStorage.setItem("mobile", mobile);

            // Check if any of the fields are empty
            if (profile === "" || name === "" || gender === "" || mobile === "") {
                var messageDiv = document.getElementById("message");
                messageDiv.innerHTML = "Please fill in all the fields";
                messageDiv.style.color = "red";
                return;
            } 
            
            if (mobile.length !== 10) {
        var messageDiv = document.getElementById("message");
        messageDiv.innerHTML = "Enter your valid mobile number";
        messageDiv.style.color = "red";
        return;
    }
            
                // If all fields are filled, proceed with the AJAX request
                $.ajax({
                    url: "matri1insert.php",
                    data: {
                        profile2: profile,
                        name2: name,
                        gender2: gender,
                        mobile2: mobile
                    },
                    type: "POST",
                    success: function (submit) {
                        var messageDiv = document.getElementById("message");
                        if (submit === "success") {
                            messageDiv.innerHTML = "Submitted successfully";
                            messageDiv.style.color = "green";
                            window.location.href = "profile2.php";
                        } else {
                            messageDiv.innerHTML = "Submission failed"; // You can provide an appropriate error message
                            messageDiv.style.color = "red";
                        }
                    },
                    error: function () {
                        var messageDiv = document.getElementById("message");
                        messageDiv.innerHTML = "An error occurred while submitting the data";
                        messageDiv.style.color = "red";
                    }
                });
            }
        

    </script>


   
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

        <script>
    // Get a reference to the profile and gender select elements
    const profileSelect = document.getElementById('pro');
    const genderSelect = document.getElementById('gen');

    // Add an event listener to the profile select element
    profileSelect.addEventListener('change', function () {
        const selectedProfile = profileSelect.value;

        if (selectedProfile === 'Son' || selectedProfile === 'Brother') {
            // Automatically set gender to 'Male' and disable the gender select
            genderSelect.value = 'Male';
            genderSelect.disabled = true;
        } else if (selectedProfile === 'Daughter' || selectedProfile === 'Sister') {
            // Automatically set gender to 'Female' and disable the gender select
            genderSelect.value = 'Female';
            genderSelect.disabled = true;
        } else {
            // Enable the gender select and reset its value
            genderSelect.disabled = false;
            genderSelect.value = 'Select Gender';
        }
    });
</script>

<script>
    function validateMobileNumber(input) {
        const mobileInput = input.value;
        const mobileError = document.getElementById('mobileError');

        // Use a regular expression to check if the number starts with 6, 7, 8, or 9
        const isValid = /^[6789]/.test(mobileInput.charAt(0));

        if (isValid) {
            mobileError.style.display = 'none';
        } else {
            mobileError.style.display = 'block';
            input.value = '';  // Clear the input value
        }

        // Remove non-numeric characters
        input.value = mobileInput.replace(/[^0-9]/g, '');
    }
</script>

</body>

<footer>

     <?php

  include('footer.php');

?>

   
  </footer><!-- End Footer -->

</html>