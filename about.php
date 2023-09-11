
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
   <title>Abuot</title>

    <!-- link font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php  include 'header.php' ?>


   <div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="image/THEM.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat iusto facere id officia assumenda temporibus?</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>



<section class="reviews">

   <h1 class="title">NHẬN XÉT CỦA KHÁCH HÀNG</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/pic1.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khúc Hương</h3>
      </div>

      <div class="box">
         <img src="image/pic2.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khúc Hương</h3>
      </div>

      <div class="box">
         <img src="image/pic3.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khúc Hương</h3>
      </div>

      <div class="box">
         <img src="image/pic4.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khúc Hương</h3>
      </div>

      <div class="box">
         <img src="image/pic5.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khúc Hương</h3>
      </div>

      <div class="box">
         <img src="image/pic6.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khúc Hương</h3>
      </div>

   </div>

</section>



<section class="authors">

   <h1 class="title">CÁC SẢN PHẦM ĐƯỢC YÊU THÍCH NHẤT</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/a1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>Orient FUNG2001D0</h3>
      </div>

      <div class="box">
         <img src="image/a2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>Orient 3 sao RA-AB0E11B19B</h3>
      </div>

      <div class="box">
         <img src="image/a3.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/akashi.yumi.3" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>Orient Star Contemporary Open Heart RE-AV0B01S00B (RE-AV0B01S)</h3>
      </div>

      <div class="box">
         <img src="image/a4.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100053098759471" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>Orient bambino gen 4 FAC08004D0</h3>
      </div>

      <div class="box">
         <img src="image/a5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>Orient Classic RA-AC0H01L10B</h3>
      </div>

      <div class="box">
         <img src="image/a6.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/DieuLinhhOffical" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-tiktok"></a>
         </div>
         <h3>Bulova Surveyor 162B03249 Automatic 96A270</h3>
      </div>

   </div>

</section>




   <?php include  'footer.php' ?>
   <!-- link JS -->
   <script src="js/scrip.js"></script>
</body>
</html>