
<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>completed6</title>
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
<?php require(__DIR__ .'/matbase.php');?>
    <div class="container-fluid col-lg-10 col-sm-6 col-md-8 col-xl-10">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-start mt-2">
                    <img src="img/tek_matrimony_logo.png" width="200px" height="90px" alt="Logo">
                </div>
                <div class="text-end mb-0">
                    <center><h5>Great! You have completed <span class="fs-3">90%</span></h5></center>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: pink;">
            <div class="row mt-0">
                <div class="col-lg-4 mt-3 mb-3">
                    <img src="img/iml1.jpg" width="350px" height="450px" alt="Image">
                </div>
                <div class="col-lg-8 mt-3">
                    <h3>Let the world know about your relative's awesomeness.</h3><br>
                    
                    <div class="row ">                       
                        <div class="col-md-12">
                        <center><p style="font-size:20px"> Write a few words about your relative to get to know better!!</p></center>
                            <div class="form-floating margin-left:-20px;">                                
                               <center> <textarea class="form-control" placeholder="Leave a comment here" id="text"
                                    style=" width: 300px; height: 200px;"></textarea></center>                               
                            </div>
                        </div>                      
                    </div>                    
                    <div class="col-md text-center mt-2">
                        <button type="button" onclick="update()" class="btn btn-primary btn-lg px-4 mt-1">completed</button>
                    </div>
                </div>

            </div>
        </div>
        
        <script>
function update()
{
	var text2=document.getElementById("text").value;

	
	
	
	
	
	$.ajax({ 
	
	   url:"com6insert.php",
	   data:{uptext2:text2},
	   type:"POST",
	   success:function(submit)
	   {
        if (submit === "success") {
                alert("Data updated successfully. Proceed to next page!");
                window.location.href = "image9.php";
            } else {
                alert("Data update failed"); // You can provide an appropriate error message
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