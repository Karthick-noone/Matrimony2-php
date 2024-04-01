<div class="offset-1 col-1">Optional</div>
<div class="col-md-2 mt-5"><a class="btn btn-md btn-outline-primary" href="#">Login</a> </div>


<?php print $sss6['select'];?>,




<?php print $sss6['religion'];?>,
<?php print $sss6['mother'];?>,

<?php print $sss6['password'];?>,
<?php print $sss6['caste'];?>,
<?php print $sss6['subcaste'];?>,
<?php print $sss6['gothram'];?>,
<?php print $sss6['suddha'];?>,
<?php print $sss6['marital'];?>,
<?php print $sss6['childrens'];?>,
<?php print $sss6['living'];?>,
<?php print $sss6['famstatus'];?>,
<?php print $sss6['famtype'];?>,
<?php print $sss6['famvalue'];?>,
<?php print $sss6['disability'];?>,
<?php print $sss6['highestedu'];?>,
<?php print $sss6['education'];?>,
<?php print $sss6['employed'];?>,
<?php print $sss6['occupation'];?>,
<?php print $sss6['annual'];?>,
<?php print $sss6['amount'];?>,
<?php print $sss6['location'];?>,
<?php print $sss6['state'];?>,


<div class="d">
                        <div>
                        <i class="mdi mdi-school"></i><?php print $sss2['occupation'];?>
                        <i class="mdi mdi-account-card-details"></i><?php print $sss2['employed'];?>
                        </div>
                        <div class="jjj">
                        <i class="mdi mdi-wallet-travel"></i><?php print $sss2['location'];?>
                        <i class="mdi mdi-cash"></i><?php print $sss2['amount'];?>
                        </div>
                        </div>


                        <a href="#" class="btn btn-success">Change Password</a>
             
              
             <a href="index.php" class="btn btn-success">Back</a>
         
        
             <a href="index.php" class="btn btn-success">Log out</a>
        
     

             <?php
        $eee = $connect->prepare("select * from wedding where gender='$search'");
        $eee->execute();
        $sss = $eee->fetchAll();
        foreach ($sss as $sss2) {
          ?>
          <a href="view10.php?idxyz=<?php print $sss2['id'] ?>"><img src="img/<?php print $sss2['picture'];?>"
              width="200px" height="200px" class="rounded-circle " /></a>

          <?php

          print $sss2['name'];

        }
        ?>

$res=$connect->prepare("update wedding set request='$em' where id='$id'");

 <script>
                    function req(logem,reqprsnid) {
 
                


                $.ajax({

                    url: "view10insert.php",
                    data: { em: logem , reid: reqprsnid},
                    type: "POST",
                    success: function (submit) {
                        alert(submit);
                        window.location.href = "admin8.php";
                    }

                });
            }

                    </script>

<?php

// Check if 'idxyz' parameter is set in the URL
if (isset($_GET['idxyz'])) {
    $idxyz = $_GET['idxyz'];
    $qry = "SELECT * FROM request WHERE id = :idxyz";
} else {
    // If 'idxyz' parameter is not set, use the logged-in user's email to filter profiles
    $loggedUserEmail = $_SESSION['loger'];
    $qry = "SELECT * FROM request WHERE email = :loggedUserEmail";
}

$eee = $connect->prepare($qry);
$eee->bindParam(':idxyz', $idxyz); // Bind parameter if it exists
$eee->bindParam(':loggedUserEmail', $loggedUserEmail); // Bind parameter if it exists
$eee->execute();

$profiles = $eee->fetchAll();

foreach ($profiles as $profile) {
    // Display the profile data as needed
    echo "Name: " . $profile['name'] . "<br>";
    echo "Email: " . $profile['email'] . "<br>";
    // Add more fields as needed
}
?>


<?php


if (isset($_SESSION['loger'])) {
    $loggedUserEmail = $_SESSION['loger'];

    $aaa = $connect->prepare("SELECT * FROM request WHERE req_from = :loggedUserEmail");
    $aaa->bindParam(':loggedUserEmail', $loggedUserEmail);
    $aaa->execute();

    $requestedProfiles = $aaa->fetchAll();

    foreach ($requestedProfiles as $requestedProfile) {
        $reqTo = $requestedProfile['req_to'];
        print "Requested Profile: " . $reqTo . "<br>";
    }
} else {
    print "User not logged in.";
}
?>

