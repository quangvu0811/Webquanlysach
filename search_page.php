
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id )){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search</title>

    <!-- link font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php  include 'header.php' ?>

   <div class="heading">
   <h3>search page</h3>
   <p> <a href="home.php">home</a> / search </p>
</div>

<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search" placeholder="Tìm kiếm..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>










   <?php include  'footer.php' ?>
   <!-- link JS -->
   <script src="js/scrip1.js"></script>
</body>
</html>