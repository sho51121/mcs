<?php
require_once "../classes/customer.php";
include "../views/admin_navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Customerlist</title>
</head>
<body>

<h1 class="text-center">CUSTOMER LIST</h1>
<table class="table w-75 mx-auto table-striped">
<thead class="thead-dark">
  <tr>
    <th class="px-5">#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>Contact</th>
    <th></th>
    <th></th>
  </tr>
</thead>
<tbody>
    <?php
    $customer = new Customer;
    $customer_list = $customer->getCustomerList();
    while($customer=$customer_list->fetch_assoc()){

      ?>
    <tr>
      <td class="px-5"> <?=$customer['id']?></td>
      <td><?=$customer['first_name']?></td>
      <td><?=$customer['last_name']?></td>
      <td><?=$customer['username']?></td>
      <td><?=$customer['email']?></td>
      <td><?=$customer['contact']?></td>
      <td><a href="../views/editCustomer.php?customer_id=<?=$customer['id']?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a></td>
      <td><a href="../actions/deleteCustomer.php?customer_id=<?=$customer['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>