<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bt-5.3.0.css" rel="stylesheet">
<script src="js/bt-5.3.0.js"></script>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/bootstrap-icons.svg"> -->
<script src="js/jquery-1.8.2.min.js" ></script>
</head>
<style>
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
    </style>
<script>
function abc()
{
    
var uname=document.getElementById("name").value;
var psw=document.getElementById("psw").value;

$.ajax({
    url:"insert-pri1.php",
    data:{username:uname,
        password:psw},
    type:'POST',
    success:function(result)
    {
        if(result=="success")
        {
            window.location.href="passwordpage/password/admin pannel/pages/forms/change password.php";
        }
        else
        {
           document.getElementById("errrmsg").innerHTML="Wrong Password";
        }
        
    }
});
}
</script>

<?php
if(isset($_GET['id']) && $_GET['id']==="abc")
{
  session_destroy();
}
?>

<body>
    <style>
        #icon{
            height: 28px;
            width: 28px;
            position:relative;
            margin-top: 20px;
        }
        
        
        
    </style>    

       <header >
       <div class="container-fluid">
    <div class="row hd">
      <div class="nav-scroller mb-3 mt-3">
        <img src="img/logo.png" style="background-color: transparent; width: 150px" ; />
        <nav class="nav float-end" style="">
          <a href="../index.php"> <button class="m-3 btnnn"><img src="../img/left-arrows.png" width="20px" alt="">
          Back</button> </a>
         
        </nav>
      </div>
    </div>
  </div>
    
         
     </header>

        <div class="container-fluid">
            <div class="row bg-primary-subtle " >            
                 <div class="col-lg-6 ms-5 mt-4">            
                     <img src="img/bbb.jpg" class="rounded float-start mt-3 p-2"  height="35%" width="35%" >
                     <img src="img/ccc.webp" class="rounded float-start mt-3 p-2" height="35%" width="35%"  ><br>
                     <img src="img/zzz.jpg" class="rounded float-start mt-3 p-2" height="35%" width="35%" >
                     <img src="img/bbb.jpg" class="rounded float-start mt-3 p-2" height="35%" width="35%" >
                 </div>
                 <div class=" col-lg-4 pt-2 " >
                     <div class="container mb-3 bg-body-tertiary card-border" style="border-radius:20px;">
                         <h2 class="pt-1 ms-5 pt-2">Admin Login</h2>
                          <div class="mb-2 pt-3">
                             <input type="text" class="form-control" id="name" placeholder="Username" required>
                          </div>
                         <div class="mb-2 pt-2 ">
                             <input type="password" class="form-control" id="psw" placeholder="Password" required>
                         </div>
                             <label class="ms-1">
                              <input type="checkbox" > Keep me logged in</label><br><br>
                               <div class="d-grid gap-3 col-xl-6 ms-3">
                                  <!-- <button class="btn btn-warning btn-block"   onclick="abc()">Login</button>      -->
                                  <button class="btn btn-warning btn-block" onclick="abc()">Login</button> 
                                  <span style="color:red" class="text-center" id="errrmsg"></span>           
                               </div >
                               <div class=" p-2" >
                                   <p><b>Trouble Logging in ?</b></p>
                                    <P >Login with OTP | Forgot Password ?</P>
                              </div>
                     </div>
                          <div class="container bg-body-tertiary  card-border p-2" style="border-radius:20px;">
                             <p class="ms-3 ">Not a Member ? <b class="text-danger">REGISTER FREE</b></p>
                          </div>

       
                    </div>
         </div>
<div class="container">
    <div class="row  ms-3 pt-2">
                 <div class="col-lg-4  " >          
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16" id="icon">
                       <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                          <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                           </svg></span>  <p class="text-wrap" style="padding-left: 35px;margin-top: -38px;">Contact denuine profile with<br> 100% verified mobile number </p>
           
                    </div>
        <div class="col-lg-4 ">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16" id="icon" >
            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
          </svg> <p style="padding-left: 35px;margin-top: -45px;">Highest number of<br> documented  marriages online <br>-Limca book of records</p>
        </div>
            <div class="col-lg-4  ">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16" id="icon" >
                       <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                   <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                   </svg><p style="padding-left: 35px;margin-top: -35px;"> The most trusted matrimony <br>- the brand trusted report</p>
           </div>
    </div>
</div>
   <footer>    
         <div class="row bg-body-secondary pt-3">
               <div class="col-lg-12">
                    <div class="container">
                        <h4>About tekmatrimony</h4>
                              <p>Tek matrimony is the part of Bharath matrimony the pioneer in online matrimony is the most trusted matrimony service for lakhs of malayalis woldwide.Bharath matrimony has been regonised as the most trusted online matrimony service by the Brand Turst Report.We have also been featured in lumica book of record for most number of documented marraiages online.Our purpose is to build a better bharath through happy marriages. </p>
                    </div>
                </div>
         </div>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

         
    <script>
        function abc() {
            var uname = document.getElementById("name").value;
            var psw = document.getElementById("psw").value;

            // Check if both fields are filled
            if (uname !== "" && psw !== "") {
                $.ajax({
                    url: "insert-pri1.php",
                    data: {
                        username: uname,
                        password: psw
                    },
                    type: 'POST',
                    success: function (result) {
                        if (result.trim() === "success") {
                            window.location.href = "repro.php";
                        } else {
                            document.getElementById("errrmsg").innerHTML = "Wrong Password";
                        }
                    }
                });
            } else {
                // Show an error message if fields are not filled
                document.getElementById("errrmsg").innerHTML = "Both fields are required";
            }
        }
    </script>

   </footer>


</div>

</body>
</html>