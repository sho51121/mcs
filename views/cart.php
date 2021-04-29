<?php
require_once "../classes/cart.php";
require_once "../classes/product.php";
session_start();
$prod_obj=new Product;
$cart = new Cart;
$cart_details = $cart->getCart($_SESSION['id']);
$order = $cart->orderCount($_SESSION['id']);
$total_price = $cart->orderPrice($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<title>Cart</title>
<style>
  .navbar,h2,body{

    font-family: 'Courgette', cursive;
  }


</style>
</head>
<body>
<?php
include "main_navbar.php";
?>
<div class="container">
  <div class="row">
   <div class="col-8">
  <?php
   while($cart_row = $cart_details->fetch_assoc()){
  ?>
        <div class="card border border-dark mt-4">
           <div class="row no-gutters">
             <div class="col-md-4">
              <img src="../product_img/<?=$cart_row['photo']?>" alt="..." height="200px" width="200px" class="m-3">
             </div>

             <div class="col-md-4 text-center mt-4">
                <h4 class="card-title mb-4"><?=$cart_row['name']?></h4>
                <p class="card-text">¥<?=$cart_row['price']?></p>
                <p class="card-text">Color: <?=$cart_row['color']?></p>
                <p class="card-text">Size: <?=$cart_row['size']?></p>              
             </div>

             <div class="col-md-4 text-center mt-4" style="padding-top:50px;">
                <p class="card-text">Quantity: <?=$cart_row['quantity']?></p>      
                <h4 class="card-text">Subtotal: ¥<?=$cart_row['total']?></h4>      
                <a href="../actions/deleteCart.php?cart_id=<?=$cart_row['id']?>" class="btn btn-danger" style="margin-left:150px; margin-top:30px;"><i class="fas fa-trash-alt"></i></a>
             </div>

           </div>
       </div>
  <?php
   }
   ?>
   </div>
      <div class="col-4 mt-5">
         <div class="row">
            <div class="col-6">
               <h3 class="font-weight-bold">Item(s)</h3>
            </div>
            <div class="col-6 text-right">
               <h3><?=$order['sum(quantity)']?></h3>
            </div>
         </div>
         <div class="row mt-3">
            <div class="col-6">
               <h3 class="font-weight-bold">Total Price</h3> 
            </div>
            <div class="col-6 text-right">
               <h3>¥<?=$total_price['sum(total)']?></h3>
            </div>
         </div>
      <!-- <input type="submit" name="confirm" value="confirm" class="btn btn-danger w-100 mx-auto mt-4"> -->
      <a href="confirm.php" class="btn btn-danger w-100 mx-auto mt-4">confirm</a>
      
      </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>