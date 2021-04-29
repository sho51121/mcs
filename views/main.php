<?php
session_start();
include "../classes/product.php";
include "../classes/cart.php";
$prod_obj = new Product;
$cart = new Cart;


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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<title>Main</title>
<style>
  h1,h2{

    font-family: 'Courgette', cursive;
    font-size:60px;
    padding-top:40px;
  }
header{
  margin-top:50px;
height:100vh;
background-image: url("../main_img/mainclothes.jpeg");
background-size:cover;
}
.stylephoto{
  float:center;
  margin-left: 55px;
}
.navbar{

font-family: 'Courgette', cursive;
}
</style>
</head>
<body>
<?php
include "main_navbar.php";
?>
  <h1 class="text-center mt-3">M C S</h1>
<header class="container-sluid">
  <!-- <img src="../main_img/main.jpg" class="img-fluid"> -->
</header>
<main>
  <div class="style">
    <h2 class="mt-4 ml-4">Style Collection</h2>
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