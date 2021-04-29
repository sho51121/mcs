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
<title>LOGIN</title>
</head>
<body>
<form action="../actions/login.php" method="post" class="w-75 mx-auto mt-5 border border-grey p-3">
  <h1 class="text-center bg-primary text-white">LOGIN</h1>
  <input type="text" class="form-control my-3" name="username" placeholder="username">
  <input type="password" class="form-control" name="password" placeholder="password">
  <input type="submit" class="form-control btn btn-primary mt-3" name="login" value="Login">
  <p class="text-center mt-3 small"><a href="register.php">Create Account.</a></p>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>