<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select matrimony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
    <?php require(__DIR__ . '/matbase.php');?>
	<div class="container-fluid">
    
        <div class="row bg-secondary-subtle">
            <div class="mt-3">
                <div class="nav-scroller py-1 mb-5 mt-3 border-bottom">
                    <nav class="nav justify-content-between" style="font-size: 12px">
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
    
  <div class="mt-3">
    <div class="bg-danger-subtle">
  <center>
	<h1>Tek matrimony</h1>
</div>
	<hr>
	<br><br><br>
	</center>
	</div>

<table class="table table-bordered">
<tr class="table-secondary">
<th>SI.NO</th>
<th>id</th>
<th>select</th>
<th>name</th>
<th>gender</th>
<th>mobile</th>
<th>dob</th>
<th>religion</th>
<th>mother</th>
<th>email</th>
<th>password</th>
<th>caste</th>
<th>subcaste</th>
<th>gothram</th>
<th>suddha</th>
<th>marital</th>
<th>childrens</th>
<th>living</th>
<th>famstatus</th>
<th>famtype</th>
<th>famvalue</th>
<th>disability</th>
<th>highestedu</th>
<th>education</th>
<th>employed</th>
<th>occupation</th>
<th>annual</th>
<th>amount</th>
<th>location</th>
<th>state</th>
<th>comments</th>
<th>picture</th>
<th>randmcd</th>

</tr>
<?php

$res=$connect->prepare("select * from wedding");
$res->execute();
$sl=0;
while($row=$res->fetch())
{
	$sl++;
	?>
        <tr>
        <td><?php print $sl;?></td>
        <td><?php print $row['id']?></td>
        <td><?php print $row['select']?></td>
        <td><?php print $row['name']?></td>
        <td><?php print $row['gender']?></td>
        <td><?php print $row['mobile']?></td>
        <td><?php print $row['dob']?></td>
        <td><?php print $row['religion']?></td>
        <td><?php print $row['mother']?></td>
        <td><?php print $row['email']?></td>
        <td><?php print $row['password']?></td>
        <td><?php print $row['subcaste']?></td>
        <td><?php print $row['gothram']?></td>
        <td><?php print $row['suddha']?></td>
        <td><?php print $row['marital']?></td>
        <td><?php print $row['childrens']?></td>
        <td><?php print $row['living']?></td>
        <td><?php print $row['famstatus']?></td>
        <td><?php print $row['famtype']?></td>
        <td><?php print $row['famvalue']?></td>
        <td><?php print $row['disability']?></td>
        <td><?php print $row['highestedu']?></td>
        <td><?php print $row['highestedu']?></td>
        <td><?php print $row['education']?></td>
        <td><?php print $row['employed']?></td>
        <td><?php print $row['occupation']?></td>
        <td><?php print $row['annual']?></td>
        <td><?php print $row['amount']?></td>
        <td><?php print $row['location']?></td>
        <td><?php print $row['state']?></td>
        <td><?php print $row['comments']?></td>
        <td><?php print $row['picture']?></td>
        <td><?php print $row['randmcd']?></td>
		</tr>
<?php
}
?>

</table>
		
		
		
		
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>