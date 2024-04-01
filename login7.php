<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-start mt-5">
                    <img src="../matrimony/img/teklogo.png" width="200px" height="100px" alt="Logo">
                </div>
                <div class="text-end mb-0">
                    <h5>Great! You have completed.</h5>
                </div>
                <div class="text-center">
                    <h2>welcome to user panel</h2>
                </div>
                <div class="row bg-warning">
                    <div class="text-success text-center">
                        <h1>Special offer</h1>
                    </div>
                </div>
                <div>
                </div>
                <p>
                <h3>Pay now to contact maches</h3>
                </p>


                <style>
                    /* Style the button tick */
                    .checkbox {
                        display: inline-block;
                        width: 20px;
                        height: 20px;
                        background-color: #eee;
                        border: 1px solid #ccc;
                        cursor: pointer;
                        text-align: center;
                        line-height: 18px;
                        font-weight: bold;
                    }

                    .checked {
                        background-color: green;
                        color: white;
                    }
                </style>


                <ul>
                    <li>
                        <div class="checkbox" onclick="toggleCheckbox(this)">&#10003;</div>
                        Send unlimited messages & chats
                    </li>
                    <li>
                        <div class="checkbox" onclick="toggleCheckbox(this)">&#10003;</div>
                        View 40 verified mobile numbers
                    </li>
                    <li>
                        <div class="checkbox" onclick="toggleCheckbox(this)">&#10003;</div>
                        Check compatibility with matches by viewing unlimited horoscopes
                    </li>
                </ul>

                <style>
                    /* Style the cancel button */
                    .cancel {
                        display: inline-block;
                        width: 20px;
                        height: 20px;
                        background-color: #eee;
                        border: 1px solid #ccc;
                        cursor: pointer;
                        text-align: center;
                        line-height: 18px;
                        font-weight: bold;
                    }

                    .canceled {
                        background-color: red;
                        color: white;
                    }
                </style>


                <ul>
                    <li>
                        <div class="cancel" onclick="toggleCancel(this)">❌</div>
                        View and contact ID verified matches with photos from exclusive prime section
                    </li>
                    <li>
                        <div class="cancel" onclick="toggleCancel(this)">❌</div>
                        Priority customer service helpline
                    </li>
                </ul>

                <script>
                    function toggleCancel(cancelButton) {
                        cancelButton.classList.toggle("canceled");
                    }
                </script>



                <script>
                    function toggleCheckbox(checkbox) {
                        checkbox.classList.toggle("checked");
                    }
                </script>

            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>