alert("You accepted this profile");
            window.location.href="admin8.php";






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
  .container
  {
	  margin-top:100px;
	  margin-left:100px;
	  
  }
  .row{
	  margin-top:100px;
	  margin-left:100px;
  }
  .great{
	  margin-top:100px;
	  margin-bottom:-100px;
	  margin-left:800px;
  }
  .pic{
	margin-top:10px; 
	  margin-bottom:-100px;
	  margin-left:70px;
  }
  
  </style>
  <body>
   <div class="pic">
   <img src="../matrimony/img/teklogo.png" width="200px" height="100px"/>
   </div>
  <div class="great">
  <h5>Great!you have completed <b>40%</b></h5>
  </div>
  <div class="container" style="background-color:pink;width:1050px; height:650px;">
	<div class="row">
	
	
	<div class="col-lg-4">
	<div style="margin-top:80px; margin-left:-30px;">
	<img src="../matrimony/img/ph2.png" width="400px" height="470px"/>
	</div>
	</div>
		
	
	<div class="col-lg-8">
	<div style="margin-top:70px; margin-left:70px;">
	<h3>Religion details can help us find the right match.</h3>
	<form>
	
  <div class="col-md-6">
    <label for="inputState" class="form-label"><h6>Caste</h6></label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
	  <option>BC</option>
      <option>OC</option>
	  <option>MBC</option>
	  <option>SC</option>
    </select>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Willing to marry from other communities also
      </label>
    </div>
  </div>
 
   <div class="col-md-6">
    <label for="inputState" class="form-label"><h6>SubCaste</h6></label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
	  <option>Christian</option>
      <option>Hindhu</option>
	  <option>Islam</option>
	  
    </select>
  </div>
   
   <div class="col-md-6">
    <label for="inputEmail3" class=" col-form-label"><h6>Gothram</h6></label>
   
      <input type="email" class="form-control" id="inputEmail3">
     </div>
	 
  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Suddha Jadhagam: </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary" type="button" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
					  
                    <label class="form-check-label" for="femaleGender">Yes</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary" type="button" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
					  
                    <label class="form-check-label" for="maleGender">No</label>
                  </div>


                 <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Don't know</label>
                  </div>

                </div>
  
 
  <br>
  <div class="col-md">
  <center>
    <button type="button" class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
	</center>
  </div>
</form>
	</div>
	
	
	</div>
	</div>
    
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<!-- ===========================================================================================================*/ -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
  .container
  {
	  margin-top:100px;
	  margin-left:100px;
	  
  }
  .row{
	  margin-top:100px;
	  margin-left:100px;
  }
  .great{
	  margin-top:100px;
	  margin-bottom:-100px;
	  margin-left:800px;
  }
  .pic{
	margin-top:10px; 
	  margin-bottom:-100px;
	  margin-left:70px;
  }
  
  </style>
  <body>
   <div class="pic">
   <img src="../matrimony/img/teklogo.png" width="200px" height="100px"/>
   </div>
  <div class="great">
  <h5>Great!you have completed <b>20%</b></h5>
  </div>
  <div class="container" style="background-color:pink;width:1050px; height:700px;">
	<div class="row">
		
	<div class="col-lg-4">
	<div style="margin-top:80px; margin-left:-30px;">
	<img src="../matrimony/img/ph1.png" width="400px" height="520px"/>
	</div>
	</div>
		
	
	<div class="col-lg-8">
	<div style="margin-top:70px; margin-left:70px;">
	<h3>Please provide us with your relative's basic details.</h3>
	<form>
  <div class="col-md-6">
    <label for="inputEmail3" class=" col-form-label"><h6>Date of Birth</h6></label>
    
      <input type="date of birth" class="form-control" id="inputEmail3"><p>your relative's date of birth helps us find the perfect match</p>

  </div>
 
   <div class="col-md-6">
    <label for="inputState" class="form-label"><h6>Religion</h6></label>
   <select id="inputState" class="form-select">
      <option selected>Choose...</option>
	  <option>Christian</option>
      <option>Hindhu</option>
	  <option>Islam</option>
	  
    </select>
  </div>
   <div class="col-md-6">
    <label for="inputState" class="form-label"><h6>Mother Tongue</h6></label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>English</option>
      <option>Hindhi</option>
	  <option>Tamil</option>
	  <option>Malayalam</option>
	  <option>Telugu</option>
	  <option>Bengali</option>
    </select>
  </div>
   <div class="col-md-6">
    <label for="inputEmail3" class=" col-form-label"><h6>Email ID</h6></label>
   
      <input type="email" class="form-control" id="inputEmail3">
   
  </div>
  
  
  <div class="col-md-6">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><h6>Password</h6></label>
    
      <input type="password" class="form-control" id="inputPassword3">
    
  </div>
  <br>
  <div class="col-md">
    <button type="button" class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
  </div>
