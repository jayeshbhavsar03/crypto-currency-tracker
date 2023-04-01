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
    <title>Search Any Crypto Currency Inforamtion</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

    <style>
    .se {
        width: 70%;
        height: 4rem;
        padding: 1rem;
        font-size: 2rem;
        border: 1px solid;
        margin: 2rem;
    }

    .sb {
        width: 9%;
        height: 4rem;
        padding: 1rem;
        font-size: 1.8rem;
        border: 1px solid;
        margin: 8px;
    }

    a {
        height: 3rem;
        padding: 0.5rem;
        font-size: 1.4rem;
        border: 1px solid #000;
        color: #000;
    }

    .card {
        display: flex;
        justify-content: space-around;
        margin: 2rem;
        padding: 1rem;
        border: 1px solid;
        align-items: center;
    }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>



    <section class="products">

        <h1 class="title">Search Any Crypto Currency Inforamtion</h1>

        <div class="box-container">
            <div class="search-input-container mt-1">
                <form action="" method="GET">
                    <input type="text" class="se" placeholder="Enter Coin Name" name="q">
                    <input type="submit" class="sb" value="Search">
                </form>
            </div>

            <hr>

            <div class="search-result-container mt-1" id="search-result">

            </div>
        </div>


    </section>






    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="./assets/js/common.js?v=<?php echo time();?>"></script>
    <script src="./assets/js/search.js?v=<?php echo time();?>"></script>
    <script src="js/script.js"></script>

</body>

</html>