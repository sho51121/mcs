<?php
session_start();
include "../classes/product.php";
include "../classes/cart.php";
$cart = new Cart;
$prod_obj=new Product;
$subcat = $prod_obj->getProductsWomen($_GET['subcat']);

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
<title>WOMEN</title>
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
<?php
  echo "<h2 class='mt-4'>".$_GET['subcat']."</h2>";
  while($sub_prod_list = $subcat->fetch_assoc()){
    // print_r($sub_prod_list);
?>
  <div class="card ml-3 mt-3" style="width:200px; height:300px; float:left;">
  <a href="item.php?prod_id=<?=$sub_prod_list['prod_id']?>">
    <img src="../product_img/<?=$sub_prod_list['photo']?>" class="card-img-top" alt="..." height="200px" >
    <div class="card-body">
      <h5 class="card-title text-dark"><?=$sub_prod_list['name']?></h5>
      <p class="card-text text-dark">¥<?=$sub_prod_list['price']?></p>
    </div>
  </a>
  </div>
  <?php
    }
  ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>