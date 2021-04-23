<?php
include "../classes/customer.php";

$username = $_POST["username"];
$password = $_POST["password"];

$customer = new Customer;

$customer->createLogin($username,$password);

?>