<?php

include "../classes/customer.php";

$customer = new Customer;
$customer->deleteCustomer($_GET['customer_id']);
?>