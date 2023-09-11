
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
   <title>orders</title>

    <!-- link font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php  include 'header.php' ?>




   <div class="heading">
   <h3>your orders</h3>
   <p> <a href="home.php">home</a> / orders </p>
</div>

<section class="placed-orders">

   <h1 class="title">đơn đặt hàng</h1>

   <div class="box-container">

      <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
       
         <p> Họ và tên : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> Số điện thoại : <span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> Địa chỉ : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Phương thức thanh toán : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> Đơn đặt hàng của bạn : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p> Tổng giá : <span>₫<?php echo $fetch_orders['total_price']; ?></span> </p>
         <p> Trạng thái thanh toán : <span style="color:<?php if($fetch_orders['payment_status'] == 'chưa giải quyết'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
         </div>
      <?php
       }
      }else{
         echo '<p class="empty">chưa có đơn đặt hàng nào!</p>';
      }
      ?>
   </div>

</section>







   <?php include  'footer.php' ?>
   <!-- link JS -->
   <script src="js/scrip.js"></script>
</body>
</html>