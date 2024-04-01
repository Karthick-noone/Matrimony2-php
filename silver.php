<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Special offer</title>
</head>
<link rel="stylesheet" href="css/style-maha2w.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
<?php
if(!isset($_SESSION['loger']))
{
?>
<script>
   window.location.href="index.php";
   </script>
<?php
}
?>
<body style="background-image: url('img/paybg1.jpg'); min-height: 750px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
    <div class="header card container-fluid">
    <div>
    <img src="img/tek_matrimony_logo.png" class="log container-fluid" /><a href="#default" class="logo">upgrade now</a>     <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#skipModal">Skip <img src="img/icons8-fast-forward-30.png" width="20px" alt=""></button>
</div>
    </div>


    <br>
    <center>
    <section>
    <div>
        <h2><b> <img src="img/google-pay.png" width="40px" alt="">&nbsp;&nbsp;&nbsp;<img src="img/paytm.png" width="40px" alt="">&nbsp;&nbsp;&nbsp;<img src="img/amazon-pay.png" width="40px" alt="">&nbsp;&nbsp;&nbsp;Pay now to contact matches </b</h2>
    </div><br>
    </section>
    <section>
    <div id="aaa">
        <p><span style="color: orange;">&#x2713;</span>Send <b>unlimited messages</b> & <b> chat </b> view <b> 40 verified mobile numbers </b></p>
        <p><span style="color: orange;">&#x2713;</span>check <b>compatibility </b> with matches by viewing <b> unlimited horoscope </b></p>
        <p class="text-muted">&#10006; <del> View and contact ID verified matches with photos from exclusive Prime section</del></p>
        <p class="text-muted">&#10006; <del> Priority customer service helpline</del></p>
    </div>
    </section><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
            <div class="card card1 border-silver" style="width: 30rem; height: 200px;">
                <div class="card-header">
                    <b>confirm your payment</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">1 months</li>
                  <li class="list-group-item text-success"><b>SAVE 8%</b></li>
                  <li class="list-group-item text-muted"> <b><button type="button" class="btn btn-warning" onclick="pl()"> Proceed<img src="img/rupee.png" width="20px" alt="">299</button></a></b></li>
                </ul>
              </div>
            </div>
          </div>
</div>
        
    <!-- Skip Button -->
   
    <!-- Modal -->
    <div class="modal fade" id="skipModal" tabindex="-1" aria-labelledby="skipModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="skipModalLabel">Skip Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to skip?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="admin8.php" class="btn btn-info">Skip</a>
                </div>
            </div>
        </div>
  
        </section>
        <br>  <br>
        </center>
        <h6 class="ccc"><b>Offer Valid only today!</b></h6><br>
</body>
<script>
    function pl(){


    }
    </script>
</html>