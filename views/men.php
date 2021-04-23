<?php
include "../classes/product.php";

$prod_obj=new Product;
$subcat = $prod_obj->getProductsMen($_GET['subcat']);
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
<title>MEN</title>
</head>
<body>
<div class="container">
<?php
  echo "<h2>".$_GET['subcat']."</h2>";
  while($sub_prod_list = $subcat->fetch_assoc()){
?>
  <div class="card" style="width:200px; height:300px; float:left;">
  <a href="item.php?prod_id=<?=$sub_prod_list['id']?>">
    <img src="../product_img/<?=$sub_prod_list['photo']?>" class="card-img-top" alt="..." height="200px" >
    <div class="card-body">
      <h5 class="card-title text-dark"><?=$sub_prod_list['name']?></h5>
      <p class="card-text text-danger">¥<?=$sub_prod_list['price']?></p>
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