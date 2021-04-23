<?php

include "../classes/product.php";
$product = new Product;
if(isset($_POST['btn_add'])){

  $product_name = $_POST["product_name"];
  $product_price = $_POST["product_price"];
  $product_color = $_POST["product_color"];
  $product_size = $_POST["size"];
  $cat_id = $_POST["cat_id"];
  $image_name =$_FILES["photo"]["name"];
  $tmp_name =$_FILES["photo"]["tmp_name"];
  
  
  $product->createProduct($product_name,$product_price,$product_color,$product_size,$cat_id,$image_name,$tmp_name);
}
  
if(isset($_POST['btn_update'])){
  $prod_id =$_POST['prod_id'];
  $product_name = $_POST["product_name"];
  $product_price = $_POST["product_price"];
  $product_color = $_POST["product_color"];
  $product_size = $_POST["size"];
  $cat_id = $_POST["cat_id"];
  $image_name =$_FILES["photo"]["name"];
  $tmp_name =$_FILES["photo"]["tmp_name"];

  $product->updateProduct($prod_id,$product_name,$product_price,$product_color,$product_size,$cat_id,$image_name,$tmp_name);
}


?>

