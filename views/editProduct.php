<?php
require_once "../classes/customer.php";
require_once "../classes/product.php";
$product_obj = new Product;
$product = new Product;
$prod_details = $product->getProduct($_GET['prod_id']);
print_r($prod_details);
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
<form action="../actions/product.php" method="post" class="w-75 mx-auto" enctype="multipart/form-data">
        <h1 class="text-center">Product</h1>
    <div class="row">
      <div class="col-6">
          <input type="hidden" name="prod_id" value="<?=$prod_details['id']?>">
          <input type="text" name="product_name" placeholder="product_name" class="form-control" value="<?=$prod_details['name']?>" required>
          <input type="number" name="product_price" placeholder="product_price" class="form-control" value="<?=$prod_details['price']?>" required>
          <input type="text" name="product_color" placeholder="product_color" class="form-control" value="<?=$prod_details['color']?>" required>
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
      
          <!-- <input type="text" name="product_size" placeholder="product_size" class="form-control" value="" required> -->
          <select name="cat_id" class="form-control" required> 
            <option value="" hidden>Select Category</option>
          <?php
            $category_list =$product_obj->getCategories();
            while($category=$category_list->fetch_assoc()){
              if($category['id'] == $prod_details['category_id']){
          ?>
                <option selected value="<?=$category['id']?>"><?=$category['cat_name']."-".$category['subcat_name']?></option>
                
          <?php
              }else{
          ?>
                <option value="<?=$category['id']?>"><?=$category['cat_name']."-".$category['subcat_name']?></option>
          <?php
              }
            }
          ?>
          </select>
      </div>
      <div class="col-6">
          <div class="custom-file">
            <label for ="photo" class="custom-file-label">Choose Photo</label>
            <input type="file" name="photo" id ="photo" class="custom-file-input" value="<?=$prod_details['photo']?>" require>
          </div>
      </div>
          <input type="submit" name="btn_update" value="Update Product" class="btn btn-primary form-control my-3">
          
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>