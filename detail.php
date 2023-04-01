<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Currency</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- This is for navigation bar -->
    <header class="header">

        <div class="header-2">
           <div class="flex">
           <a href="home.php" class="logo"><i class='fab fa-btc' style='font-size:24px'></i>  Crypto Currency</a>
     
              <nav class="navbar">
                 <a href="home.php">Home</a>
                 <a href="about.php">About</a>
                 <a href="search.php">Search</a>
                 <a href="feedback.php">Feedback</a>
              </nav>
     
              <div class="icons">
                 <a href="profile.php"><div class="fas fa-user"></div></a>
              </div>
     
              <div class="user-box">
                 <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                 <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                 <a href="logout.php" class="delete-btn">logout</a>
              </div>
           </div>
        </div>
     
     </header>

    <!-- This is the description section -->
    <section class="flex-container">
        <img src="./assets/images/logo.png" id="coin-logo" style="    display: flex;
        margin: auto;" alt="coin logo" class=" main-img">
        <div class="main-content">
            <h1 class="mb-1 color-blue" style="text-align: center;
            padding: 1rem;
            font-size: 5rem;" id="coin-name">....</h1>

            <div class="flex-container space-around mb-1" style="    display: flex;
            justify-content: space-around;
            font-size: 2rem;
            margin: 2rem;">
                <p>₹ <span id="inr-price" style="color:red;">...</span></p>
                <p>$ <span id="usd-price" style="color:yellow;">...</span></p>
                <p>€ <span id="eur-price" style="color:green;">...</span></p>
                <p>£ <span id="gbp-price" style="color:blue;">...</span></p>
            </div>

            <p style="text-align: center;
            padding: 1rem;
            font-size: 3rem;"><b>Discription:</b></p>
            <p id="coin-description" style="text-align: justify;
            font-size: 1.5rem;
            width: 85%;
            margin: auto;">.....</p>
        </div>
    </section>

    <!-- This is the price chart section -->
    <section class="ml-5 mr-5 price-chart-section">
        <h1 class="color-blue mb-1" style="text-align: center;
        padding: 1rem;
        font-size: 3rem;">Price History</h1>
        <div>
            <canvas id="myChart" width="100" height="25"></canvas>
          </div>
    </section>

     <!-- This is for the footer -->
     <section class="footer" style="    padding: 0;">

        <p class="credit"> &copy; copyright  | <?php echo date('Y'); ?> by <span>Crypto Currency</span> </p>
     
     </section>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/common.js?v=<?php echo time();?>"></script>
    <script src="./assets/js/detail.js?v=<?php echo time();?>"></script>
</body>
</html>