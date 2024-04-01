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
    <title>Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
  
/* ================================================ */
.card {
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.3);
    padding: 0px;
  transition: transform 0.3s, box-shadow 0.3s;
  }
  .card:hover {
  transform: scale(1.05);
  box-shadow: 5px 10px 20px rgba(20, 20, 20, 0.5); 
}

.card:hover .card-title {
  color: Black; 
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
 /* .content {
    margin-left: 200px;
    padding: 20px;
  } */

  /* .card-container {
    width: 100%;
  } */
  /* .card-img-top:hover {
    position: relative;
} */
table {
  border-collapse: collapse;
  width: 100%;
}

table th {
  color: black;
  text-align: left;
  font-size:35px;
}


table th:nth-child(2) {
    /* padding: 0 20px; Add padding to separate the columns */
  }
/* Style the table data cells */
table td {
  /* padding: 30px; */
}

.profile-details {
  /* display: flex; */
  align-items: center;

}

.profile-image {
  /* flex: 0 0 150px; */
  /* padding: 20px; */
  

}

.profile-image img {
  width: 150px;
  height: 150px;
  border-radius: 20px;
  
}

.profile-info {
  flex: 1;
  padding: 0px;
  width: 150px;
}


.profile-info h5 {
  font-size: 18px;
  margin: 0;
  
}

.profile-info p {
  font-size: 16px;
  margin: 0px 5px;
  
}

.hideee {
  display: none;
}

.myDIV {
  text-decoration: none;
  color: #333;
  display: block;
  position: relative;
}

.myDIV:hover .hideee {
  display: block;
  color: red;
  transition-duration: 0.8s;
}
.apple {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        /* Ensure it spans the full viewport height */
    }
th.large-arrow {
        /* Center the content vertically and horizontally */
        display: flex;
        align-items: left;
        justify-content: left;
        margin-right: 50px;
    }
</style>
</head>
<body style="background-image: url('../img/ring.jpg'); min-height: 700px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">

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

<!-- Main Content -->
<div id="main" class="apple">
<div class="col-md-10"  >
<table>
<tr>
  <th>Request From</th>
  <th class="large-arrow">&#10148;</th>
  <th>Request To</th>
</tr>
<!-- OR -->


<?php
$res = $connect->prepare("SELECT r.*, w1.picture AS req_from_picture, w1.name AS req_from_name, w1.gender AS req_from_gender, w1.dob AS req_from_dob, w1.mobile AS req_from_mobile, w2.picture AS req_to_picture, w2.name AS req_to_name, w2.gender AS req_to_gender, w2.dob AS req_to_dob, w2.mobile AS req_to_mobile
                       FROM request r
                       LEFT JOIN wedding w1 ON r.req_from = w1.email
                       LEFT JOIN wedding w2 ON r.req_to = w2.email");
$res->execute();
// $sl = 0;
while ($row = $res->fetch()) {
  // $sl++;
?>
<tr>
  <!-- <td><?php print $sl; ?></td> -->
  <td>
<div class="d-flex profile-details">
  <div class="profile-image">
  <a href="requestview.php?idxyz=<?php echo $row['id']; ?>&email=<?php echo $row['req_from']; ?>">
          <img class="card-img-top my-3 mx-3" src="img/<?php echo $row['req_from_picture']; ?>"
              alt="Card image cap" width="150px" height="150px" style="border-radius: 50%;">
          <span class="hideee mx-3">Click This image to see your Profile</span>
      </a>
  </div>
  <div class="profile-info">
      <h5><?php echo $row['req_from_name']; ?></h5>
      <p>Gender: <?php echo $row['req_from_gender']; ?></p>
      <p>DOB: <?php echo $row['req_from_dob']; ?></p>
      <p>Mobile: <?php echo $row['req_from_mobile']; ?></p>
  </div>
</div>
</td>
<td><div class="large-arrow">&#10148;</div></td>
<td>
<div class="d-flex profile-details">
  <div class="profile-image">
  <a href="requestview.php?idxyz=<?php echo $row['id']; ?>&email=<?php echo $row['req_to']; ?>">
          <img class="card-img-top my-3 mx-3" src="img/<?php echo $row['req_to_picture']; ?>"
              alt="Card image cap" width="150px" height="150px" style="border-radius: 50%;">
          <span class="hideee mx-3">Click This image to see your Profile</span>
      </a>
  </div>
  <div class="profile-info">
      <h5><?php echo $row['req_to_name']; ?></h5>
      <p>Gender: <?php echo $row['req_to_gender']; ?></p>
      <p>DOB: <?php echo $row['req_to_dob']; ?></p>
      <p>Mobile: <?php echo $row['req_to_mobile']; ?></p>
  </div>
</div>
</td>

</tr>
<?php
}
?>
</table>

</div>
</div>


</body>
</html>
