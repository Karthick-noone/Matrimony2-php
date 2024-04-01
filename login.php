<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    
    <link rel="stylesheet" href="css/logstyle.css">
</head>

<body>
<?php
if(isset($_GET['userlogout']))
{
  session_destroy();
 
}

  ?>
<div class="container-fluid  col-lg-12 col-sm-6 col-md-10 col-xl-12">
    <form>
    <a href="index.php" class="siggg"><img src="img/remove.png" alt="" style="height: 23px; float:right;" width="30px"></a></p><br>
        <h1 class="loggg"><img src="img/enter.png" alt="" style="margin-right: 5px; height: 23px" width="30px">Login Page</h1>
        <div class="input-container"><img src="img/email.png" alt="Email Icon" >
            <input type="text" id="us" placeholder="Type your email" required></div>
        <div class="input-container"><img src="img/key.png" alt="Key Icon">
            <input type="password" id="ps" placeholder="Type your password" required></div>
        <p id="Errormsg" class="err"></p>
        <button type="button" onclick="log()">Login</button>
        <div class="modal-footer">
                    <p>Don't have an account? <a href="index.php" class="siggg">Sign up</a></p>
                    <p>For Admin Login <a href="admin/adlogin.php" class="siggg">ADMIN login</a></p>

                </div>
    </form>
    
    </div>
    <script>
        

        function log() {
            var usna = document.getElementById("us").value;
            var pwd = document.getElementById("ps").value;

            

            $.ajax({
    url: "log1insert.php",
    data: { usna2: usna, pwd2: pwd },
    type: 'POST',
    success: function (result) {
        if (result == "success") {
            Swal.fire({
                icon: 'success',
                title: 'Login Successful!!',
                text: 'You are now logged in.',
                showConfirmButton: false,
                timer: 2000 // The alert will automatically close after 1.5 seconds
            });

            // Redirect to admin8.php after the alert
            setTimeout(function() {
                window.location.href = "admin8.php";
            }, 2000); // Redirect after 1.5 seconds
        }
         else {
            document.getElementById("Errormsg").innerHTML = "Invalid username and password";
        }
    }
});


        }

        
    </script>
</body>
</html>
