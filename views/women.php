<?php
include "../classes/product.php";

$prod_obj=new Product;
$subcat = $prod_obj->getProductsWomen($_GET['subcat']);
// print_r($subcat);
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
<title>WOMEN</title>
</head>
<body>

<div class="container">
<?php
  echo "<h2>".$_GET['subcat']."</h2>";
  while($sub_prod_list = $subcat->fetch_assoc()){
?>
  <div class="card mb-3 border border-dark" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-8">
        <img src="../product_img/<?=$sub_prod_list['photo']?>" alt="..." height="300px" width="300px">
      </div>
      <div class="col-md-4">
        <div class="card-body">
          <h4 class="card-title mb-4"><?=$sub_prod_list['name']?></h4>
          <p class="card-text text-danger font-weight-bold">¥<?=$sub_prod_list['price']?></p>
          <p class="card-text">Color: <?=$sub_prod_list['color']?></p>
          <input type="submit" name="addCart" value="Add To Cart" class="btn btn-primary">
        </div>
      </div>
    </div>
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