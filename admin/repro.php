<?php
  session_start();
      include('./head.php');
    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Sidebar Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
    font-family: "Lato", sans-serif;
    text-align: center;
}

ul {
            list-style: none; /* Remove list-style dots from all unordered lists */
        }

#main {
    transition: margin-left .5s;
    padding: 16px;
    align-items: center;
}



</style>
</head>
<body style="background-image: url('img/t1.jpg'); min-height: 900px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
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

    <div id="main">
    <h1>Welcome to Our Matrimony Service</h1>
        <p>Your Perfect Partner Awaits</p>

        <section>
            <article class="intro">
                <h2>About Us</h2>
                <p>In recent times, our online matrimony service has revolutionized the way people find their life partners. We provide a platform for individuals to connect and share matrimonial information more conveniently and selectively.</p>
            </article>

            <article>
                <h2>Our Services</h2>
                <ul>
                    <li>Free Registration</li>
                    <li class="mt-1">Premium Membership</li>
                    <li class="mt-1">E-Matchmaking</li>
                    <li class="mt-1">Online Chatting</li>
                    <li class="mt-1">Email/SMS Alerts</li>
                    <li class="mt-1">Personalized Services</li>
                    <li class="mt-1">Community-Specific Search</li>
                    <li class="mt-1">Horoscope Matching</li>
                </ul>
            </article>

            <article class="user-stats">
                <h2>User Statistics</h2>
                <p>Join our community of millions of users who have successfully found their life partners through our platform.</p>
                <p>Over 5 million marriages in the last decade</p>
                <p>10,000+ new registrations daily</p>
            </article>
        </section>
    </div>

   
    
</body>
</html>
