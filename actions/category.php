<?php

include "../classes/product.php";

$cat_name=$_POST["cat_name"];
$subcat_name=$_POST["subcat_name"];

$product = new Product;

$product->createCategory($cat_name,$subcat_name);

?>