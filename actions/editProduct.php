<?php
include "../classes/product.php";

$prod_id = $_GET['prod_id'];
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_color = $_POST["product_color"];
$product_size = $_POST["size"];
$cat_id = $_POST["cat_id"];
$image_name =$_FILES["photo"]["name"];
$tmp_name =$_FILES["photo"]["tmp_name"];

$product = new Product;

$product->editProduct($prod_id,$product_name,$product_price,$product_color,$product_size,$cat_id,$image_name,$tmp_name);


?>