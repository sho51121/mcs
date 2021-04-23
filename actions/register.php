<?php

include "../classes/customer.php";
$customer = new Customer;

if(isset($_POST['register'])){

  $first_name=$_POST["first_name"];
  $last_name=$_POST["last_name"];
  $username=$_POST["username"];
  $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
  $email=$_POST["email"];
  $address=$_POST["address"];
  $contact=$_POST["contact"];

  $customer->createCustomer($first_name,$last_name,$username,$password,$email,$address,$contact);
}

if(isset($_POST['edit_customer'])){

  $customer_id = $_POST['customer_id'];
  $first_name=$_POST["first_name"];
  $last_name=$_POST["last_name"];
  $username=$_POST["username"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $contact=$_POST["contact"];

  $customer->updateCustomer($customer_id,$first_name,$last_name,$username,$email,$address,$contact);


}

?>
