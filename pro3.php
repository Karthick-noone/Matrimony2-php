<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pro3</title>
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
    <div class="container-fluid  col-lg-12 col-sm-6 col-md-10 col-xl-12">
        <div class="row">
            <div class="col-lg-12 mx-2">
                <div class="text-start container-fluid mx-2">
                    <img src="img/tek_matrimony_logo.png" width="200px" height="100px" alt="Logo">
                </div>
                <div class="text-center">
                    <h5>Great! You have completed <span class="fs-3">40%</span></h5>
                </div>
            </div>
        </div>
        <div class="container-fluid col-lg-12 col-sm-6 col-md-8 col-xl-10" style="background-color: pink;">
            <div class="row mt-0">
                <div class="col-lg-4 mt-3">
                    <img src="img/iml1.jpg" width="350px" height="470px" alt="Image">
                </div>
                <div class="col-lg-6 col-md-10 col-sm-6 mt-3">
                    <h3>Religion details can help us find the right match.</h3>
                    <form>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">
                                <h6>Caste</h6>
                            </label>
                            <select id="caste" class="form-select">
                                <option selected disabled>Choose...</option>
                                <option>BC</option>
                                <option>OC</option>
                                <option>MBC</option>
                                <option>SC</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="will">
                                <label class="form-check-label" for="gridCheck">
                                    Willing to marry from other communities also
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputState" class="form-label">
                                <h6>SubCaste</h6>
                            </label>
                            <select id="sub" class="form-select">
                                <option selected disabled>Choose...</option>
                                <option>Christian</option>
                                <option>Hindu</option>
                                <option>Islam</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail3" class="col-form-label">
                                <h6>Gothram</h6>
                            </label>
                            
                            <select class="form-select" id="goth">
                  <option selected disabled value="">Choose...</option>
                  <option value="Dont Know">Don't Know</option>
                  <option value="Not Interested">Not Interested</option>
                  <option value="Kaushika">Kaushika</option>
                  <option value="Audala">Audala</option>
                  <option value="Angirasa">Angirasa</option>
                  <option value="Atri">Atri</option>
                  <option value="Aatreya">Aatreya</option>
                  <option value="Bharadwaj">Bharadwaj</option>
                  <option value="Bhargava">Bhargava</option>
                  <option value="Bhrigu">Bhrigu</option>
                  <option value="Brihadbala">Brihadbala</option>
                  <option value="Chandratre">Chandratre</option>
                  <option value="Dhananjaya">Dhananjaya</option>
                  <option value="Garg">Garg</option>
                  <option value="Gautam">Gautam</option>
                  <option value="Harinama">Harinama</option>
                  <option value="Haritasya">Haritasya</option>
                  <option value="Kadam">Kadam</option>
                  <option value="Kaundinya">Kaundinya</option>
                  <option value="Manu">Manu</option>
                  <option value="Marichi">Marichi</option>
                  <option value="Meena">Meena</option>
                  <option value="Parashar">Parashar</option>
                  <option value="Sandilya">Sandilya</option>
                  <option value="Shiva(Shiv-adi)">Shiva(Shiv-adi)</option>
                  <option value="Siwal">Siwal</option>
                  <option value="Upamanyu">Upamanyu</option>
                  <option value="Upreti">Upreti</option>
                  <option value="Vashista">Vashista</option>
                  <option value="Vishnu">Vishnu</option>
                  <option value="Vishvamitra">Vishvamitra</option>
                  <option value="Yadav">Yadav</option>
                  <option value="Jamadagni">Jamadagni</option>
                  <option value="Kashyapa">Kashyapa</option>
                  <option value="no" style="color: rgb(102, 102, 102);">Show more gothras</option>
                </select>
                        </div>
                        <div class="mb-3">
                            <h6 class="mb-0" id="suddha">Suddha Jadhagam:</h6>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="sjd" id="sjdYes" value="Yes" autocomplete="off">
                                <label class="form-check-label" for="sjdYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="sjd" id="sjdNo" value="No" autocomplete="off">
                                <label class="form-check-label" for="sjdNo">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="sjd" id="sjdDontKnow" value="Dont-know" autocomplete="off">
                                <label class="form-check-label" for="sjdDontKnow">Don't know</label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <center>
                                <button type="button" onclick="con()"
                                    class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function con() {
                var caste2 = document.getElementById("caste").value;
                 var sub2 = document.getElementById("sub").value;
                var goth2 = document.getElementById("goth").value;

                var sjdYes = document.getElementById("sjdYes");
                 var sjdNo = document.getElementById("sjdNo");
                var sjdDontKnow = document.getElementById("sjdDontKnow");

                var Suddha = "";
                if (sjdYes.checked) {
        Suddha = sjdYes.value;
    } else if (sjdNo.checked) {
        Suddha = sjdNo.value;
    } else if (sjdDontKnow.checked) {
        Suddha = sjdDontKnow.value;
    }

      // Check if any of the essential fields is empty
      if (caste2 === '' || sub2 === '' || goth2 === '' || Suddha === '') {
        alert("Please fill in all essential fields");
        return; // Exit the function if any essential field is empty
    }

    $.ajax({
        url: "pro3insert.php",
        data: {
            cocaste2: caste2,
            cosub2: sub2,
            cogoth2: goth2,
            cosuddha2: Suddha
        },
        type: "POST",
        success: function (submit) {
            if (submit === "success") {
                alert("Data updated successfully. Proceed to next page!");
                window.location.href = "regis4.php";
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