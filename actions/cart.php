<?php
session_start();
include "../classes/cart.php";

$customer_id = $_SESSION['id'];
$prod_id = $_POST['prod_id'];
$size_id = $_POST['size_id'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$total = $quantity * $price;
// var_dump($customer_id);
$cart = new Cart;
$cart->createCart($customer_id,$prod_id,$size_id,$quantity,$price,$total)
?>