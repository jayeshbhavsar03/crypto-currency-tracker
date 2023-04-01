<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

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