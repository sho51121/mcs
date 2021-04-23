<?php
include "../classes/product.php";

$prod_obj=new Product;
$item = $prod_obj->getItem($_GET['prod_id']);
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
<title>Item</title>
</head>
<body>

<div class="container">

  <div class="card border border-dark">
  <input type="hidden" name="prod_id" value="<?=$item['products.id']?>">
    <div class="row no-gutters">
      <div class="col-md-8">
        <img src="../product_img/<?=$item['photo']?>" alt="..." height="600px" width="600px" class="m-3">
      </div>
      <div class="col-md-4">
        <div class="card-body">
          <h4 class="card-title mb-4"><?=$item['name']?></h4>
          <p class="card-text text-danger font-weight-bold">¥<?=$item['price']?></p>
          <p class="card-text">Color: <?=$item['color']?></p>
          <p class="card-text">Size: <?=$item['size']?></p>
          <p class="card-text">Quantity</p>
          <input type="number" name="quantity">
          <input type="submit" name="addCart" value="Add To Cart" class="btn btn-primary">
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