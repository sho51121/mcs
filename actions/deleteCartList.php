<?php

include "../classes/cart.php";

$cart = new Cart;
$cart->deleteCartList($_GET['cart_id']);

?>