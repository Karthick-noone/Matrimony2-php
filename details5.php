<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Details5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
  .bg {
    background-color: pink;
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
<body style="background-image: url('img/bgwed.jpg'); min-height: 750px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
<?php require(__DIR__ .'/matbase.php');?>
  <div class="container-fluid col-lg-12 col-sm-12 col-md-8 col-xl-10">
    <div class="row">
      <div class="col-md-12">
        <div class="text-start mt-4 ">
          <img src="img/tek_matrimony_logo.png" width="200px" height="100px" alt="Logo">
        </div>
        <div class="text-center">
          <h5>Great! You have completed <span class="fs-3">80%</span></h5>
        </div>
      </div>
    </div>
    <div class="bg px-3">
      <div class="row mt-0">
        <div class="col-lg-4 mt-3 mb-3">
          <img src="img/iml1.jpg" width="360px" height="500px" alt="Professional Image">
        </div>
        <div class="col-lg-8 mt-3">
          <h4>Professional details help us to find the best companion.</h4>
          <form>
            <div class="row mt-3">
              <div class="col-md-6">
                <!-- Highest Education -->
                <div class="mb-3">
                  <label for="highestEducation" class="form-label">
                    <h6>Highest education</h6>
                  </label>
                  <select id="hedu" class="form-select">
                    <option selected disabled>Choose...</option>
                    <option>B.E</option>
                    <option>B.Tech</option>
                    <option>B.Sc</option>
                    <option>BCA</option>
                  </select>
                </div>
                <!-- Education in Detail -->
                <div class="mb-3">
                  <label for="educationDetail" class="form-label">
                    <h6>Education in Detail</h6>
                  </label>
                  <select id="educa" class="form-select">
                    <option selected disabled>Choose...</option>
                    <option>Government</option>
                    <option>Private</option>
                    <option>Others</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <!-- Employed In -->
                <div class="mb-3">
                  <label for="employedIn" class="form-label">
                    <h6>Employed in</h6>
                  </label>
                  <select id="employe" class="form-select">
                    <option selected disabled>Choose...</option>
                    <option>Self Employed</option>
                    <option> Media and News</option>
                    <option>Entertainment</option>
                  </select>
                </div>
                <!-- Occupation -->
                <div class="mb-3">
                  <label for="occupation" class="form-label">
                    <h6>Occupation</h6>
                  </label>
                  <select id="occupa" class="form-select">
                    <option selected disabled>Choose...</option>
                    <option>Businessman</option>
                    <option>Doctor</option>
                    <option>Engineer</option>
                    <option>Police</option>
                    <option>Pilot</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- Annual Income -->
            <div class="mb-3">
              
              <div class="row">
                <div class="col-md-6">
                <label for="annualIncome" class="form-label">
                <h6>Currency Type</h6>
              </label>
                  <select id="money" class="form-select">
                    <option selected disabled>Currency Type</option>
                    <option>Dollar</option>
                    <option>Rupees</option>
                    <option>Euro</option>
                    <option>Yen</option>
                  </select>
                </div>
                
                <div class="col-md-6">
                <label for="annualIncome" class="form-label">
                <h6>Annual Income</h6>
              </label>
                  <select id="annual" class="form-select">
                    <option selected disabled>Amount</option>
                    <option>0-1 lakhs</option>
                    <option>1-2 lakhs</option>
                    <option>2-3 lakhs</option>
                    <option>3-4 lakhs</option>
                    <option>4-5 lakhs</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <!-- Work Location -->
                <div class="mb-3">
                  <label for="workLocation" class="form-label">
                    <h6>Work Location</h6>
                  </label>
                  <select id="work" class="form-select">
                    <option selected disabled>Choose...</option>
                    <option>USA</option>
                    <option>UK</option>
                    <option>India</option>
                    <option>China</option>
                    <option>Malaysia</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <!-- State -->
                <div class="mb-3">
                  <label for="state" class="form-label">
                    <h6>State</h6>
                  </label>
                  <select id="state" class="form-select">
                    <option selected disabled>Choose...</option>
                    <option>Tamil Nadu</option>
                    <option>Kerala</option>
                    <option>Karnataka</option>
                    <option>Andhra</option>
                    <option>Maharastra</option>
                  </select>
                </div>
              </div>
            </div> 
            <div class="text-center">
              <button type="button" onclick="update()" class="btn btn-primary btn-lg mt-4">Continue</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
function update()
{
  var hedu2 = document.getElementById("hedu").value;
        var educa2 = document.getElementById("educa").value;
        var employe2 = document.getElementById("employe").value;
        var occupa2 = document.getElementById("occupa").value;
        var money2 = document.getElementById("money").value;
        var annual2 = document.getElementById("annual").value;
        var work2 = document.getElementById("work").value;
        var state2 = document.getElementById("state").value;

        // Check if any of the fields are empty
        if (hedu2 === 'Choose...' || educa2 === 'Choose...' || employe2 === 'Choose...' || occupa2 === 'Choose...' ||
            money2 === 'Currency Type' || annual2 === 'Amount' || work2 === 'Choose...' || state2 === 'Choose...') {
            alert("Please fill in all fields");
            return; // Exit the function if any field is not selected
        }

        $.ajax({
            url: "details5insert.php",
            data: {
                uphedu2: hedu2,
                upeduca2: educa2,
                upemploye2: employe2,
                upoccupa2: occupa2,
                upmoney2: money2,
                upannual2: annual2,
                upwork2: work2,
                upstate2: state2
            },
            type: "POST",
            success: function (submit) {
              if (submit === "success") {
                alert("Data updated successfully. Proceed to next page!");
                window.location.href = "completed6.php";
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