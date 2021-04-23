<?php
require_once "../classes/customer.php";
require_once "../classes/product.php";
include "../views/admin_navbar.php";
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
<title>Products</title>
</head>
<body>

<main>
  <form action="../actions/product.php" method="post" class="w-75 mx-auto" enctype="multipart/form-data">
        <h1 class="text-center">Product</h1>
    <div class="row">
      <div class="col-6">
          <input type="text" name="product_name" placeholder="product_name" class="form-control" required>
          <input type="number" name="product_price" placeholder="product_price" class="form-control" required>
          <input type="text" name="product_color" placeholder="product_color" class="form-control" required>

          <input type="checkbox" id="XS" name="size[]" value="XS">
          <label for="XS">XS</label>
          <input type="checkbox" id="S" name="size[]" value="S">
          <label for="S">S</label>
          <input type="checkbox" id="M" name="size[]" value="M">
          <label for="M">M</label>
          <input type="checkbox" id="L" name="size[]" value="L">
          <label for="L">L</label>
          <input type="checkbox" id="XL" name="size[]" value="XL">
          <label for="XL">XL</label>

          <!-- <select name="product_size" class="form-control" required>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select> -->
          <!-- <input type="text" name="product_size" placeholder="product_size" class="form-control" required> -->
          <select name="cat_id" class="form-control" required>
            <option value="" hidden>Select Category</option>
          <?php
            
            $category_list =$product_obj->getCategories();
            while($category=$category_list->fetch_assoc()){
          ?>
            <option value="<?=$category['id']?>"><?=$category['cat_name']."-".$category['subcat_name']?></option>
          <?php
            }
          ?>

          </select>
      </div>
      <div class="col-6">
          <div class="custom-file">
            <label for ="photo" class="custom-file-label">Choose Photo</label>
            <input type="file" name="photo" id ="photo" class="custom-file-input" required>
          </div>
      </div>
          <input type="submit" name="btn_add" value="Add Product" class="btn btn-primary form-control my-3">
          
    </div>
</form>
<table class="table w-75 mx-auto table-striped">
<thead class="thead-dark">
  <tr>
    <th>#</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Price</th>
    <th>Color</th>
    <th>Size</th>
    <th>Cat_name</th>
    <th>Subcat_name</th>
    <th></th>
    <th></th>
  </tr>
</thead>
<tbody>
<?php

$product_list = $product_obj->getProducts();
while($product = $product_list->fetch_assoc()){

  ?>
    <tr>
      <td><?=$product['id']?></td>
      <td><img src="../product_img/<?=$product['photo']?>" height="40px"></td>
      <td><?=$product['name']?></td>
      <td><?=$product['price']?></td>
      <td><?=$product['color']?></td>
      <td><?=$product['size']?></td>
      <td><?=$product['cat_name']?></td>
      <td><?=$product['subcat_name']?></td>
      <td><a href="../views/editProduct.php?prod_id=<?=$product['id']?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a></td>
      <td><a href="../actions/deleteProduct.php?prod_id=<?=$product['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
<?php
}
?>
</tbody>
</table>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>