</form>
	</div>
	
	
	
	
	
	
	</div>
	</div>
    
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<!-- ========================================================================================================== -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
  .container
  {
	  margin-top:100px;
	  margin-left:60px;
	  
  }
  .row{
	  margin-top:100px;
	  margin-left:100px;
  }
  .great{
	  margin-top:100px;
	  margin-bottom:-100px;
	  margin-left:900px;
  }
  .pic{
	margin-top:10px; 
	  margin-bottom:-100px;
	  margin-left:70px;
  }
  
  
  </style>
  <body>
   <div class="pic">
   <img src="../matrimony/img/teklogo.png" width="200px" height="100px"/>
   </div>
  <div class="great">
  <h5>Great!you have completed <b>60%</b></h5>
  </div>
  <div class="container" style="background-color:pink;width:1200px; height:700px;">
	<div class="row">
	
	
	<div class="col-lg-4">
	<div style="margin-top:0; margin-left:-123px;">
	<img src="../matrimony/img/ph2.png" width="400px" height="700px"/>
	</div>
	</div>
		
	
	<div class="col-lg-8">
	<div style="margin-top:20px; margin-left:-10px;">
	<h3>Tell us about your relative's personal details.</h3>
	<form>
 <div class="d-md-flex justify-content-start align-items-center mb-4 mt-5 py-2">

                  <h6 class="mb-0 me-7">Marital Status : </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
					  
                    <label class="form-check-label" for="femaleGender">Never Married</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
					  
                    <label class="form-check-label" for="maleGender">Widowed</label>
                  </div>


                 <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Divorced</label>
                  </div>
				  
				  <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Awaiting Divorce</label>
                  </div>

                </div>
				
				 <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">No.of children : </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
					  
                    <label class="form-check-label" for="femaleGender">None</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
					  
                    <label class="form-check-label" for="maleGender">1</label>
                  </div>


                 <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">2</label>
                  </div>
				  
				  <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">3</label>
                  </div>
				  
				  <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">4and above</label>
                  </div>
				  </div>
				   <div class="d-md-flex justify-content-center align-items-center mb-4 py-2">

				  <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Children living with me</label>
                  </div>
				  
				  <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Children bot living with me</label>
                  </div>
</div>


             
  
  
  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Family Status : </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
					  
                    <label class="form-check-label" for="femaleGender">Middleclass</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
					  
                    <label class="form-check-label" for="maleGender">Upper Middleclass</label>
                  </div>


                 <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Affluent</label>
                  </div>

                </div>
 
 
 <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Family Type : </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
					  
                    <label class="form-check-label" for="femaleGender">Joint</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
					  
                    <label class="form-check-label" for="maleGender">Nuclear</label>
                  </div>


                

                </div>
				
				<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Family Values : </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
					  
                    <label class="form-check-label" for="femaleGender">Orthodox</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
					  
                    <label class="form-check-label" for="maleGender">Traditional</label>
                  </div>


                 <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Moderate</label>
                  </div>
				  
				   <div class="form-check form-check-inline mb-0">
				 
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
					  
                    <label class="form-check-label" for="otherGender">Liberal</label>
                  </div>

                </div>
  
  
  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Any Disability : </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
					  
                    <label class="form-check-label" for="femaleGender">None</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
				  
                    <button class="btn btn-outline-primary btn-sm" type="button" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
					  
                    <label class="form-check-label" for="maleGender">Physically chanllenged </label>
                  </div>



                </>
  
 
  <br>
  
  <div class="col-md">
  <center>
    <button type="button" class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
	</center>
  </div>
</form>
	</div>
	
	</div>
	</div>
    
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<!-- ============================================================================================================= -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
  .container
  {
	  margin-top:100px;
	  margin-left:60px;
	  
  }
  .row{
	  margin-top:100px;
	  margin-left:100px;
  }
  .great{
	  margin-top:100px;
	  margin-bottom:-100px;
	  margin-left:900px;
  }
  .pic{
	margin-top:10px; 
	  margin-bottom:-100px;
	  margin-left:70px;
  }
  
  
  </style>
  <body>
   <div class="pic">
   <img src="../matrimony/img/teklogo.png" width="200px" height="100px"/>
   </div>
  <div class="great">
  <h5>Great!you have completed <b>60%</b></h5>
  </div>
  <div class="container" style="background-color:pink;width:1200px; height:700px;">
	<div class="row">
	
	
	<div class="col-lg-4">
	<div style="margin-top:0; margin-left:-123px;">
	<img src="../matrimony/img/ph2.png" width="400px" height="700px"/>
	</div>
	</div>
		
	
	<div class="col-lg-8">
	<div style="margin-top:20px; margin-left:-10px;">
	<h4>Professional details help us to find the best companion.</h4>
  <form>
  <div class="mb-3 mt-3">
                        <label for="religion" class="form-label"><h6>Highest education</h6></label>
                        <select id="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option>Christian</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label"><h6>Education in Detail</h6></label>
                        <select id="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option>Christian</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label"><h6>Employed in</h6></label>
                        <select id="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option>Christian</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label"><h6>Occupation</h6></label>
                        <select id="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option>Christian</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="religion" class="form-label"><h6>Annual Income</h6></label>
                        <select id="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option>Christian</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label"><h6>Work Location</h6></label>
                        <select id="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option>Christian</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="religion" class="form-label"><h6>State</h6></label>
                        <select id="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option>Christian</option>
                            <option>Hindu</option>
                            <option>Islam</option>
                        </select>
                    </div>

                

