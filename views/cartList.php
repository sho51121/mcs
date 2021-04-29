<?php
require_once "../classes/cart.php";
require_once "../classes/product.php";
session_start();
$prod_obj=new Product;
$cart = new Cart;
$cart_list = $cart->getCartList();
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
<title>Cart List</title>
</head>
<body>
<?php
include "../views/admin_navbar.php";
?>
<div class="container">
  <h1 class="text-center">Cart List</h1>
  <table class="table text-center table-striped">
    <thead class="thead-dark">       
    <tr>
      <th>#</th>
      <th>Customer_id</th>
      <th>Photo</th>
      <th>Name</th>
      <th>Price</th>
      <th>Color</th>
      <th>Size</th>
      <th>Quantity</th>
      <th>Subtotal</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
  <?php
  while($cart_rows = $cart_list->fetch_assoc()){
  ?>
      <tr>
        <td><?=$cart_rows['id']?></td>
        <td><?=$cart_rows['customer_id']?></td>
        <td><img src="../product_img/<?=$cart_rows['photo']?>" alt="..." height="60px" width="60px"></td>
        <td><?=$cart_rows['name']?></td>
        <td><?=$cart_rows['price']?></td>
        <td><?=$cart_rows['color']?></td>
        <td><?=$cart_rows['size']?></td>
        <td><?=$cart_rows['quantity']?></td>
        <td><?=$cart_rows['total']?></td>
        <td><a href="../views/editProduct.php?prod_id=<?=$product['id']?>&size_id=<?=$product['size_id']?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a></td>
      <td><a href="../actions/deleteCartList.php?cart_id=<?=$cart_rows['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
      <?php
  }
  ?>
  </tbody>
    </table>
  </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>