<?php
require_once "../classes/cart.php";
require_once "../classes/product.php";
session_start();
$prod_obj=new Product;
$cart = new Cart;
$cart_details = $cart->getCart($_SESSION['id']);
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
<style>
  .navbar,h2,body{

    font-family: 'Courgette', cursive;
  }


</style>
<title>confirm</title>
</head>
<body>
<?php
include "main_navbar.php";
?>
  <div class="card mx-auto w-75 text-center mt-4">
    <h3><?=$_SESSION['username']?>-sama</h3>
    <h1>Thank You For Your Order</h1>
    <div class="row">
      <div class="col-6">
        <img src="../main_img/thanks.jpeg" width="500px" height="500px">
      </div>
      <div class="col-6">
        <table class="table mr-5">
          <thead>
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Subtotal</th>
          </tr>
          </thead>
      <?php
   while($cart_row = $cart_details->fetch_assoc()){
  ?>
          <tbody>
            <tr>
              <td><img src="../product_img/<?=$cart_row['photo']?>" alt="..." height="60px" width="60px"></td>
              <td><?=$cart_row['name']?></td>
              <td><?=$cart_row['quantity']?></td>
              <td><?=$cart_row['total']?></td>
            </tr>
          </tbody>
  <?php
   }
  ?>
        </table>
        <div class="row mt-3 mr-3">
            <div class="col-6">
               <h4>Total Price</h4> 
            </div>
            <div class="col-6 text-right">
               <h4>¥<?=$total_price['sum(total)']?></h4>
            </div>
         </div>
      </div>
        
    </div>
  </div>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>