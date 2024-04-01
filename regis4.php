<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regis4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .pic {
            text-align: start;
            margin-top: 20px;
        }

        .great {
            text-align: right;
            margin-top: 20px;
        }

        .bg {
            background-color: pink;
        }

        .image-container {
            padding: 20px;
        }

        .form-container {
            padding: 20px;
        }
    </style>
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
    <div class="container-fluid col-lg-10 col-sm-6 col-md-8 col-xl-10">
        <div class="row">
            <div class="col-lg-12">
                <div class="pic">
                    <img src="img/tek_matrimony_logo.png" width="200px" height="100px" alt="Logo">

                    <h5 class="text-center">Great! You have completed <span class="fs-3">60%</span></h5>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="row">
                <div class="col-lg-4 mt-1 image-container">
                    <img src="img/iml1.jpg" width="360px" height="500px" alt="Image">
                </div>
                <div class="col-lg-8 form-container">
                    <h3 class="text-center">Tell us about your relative's personal details.</h3>
                    <form>
                        <!-- Marital Status -->



                        <script>
                            function mrsts1(status) {
                const buttons = document.querySelectorAll('.aa');
                buttons.forEach(button => button.classList.remove('active'));
                event.target.classList.add('active');
                // Here you can do something with the selected marital status 'status'
                console.log('Selected Marital Status:', status);
                document.getElementById('mrgstatus').value = status;

                // Check if "Never Married" is selected, and hide/show relevant sections
                if (status === 'Never Married') {
                    document.getElementById('nofchilContainer').style.display = 'none';
                    document.getElementById('chilstaContainer').style.display = 'none';
                    document.getElementById('nofchil').disabled = true;
                    document.getElementById('chilsta').disabled = true;
                } else {
                    document.getElementById('nofchilContainer').style.display = 'block';
                    document.getElementById('chilstaContainer').style.display = 'block';
                    document.getElementById('nofchil').disabled = false;
                    document.getElementById('chilsta').disabled = false;
                }
            }

                        </script>

                        <!-- Marital Status -->
        <div class="mb-2">
            <h6>Marital status:</h6>
            <input type="hidden" id="mrgstatus" />
            <div class="btn-group" id="MS" aria-label="Family Values">
                <button type="button" class="btn btn-outline-primary btn-md aa"
                    onclick="mrsts1('Never Married')">Never Married</button>
                <button type="button" class="btn btn-outline-primary btn-md aa"
                    onclick="mrsts1('Widowed')">Widowed</button>
                <button type="button" class="btn btn-outline-primary btn-md aa"
                    onclick="mrsts1('Divorced')">Divorced</button>
                <button type="button" class="btn btn-outline-primary btn-md aa"
                    onclick="mrsts1('Awaiting Divorce')">Awaiting Divorce</button>
            </div>
        </div>

                        <!-- No. of Children -->


                        <script>
                            function nofchil2(status) {
                                const buttons = document.querySelectorAll('.bb');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected No.of Childrens 'status'
                                console.log('Selected No.of Childrens:', status);
                                document.getElementById('nofchil').value = status;
                            }
                        </script>


        <!-- No. of Childrens -->
        <div class="mb-2" id="nofchilContainer"  style="display:none">
            <h6>No.of Childrens:</h6>
            <input type="hidden" id="nofchil" />
            <div class="btn-group" id="NOC" aria-label="Family Values">
                <button type="button" class="btn btn-outline-primary btn-md bb"
                    onclick="nofchil2('None')">None</button>
                <button type="button" class="btn btn-outline-primary btn-md bb"
                    onclick="nofchil2('1')">1</button>
                <button type="button" class="btn btn-outline-primary btn-md bb"
                    onclick="nofchil2('2')">2</button>
                <button type="button" class="btn btn-outline-primary btn-md bbb"
                    onclick="nofchil2('3')">3</button>
                <button type="button" class="btn btn-outline-primary btn-md bb"
                    onclick="nofchil2('4and above')">4and above</button>
            </div>
        </div>


                        <!-- Children Living Status -->

                        <script>
                            function chilsta3(status) {
                                const buttons = document.querySelectorAll('.cc');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Children Living Status 'status'
                                console.log('Selected Children Living Status:', status);
                                document.getElementById('chilsta').value = status;
                            }
                        </script>

                                 <!-- Children Living Status -->
        <div class="mb-2" id="chilstaContainer" style="display:none">
            <h6>Children Living Status:</h6>
            <input type="hidden" id="chilsta" />
            <div class="btn-group" id="CLS" aria-label="Family Values">
                <button type="button" class="btn btn-outline-primary btn-md cc"
                    onclick="chilsta3('Children living with me')">Children living with me</button>
                <button type="button" class="btn btn-outline-primary btn-md cc"
                    onclick="chilsta3('Children not living with me')">Children not living with me</button>
            </div>
        </div>


                        <!-- Family Status -->

                        <script>
                            function famsta4(status) {
                                const buttons = document.querySelectorAll('.dd');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Family Status 'status'
                                console.log('Selected Family Status:', status);
                                document.getElementById('famsta').value = status;
                            }
                        </script>

                        <div class="mb-2">
                            <h6>Family Status:</h6>
                            <input type="hidden" id="famsta" />
                            <div class="btn-group" id="FS" aria-label="Family Values">
                                <button type="button" class="btn btn-outline-primary btn-md dd"
                                    onclick="famsta4('Middleclass')">Middleclass</button>
                                <button type="button" class="btn btn-outline-primary btn-md dd"
                                    onclick="famsta4('Upper Middleclass')">Upper Middleclass</button>
                                <button type="button" class="btn btn-outline-primary btn-md dd"
                                    onclick="famsta4('Affluent')">Affluent</button>
                            </div>

                        </div>

                        <!-- Family Type -->

                        <script>
                            function famty5(status) {
                                const buttons = document.querySelectorAll('.ee');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Family Type 'status'
                                console.log('Selected Family Type:', status);
                                document.getElementById('famty').value = status;
                            }
                        </script>

                        <div class="mb-2">
                            <h6>Family Type:</h6>
                            <input type="hidden" id="famty" />
                            <div class="btn-group" id="FT" aria-label="Family Values">
                                <button type="button" class="btn btn-outline-primary btn-md ee"
                                    onclick="famty5('Joint')">Joint</button>
                                <button type="button" class="btn btn-outline-primary btn-md ee"
                                    onclick="famty5('Nuclear')">Nuclear</button>

                            </div>

                        </div>

                        <!-- Family Values -->

                        <script>
                            function famval6(status) {
                                const buttons = document.querySelectorAll('.ff');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');


                                document.getElementById('famval').value = status;
                            }
                        </script>

                        <div class="mb-2">
                            <h6>Family Values:</h6>
                            <input type="hidden" id="famval" />
                            <div class="btn-group" id="FV" aria-label="Family Values">
                                <button type="button" class="btn btn-outline-primary btn-md ff"
                                    onclick="famval6('Orthodox')">Orthodox</button>
                                <button type="button" class="btn btn-outline-primary btn-md ff"
                                    onclick="famval6('Traditional')">Traditional</button>
                                <button type="button" class="btn btn-outline-primary btn-md ff"
                                    onclick="famval6('Moderate')">Moderate</button>
                                <button type="button" class="btn btn-outline-primary btn-md ff"
                                    onclick="famval6('Liberal')">Liberal</button>
                            </div>

                        </div>

                        <!-- Any Disability -->

                        <script>
                            function any7(status) {
                                const buttons = document.querySelectorAll('.gg');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Any Disability 'status'
                                console.log('Selected Any Disability:', status);
                                document.getElementById('any').value = status;
                            }
                        </script>

                        <div class="mb-2">
                            <h6>Any Disability:</h6>
                            <input type="hidden" id="any" />
                            <div class="btn-group" id="AD" aria-label="Family Values">
                                <button type="button" class="btn btn-outline-primary btn-md gg"
                                    onclick="any7('None')">None</button>
                                <button type="button" class="btn btn-outline-primary btn-md gg"
                                    onclick="any7('Physically challenged')">Physically challenged</button>

                            </div>

                        </div>

                        <br>

                        <div class="col-md text-center">
                            <button type="button" onclick="update()"
                                class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function update() {
                var mrgstatus2 = document.getElementById("mrgstatus").value;
                var nofchil2 = document.getElementById("nofchil").value;
                var chilsta2 = document.getElementById("chilsta").value;
                var famsta2 = document.getElementById("famsta").value;
                var famty2 = document.getElementById("famty").value;
                var famval2 = document.getElementById("famval").value;
                var any2 = document.getElementById("any").value;

                if (mrgstatus2 === '' || (mrgstatus2 !== 'Never Married' && (nofchil2 === '' || chilsta2 === '')) ||
                    famsta2 === '' || famty2 === '' || famval2 === '' || any2 === '') {
                    alert("Please fill in all fields");
                    return; // Exit the function if any required field is empty
                }

                $.ajax({
                    url: "regis4insert.php",
                    data: {
                        upmrgstatus2: mrgstatus2,
                        upnofchil2: nofchil2,
                        upchilsta2: chilsta2,
                        upfamsta2: famsta2,
                        upfamty2: famty2,
                        upfamval2: famval2,
                        upany2: any2
                    },
                    type: "POST",
                    success: function (submit) {
                        if (submit === "success") {
                alert("Data updated successfully. Proceed to next page!");
                window.location.href = "details5.php";
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