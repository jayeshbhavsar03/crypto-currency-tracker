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

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'header.php'; ?>

    <section class="home">

        <div class="content">
            <h3>Get any Inforamtion about <span style="color:var(--red);">Crypto Currency</span> <br> in second.</h3>
        </div>

        <style>
        .flex-item-small {
            min-width: 10%;
            
    padding: 1rem;
    border: 4px solid #000;
    background: white;
    color: var(--red);
    border-radius: 1rem;
    margin:0.5rem;
        }
        p{
            color: red;
        }
        </style>
    </section>

    <section class="products">

        <h1 class="title">Top Coins Current</h1>

        <div class="box-container" style="display: flex;justify-content: center;" id="coins_container">


        </div>

    </section>






    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="./assets/js/common.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="js/script.js"></script>

</body>

</html>