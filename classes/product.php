<?php

require_once "database.php";

class Product extends Database{
  public function createCategory($cat_name,$subcat_name){

    $sql="INSERT INTO categories(cat_name,subcat_name)
          VALUES('$cat_name','$subcat_name')";
    
    if($this->conn->query($sql)){
      header("location: ../views/category.php");
      exit;
    }else{
      die("Error inserting".$this->conn->error);
    }
  }

  public function getCategories(){
    $sql="SELECT * FROM categories";
    if($result=$this->conn->query($sql)){
      return $result;
    }else{
      die("Error display".$this->conn->error);
    }
  }

  public function createProduct($product_name,$product_price,$product_color,$product_size,$cat_id,$image_name,$tmp_name){

    $sql="INSERT INTO products(`name`,price,color,category_id,photo)
          VALUES('$product_name','$product_price','$product_color','$cat_id','$image_name')";
    
    if($this->conn->query($sql)){
      $prod_id=$this->conn->insert_id;
      foreach($product_size as $s){
        $sql2="INSERT INTO sizes(size,product_id)VALUES('$s','$prod_id')";
        $this->conn->query($sql2);
      }
      $destination ="../product_img/".basename($image_name);
      if(move_uploaded_file($tmp_name,$destination)){
        header("location: ../views/product.php");
        exit;
      }else{
        die("Error".$this->conn->error);
      }
    }
  }

  public function getProducts(){
    $sql="SELECT products.id,`name`,price,color,size,sizes.id AS size_id ,photo,cat_name,subcat_name FROM products INNER JOIN categories ON products.category_id = categories.id INNER JOIN sizes ON products.id = sizes.product_id";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error display".$this->conn->error);
    }
  }

  // public function getProductsMen(){
  //   $sql="SELECT * FROM products INNER JOIN categories ON products.category_id = categories.id WHERE cat_name ='Men' ORDER BY subcat_name";
  //   if($result=$this->conn->query($sql)){
  //     return $result;
  //   }else{
  //     die("Error".$this->conn->error);
  //   }
  // }

  // public function getProductsWomen(){
  //   $sql="SELECT * FROM products INNER JOIN categories ON products.category_id = categories.id WHERE cat_name ='Women' ORDER BY subcat_name";
  //   if($result=$this->conn->query($sql)){
  //     return $result;
  //   }else{
  //     die("Error".$this->conn->error);
  //   }
  // }

  // public function getProductsKids(){
  //   $sql="SELECT * FROM products INNER JOIN categories ON products.category_id = categories.id WHERE cat_name ='Kids' ORDER BY subcat_name";
  //   if($result=$this->conn->query($sql)){
  //     return $result;
  //   }else{
  //     die("Error".$this->conn->error);
  //   }
  // }

  public function updateProduct($prod_id,$product_name,$product_price,$product_color,$product_size,$cat_id,$image_name,$tmp_name){

    $sql="UPDATE products INNER JOIN sizes ON products.id = sizes.product_id
    SET   `name`='$product_name',
         price='$product_price',
         color='$product_color',
         size='$product_size',
         photo='$image_name',
        category_id='$cat_id'
    WHERE products.id = '$prod_id'";

    if($this->conn->query($sql)){
      $destination ="../product_img/".basename($image_name);
      if(move_uploaded_file($tmp_name,$destination)){
        header("location: ../views/product.php");
        exit;
      }
    }else{
      die("Error updating".$this->conn->error);
    }
  }

  public function getProduct($prod_id){
    $sql="SELECT products.id,`name`,price,color,size,photo,category_id FROM products INNER JOIN categories ON products.category_id = categories.id  INNER JOIN sizes ON products.id = sizes.product_id WHERE products.id='$prod_id'";
    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
      
    }else{
      die("Error display".$this->conn->error);
    }
  }

  public function deleteProduct($prod_id){
    $sql="DELETE FROM products  WHERE id = '$prod_id'";
    if($this->conn->query($sql)){
      $this->deleteSize($prod_id);
    }else{
      die("Error".$this->conn->error);
    }
  }

  public function getSubCatMen(){
    $sql="SELECT subcat_name FROM categories WHERE cat_name = 'Men'";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error".$this->conn->error);
    }
  }

  public function getSubCatWomen(){
    $sql="SELECT subcat_name FROM categories WHERE cat_name = 'Women'";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error".$this->conn->error);
    }
  }
  public function getSubCatKids(){
    $sql="SELECT subcat_name FROM categories WHERE cat_name = 'Kids'";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error".$this->conn->error);
    }
  }

  public function getProductsMen($subcat){
    $sql="SELECT *,products.id AS prod_id FROM products INNER JOIN categories ON products.category_id=categories.id WHERE cat_name='Men' AND subcat_name='$subcat'";

    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error".$this->conn->error);
    }
  }

  public function getProductsWomen($subcat){
    $sql="SELECT *,products.id AS prod_id FROM products  INNER JOIN categories ON products.category_id=categories.id WHERE cat_name='Women' AND subcat_name='$subcat'";

    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error".$this->conn->error);
    }
  }

  public function getProductsKids($subcat){
    $sql="SELECT *,products.id AS prod_id FROM products INNER JOIN categories ON products.category_id=categories.id WHERE cat_name='Kids' AND subcat_name='$subcat'";

    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error".$this->conn->error);
    }
  }

  public function getItem($prod_id){
    $sql="SELECT * FROM products INNER JOIN sizes ON products.id = sizes.product_id WHERE products.id='$prod_id'";
    if($result=$this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error get item".$this->conn->error);
    }
  }

  public function getSizes($prod_id){
    $sql="SELECT * FROM sizes WHERE product_id='$prod_id'";
    if($result=$this->conn->query($sql)){
      return $result;
    }else{
      die("Error get size".$this->conn->error);
    }
  }
  
  public function deleteSize($prod_id){
    $sql="DELETE FROM sizes  WHERE product_id = '$prod_id'";
    if($this->conn->query($sql)){
      header("location: ../views/product.php");
      exit;
    }else{
      die("Error".$this->conn->error);
    }
  }

}
?>