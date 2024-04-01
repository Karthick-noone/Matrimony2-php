<?php
session_start();
require(__DIR__ . '/matbase.php');
include('./head.php');
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Male</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<style>
    body {
        /* background-color:pink; */
        background-image: url(./img/bk1.jpg);

    }

    .card {
        background-color: rgb(265, 265, 265, 0.3);
        box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.3);
        padding: 0px;
        transition: transform 0.3s, box-shadow 0.3s;
        /* Add transitions for transform and box-shadow */
    }

    .card:hover {
        transform: scale(1.05);
        /* Increase the scale on hover */
        box-shadow: 5px 10px 20px rgba(20, 20, 20, 0.5);
        /* Adjust the shadow on hover */
    }

    .card:hover .card-title {
        color: Black;
        /* Change the text color on hover */
    }


    .hd {
        box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.2);
    }

    .hideee {
        display: none;

    }

    .myDIV:hover+.hideee {
        display: block;
        color: red;
        transition-duration: 0.8s;

    }

    .noulne {
        text-decoration: none;
    }



    /* Add styling to the card-container */
    .card-container {
        width: 100%;
    }

    .card-img-top:hover {
        position: relative;
    }

    /* header */




    .logo {
        width: 150px;
        float: right;
    }



    .icon {
        margin-right: 10px;
        font-size: 18px;
        width: 24px;
        text-align: center;
        color: #fff;
        /* Change text color to white */

    }

    .apple {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    /* ============================================ */
</style>


<body style="background-image: url('../img/ring.jpg'); min-height: 700px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
  <!-- Top Navbar -->
  <?php
    if(!isset($_SESSION['admin']))
    {
      ?>
      <script>
        window.location.href = "adlogin.php";
      </script>
      <?php
    }
    ?>


  <!-- Main Content Container -->
  
  <div id="main">
      <div class="apple">
      <div class="hi col-md-10">
    <!-- Your content goes here -->

  <?php
// Update the query to select male profiles
$res = $connect->prepare("SELECT * FROM wedding WHERE gender = 'male'");
$res->execute();

$count = 0;
echo '<div class="row">'; // Start the row

while ($row = $res->fetch()) {
    echo '<div class="col-md-6">'; // Start a column for each profile

    echo '<div class="card mt-5" style="border-radius: 25px;">';
    echo '<div class="d-flex">';
    echo '<div class="col-md-6">';
    echo '<a class="myDIV" href="maleview.php?idxyz=' . $row['id'] . '"><img class="card-img-top my-3 mx-3" src="img/' . $row['picture'] . '" alt="Card image cap" width="120px" height="170px" style="border-radius: 50%;"></a>';
    echo '<span class="hideee mx-3">Click This image to see your Profile</span>';
    echo '</div>';

    echo '<div class="card-body col-md-6">';
    echo '<h5 class="card-title mt-2 mx-3 fs-6"><b> Name</b><span class="text-primary display-6 fs-5">' . $row['name'] . '</span></h5>';
    echo '<h5 class="card-title mx-3 fs-6"><b> Gender</b><span class="text-primary display-6 fs-5">' . $row['gender'] . '</span></h5>';
    echo '<h5 class="card-title mx-3 fs-6"><b> DOB</b><span class="text-primary display-6 fs-5">' . $row['dob'] . '</span></h5>';
    echo '<form method="POST" action="selectmat.php">';
    echo '<input type="hidden" name="profile_id" value="' . $row['id'] . '">';
    echo '<button type="submit" class="btn btn-danger mx-3 delete-button">Delete</button>';
    echo '</form>';
    echo '</div>';

    echo '</div>';
    echo '</div>';

    echo '</div>'; // Close the column

    $count++;

    // Check if two profiles have been displayed, then close the row
    if ($count % 2 == 0) {
        echo '</div>'; // Close the row
        echo '<div class="row">'; // Start a new row
    }
}

// Close the last row if there are odd profiles
if ($count % 2 != 0) {
    echo '</div>';
}
?>

<script>
$(document).ready(function () {
    $('.delete-button').click(function () {
        var profileId = $(this).siblings('input[name="profile_id"]').val();

        if (confirm("Are you sure you want to delete this profile?")) {
            $.ajax({
                type: 'POST',
                url: 'delete_profile_ajax.php',
                data: {
                    profile_id: profileId
                },
                success: function (response) {
                    if (response === 'success') {
                        alert('Profile deleted successfully.');
                        location.reload(); // Refresh the page or update the UI
                    } else {
                        alert('Error: Unable to delete the profile.');
                    }
                },
                error: function () {
                    alert('An error occurred while processing the request.');
                }
            });
        }
    });
});
</script>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the profile_id from the AJAX request
    $profile_id = $_POST["profile_id"];

    // Prepare and execute a DELETE query to remove the record from the "wedding" table
    $deleteQuery = $connect->prepare("DELETE FROM wedding WHERE id = :profile_id");

    // Bind the parameter
    $deleteQuery->bindParam(':profile_id', $profile_id, PDO::PARAM_INT);

    // Execute the query
    if ($deleteQuery->execute()) {
        // echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>


</div>
</div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>