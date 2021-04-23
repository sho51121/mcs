<?php

include "../classes/product.php";

$product = new Product;
$product->deleteProduct($_GET['prod_id']);
?>