<div class="col-md text-center">
    <button type="button" class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
</div>
  </form>
	</div>
	
	</div>
	</div>
    
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<!-- =================================================================================== -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matri1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <style>
  .your
  {
	 margin-top:100px;
  }
  .pic{
	  
  }
  
  </style>
  <body>
    
	<div class="container-fluid">
	  	<div class="row bg-secondary-subtle">
 <div class="mt-3">
   <div class="nav-scroller py-1 mb-5 mt-3 border-bottom">
    <nav class="nav justify-content-between" style="font-size:12px">
	 <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Assamese</b></a>
      <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Bengali</b></a>
      <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Behari</b></a>
      <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Gujarati</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Hindi</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Kannada</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Kerala</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Marathi</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Marwadi</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Oriya</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Parsi</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Punjabi</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Rajasthani</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Sindhi</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Tamil</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Telugu</b></a>
	  <a class="nav-item nav-link link-body-emphasis active" href="#"><b>Urdu</b></a>
	    </nav>
	 
	    </div>
  </div>
  </div>
  </div>
  
    <div style="background-color:pink; height:700px;"> 

  
    <div class="container">
	<div class="pic">
  <div class="row">
  <div class="col-md-2 mt-5 ms-3">
   <img src="../matrimony/img/teklogo.png" width="200px" height="100px"/>
   </div>
    <div class="col-2 mt-5 float-start" style="margin-right:100px">
   <img src="../matrimony/img/25th.jpg" width="200px" height="100px"/>
   </div>
 <div class=" col-md-2 mt-5  text-center">
 <ul class="navbar-nav">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Browse Profiles By</strong>
			<div class="text-primary"></div>
          </a>
          <ul class="dropdown-menu bg-warning-subtle">
    
            <li><a class="dropdown-item" href="#">LogOut</a></li>
          </ul>
        </li>
		<ul>
 </div>
 
<div class=" col-md-2 mt-5  text-center">
 <ul class="navbar-nav">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Already a mamber?</strong>
			<div class="text-primary"></div>
          </a>
          <ul class="dropdown-menu bg-warning-subtle">
    
            <li><a class="dropdown-item" href="#">Yes</a></li>
			<li><a class="dropdown-item" href="#">No</a></li>
          </ul>
        </li>
		<ul>
 </div>

 <div class="col-md-2 mt-5">


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Popup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        /* Customize the login form styles */
        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }

        /* Customize the modal header and body styles */
        .modal-header, .modal-body {
            text-align: center;
        }

        /* Customize the modal footer styles */
        .modal-footer {
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
        </button>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="login-form">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p>Don't have an account? <a href="#">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

  </div>





  </div>
  </div>

  <div class="row">
  <div class="your"><h2>Your search for the perfect match here!<h2></div>
 
  <div class="mt-1"><h3>#Bechoosy with India's biggest matrimony service<h3></div>
 </div>
 <div class="row mt-3">
    <div class="row g-2">
  
  
  <div class="col-md mb-3">
    <div class="form-floating">

      <select class="form-select" id="floatingSelectGrid">
        <option selected>Matrimony Profiles For</option>
        <option value="1">Myself</option>
        <option value="2">Daughter</option>
        <option value="3">Brother</option>
		<option value="3">Sister</option>
		<option value="3">Son</option>
		<option value="3">Friend</option>
		<option value="3">Relatives</option>
      </select>
      <label for="floatingSelectGrid"><b>Select Profiles</b></label>
    </div>
  </div>
  
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="Enter Name">
      <label for="floatingInputGrid"><b>Name</b></label>
    </div>
  </div>
  
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid">
        <option value="1">Enter Gender</option>
        <option value="2">Male</option>
        <option value="3">Female</option>
      
      </select>
      <label for="floatingSelectGrid"><b>Gender</b></label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="+91 Enter mob.no">
      <label for="floatingInputGrid"><b>Mobile Number</b></label>
    </div>
  </div>
  
  <div class="col-md">
    <button type="button" class="btn btn-primary btn-lg px-4 mt-1">Register Free</button>
  </div>
  
  
  
</div>
 </div>
 <div class="col-md-4 offset-8">
  <p>By clicking register free,i agree to the <code>T&C</code> and <code>Privacy Policy</code>. </p>
  </div>
  	   <div class="text-center"><img src="../matrimony/img/hwed.jpg" width="250px" height="150px"/></div>

 </div>	

</div>	
	
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>