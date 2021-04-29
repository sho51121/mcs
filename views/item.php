<?php
include "../classes/product.php";
include "../classes/cart.php";
session_start();
$cart = new Cart;
$prod_obj=new Product;
$item = $prod_obj->getItem($_GET['prod_id']);
$item_size = $prod_obj->getSizes($_GET['prod_id']);
// print_r($item);
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
<title>Item</title>
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
  <div class="my-3 mx-auto" style="width:800px;">
    <a href="#" onClick='history.back();' class="btn btn-outline-secondary">
    <i class="fas fa-arrow-left"></i>
    </a>
  </div>
  <div class="card border border-dark mt-2 mx-auto" style="width:800px;">
  <form action="../actions/cart.php" method="post">
    <input type="hidden" name="prod_id" value="<?=$item['product_id']?>">
    <input type="hidden" name="price" value="<?=$item['price']?>">
    <div class="row no-gutters">
      <div class="col-md-7">
        <img src="../product_img/<?=$item['photo']?>" alt="..." height="400px" width="500px" class="">
      </div>
      <div class="col-md-5">
        <div class="card-body">
          <h2 class="card-title font-weight-bold mb-4"><?=$item['name']?></h2>
          <h3 class="card-text font-weight-bold">¥<?=$item['price']?></h3>
          <h4 class="card-text mt-4">Color: <?=$item['color']?></h4>
          <h4 class="card-text mt-3">Size</h4>
          <select class="form-control" name="size_id" required>
          <?php
          while($size_row = $item_size->fetch_assoc()){
            ?>
          <option value="<?=$size_row['id']?>"><?=$size_row['size']?></option>
          <?php
          }
          ?>
          </select>
          <h4 class="card-text">Quantity</h4>
          <input type="number" name="quantity" class="form-control" min="1">
          <input type="submit" name="addCart" value="Add To Cart" class="btn btn-primary form-control mt-3">
        </div>
      </div>
    </div>
  </form>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>