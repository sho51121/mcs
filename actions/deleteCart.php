<?php

include "../classes/cart.php";

$cart = new Cart;
$cart->deleteCart($_GET['cart_id']);

?>