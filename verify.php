<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <link href="css/style-pri.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-auth.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #F2F2F2;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        h2 {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        .container1 {
            max-width: 600px;
            height: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin-top:50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #otp-form {
            display: none;
        }
        #otp{
            width:30%;
            height:55px;
            font-size:20px;
        }
        .h{
            margin-left:10px;
        }
        .code{
            width:30%;
            margin-top:13px;
            height:55px;
            font-size:20px;
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
<body>
<?php require(__DIR__ . '/matbase.php'); ?>
    <div class="row">
 <div class="col-lg-12">
 <div class="bg-primary-subtle p-3">
                <div>
                    <img src="img/tek_matrimony_logo.png"
                        style="background-color: transparent; width:150px;  margin-left: -1150px;" ;>
                </div>
            </div>
 </div>
    <form method="post">
            <div class="container1">
                <div id="phone-form" class="form-group">
                    <!-- Input for entering the phone number -->
                    <label for="vcode" style="font-size:30px">Verify your Mobile number</label>
                    <input type="tel" id="vcode"  class="code" required value="+91" readonly>
                    <button type="button" class="xyz" onclick="sendOTP()" id="verify" style="font-size:22px">Send OTP</button>
                    <span style="color:red" class="text-center" id="errrmsg"></span>
                    <p class="pt-2">Didn't receive code yet? &nbsp;<a href="#" class="zzz" onclick="sendOTP()" style="font-size:20px; text-decoration:underline">Resend OTP</a> </p>
                </div>
                <!-- reCAPTCHA container -->
                <center><div id="recaptcha-container"></div></center>
                <div id="otp-form" class="form-group"><br>
                    <!-- Input for entering the OTP -->
                    <label for="otp" style='font-size:30px;'>Enter OTP:</label>
                    <input type="text" id="otp" />
                    <button type="button" id="verifyOtp" onclick="verifyOTP()">Verify OTP</button>
                </div>
                <p id="status-message" style='font-size:20px;'></p>
            </div>
            <footer class="fo">
                <b>OTHER WAY TO VERIFY</b>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16" id="icon">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v-2.793L15.146.146a.5.5 0 0 1 .708 0z" />
                </svg>
                <a href="#" class="zzz">Verify with missed calls</a>&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16" id="icon">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                </svg>
                <a href="#" class="zzz">Request automated IVR call</a>
            </footer>
    </form>
    </div><br>
    <?php
  include('footer1.php');
  ?>
    <script>
var storedMobileNumber = sessionStorage.getItem("mobile");
if (storedMobileNumber) {
        document.getElementById("vcode").value ="+91" +storedMobileNumber;
    }
        // Firebase configuration
        const firebaseConfig = {
  apiKey: "AIzaSyAKaUVRSlaoUDRN5ulk-BR0pLHNZLGqT04",
  authDomain: "verification-61a40.firebaseapp.com",
  projectId: "verification-61a40",
  storageBucket: "verification-61a40.appspot.com",
  messagingSenderId: "432502826871",
  appId: "1:432502826871:web:06436e6f8e36fadcafe372",
  measurementId: "G-ZJEYQ62NL7"
};
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        // Function to send OTP
        function sendOTP() {
        const phoneNumber = document.getElementById("vcode").value;
        const appVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
            'size': 'normal',
            'callback': (response) => {
                if(response){
                    document.getElementById("recaptcha-container").style.display = "none";
                }
                // reCAPTCHA verification succeeded
            },
            'expired-callback': () => {
                // reCAPTCHA verification expired
            }
        });
        firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
            .then((confirmationResult) => {
                window.confirmationResult = confirmationResult;
                document.getElementById("otp-form").style.display = "block";
                document.getElementById("phone-form").style.display = "none";
                document.getElementById("status-message").innerText = "OTP sent successfully.";
            })
            .catch((error) => {
                console.error("Error sending OTP:", error);
            });
    }
// Function to verify OTP
    function verifyOTP() {
        const otp = document.getElementById("otp").value;
        const confirmationResult = window.confirmationResult;
        if (confirmationResult) {
            confirmationResult
                .confirm(otp)
                .then((result) => {
                    // User signed in successfully.
                    document.getElementById("status-message").innerText = "Phone number verified.";
                    alert("OTP verified successfully!!");
                    // Redirect to another page (login.php)
                    window.location.href = "login.php";
                    // Send the OTP to the PHP script for database update
                    updateOTPInDatabase(otp);
                })
                .catch((error) => {
                    // User couldn't be signed in.
                    alert("OTP verification failed");
                    console.error("Error verifying OTP:", error);
                    document.getElementById("status-message").innerText = "OTP verification failed.";
                });
        }
    }
    // Function to send the OTP to the PHP script for database update
    function updateOTPInDatabase(otp) {
        // Send the OTP to the PHP script using AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "update_otp.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("otp=" + otp);
    }
    </script>
</body>
</html>

React

Reply

