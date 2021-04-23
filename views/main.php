<?php
session_start();
include "../classes/product.php";
$prod_obj = new Product;
$subcat_men_list = $prod_obj->getSubCatMen();
$subcat_women_list = $prod_obj->getSubCatWomen();
$subcat_kids_list = $prod_obj->getSubCatKids();

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
<link rel="stylesheet" href="../css/style.css">
<title>Main</title>

</head>
<body>
<?php
include "main_navbar.php";
?>
<header class="container">
  <!-- <img src="../main_img/main.jpg" class="img-fluid"> -->
</header>
<main>
  <div class="style">
    <h2 class="mt-4">Style Collection</h2>
      <div class="stylephoto">
      <img src="../main_img/style1.jpeg">
      <img src="../main_img/style2.jpeg">
      <img src="../main_img/style6.jpeg">
      <img src="../main_img/style4.jpeg">
      <img src="../main_img/style5.jpeg">
      <img src="../main_img/style3.jpeg">
      </div>
  </div>
</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>