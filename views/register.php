<?php
session_start();
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
<title>Register</title>
</head>
<body>
<form action="../actions/register.php" method="post" class="w-75 mx-auto my-3 p-3 border border-grey">
  <h1 class="text-center bg-warning text-white">Register</h1>
  <label for="first_name">Firstname</label>
  <input type="text" name="first_name" id="first_name" class="form-control">

  <label for="last_name">Lastname</label>
  <input type="text" name="last_name" id="last_name" class="form-control">

  <label for="username">Username</label>
  <input type="text" name="username" id="username" class="form-control">

  <label for="password">Password</label>
  <input type="password" name="password" id="password" class="form-control">

  <label for="email">Email</label>
  <input type="email" name="email" id="email" class="form-control">

  <label for="address">Address</label>
  <input type="text" name="address" id="address" class="form-control">

  <label for="contact">Contact</label>
  <input type="text" name="contact" id="contact" class="form-control">

  <input type="submit" name="register" value="Register" class="form-control btn btn-warning text-white mt-3">
  <p class="text-center mt-3 small">Register already?<a href="login.php">Log-in.</a></p>
</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>