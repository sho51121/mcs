<?php
include "../classes/customer.php";

$customer_id = $_GET['customer_id'];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$username=$_POST["username"];
$email=$_POST["email"];
$address=$_POST["address"];
$contact=$_POST["contact"];

$customer =new Customer;
$customer->updateCustomer($customer_id,$first_name,$last_name,$username,$email,$address,$contact);


?>