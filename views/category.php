<?php
include "../views/admin_navbar.php";
require_once "../classes/product.php";
$product_obj = new Product;
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
<title>Title</title>
</head>
<body>

<div class="mx-auto" style="width:250px;">
  <h1 class="text-center">Categories</h1>
  <form action="../actions/category.php" method="post">
    
    <select name="cat_name" class="form-control">
      <option value="Men">MEN</option>
      <option value="Women">WOMEN</option>
      <option value="Kids">KIDS</option>
    </select>
    <!-- <br>
    <label for="subcat_name">Subcategory Name</label> -->
    <input type="text" name="subcat_name" id="subcat_name" class="form-control mt-3" placeholder="subcategory name">
    <input type="submit" value="Add" class="form-control mt-3 btn btn-primary">
  </form>
</div>

<table class="table w-75 mx-auto table-striped text-center">
<thead class="thead-dark">
  <tr>
    <th>#</th>
    <th>Category</th>
    <th>Subcategory</th>
  </tr>
</thead>
<tbody>
<?php

$category_list =$product_obj->getCategories();
while($category=$category_list->fetch_assoc()){
?>
    <tr>
      <td><?=$category['id']?></td>
      <td><?=$category['cat_name']?></td>
      <td><?=$category['subcat_name']?></td>
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