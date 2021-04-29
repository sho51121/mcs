<?php

require_once "database.php";
class Cart extends Database{

  public function createCart($customer_id,$prod_id,$size_id,$quantity,$price,$total){
    $sql="INSERT INTO cart(customer_id,prod_id,size_id,quantity,total)VALUES('$customer_id','$prod_id','$size_id','$quantity','$total')";

    if($this->conn->query($sql)){
      header("location: ../views/cart.php");
      exit;
    }else{
      die("Error inserting".$this->conn->error);
    }
  }

  public function getCart($customer_id){
    $sql="SELECT cart.id,customer_id,`name`,price,color,size,photo,quantity,total FROM cart INNER JOIN products ON cart.prod_id=products.id INNER JOIN sizes ON cart.size_id=sizes.id WHERE customer_id = $customer_id";

    if($result=$this->conn->query($sql)){
      return $result;
    }
  }

  public function getCartList(){
    $sql="SELECT cart.id,customer_id,`name`,price,color,size,photo,quantity,total FROM cart INNER JOIN products ON cart.prod_id=products.id INNER JOIN sizes ON cart.size_id=sizes.id";

    if($result=$this->conn->query($sql)){
      return $result;
    }
  }

  public function deleteCart($cart_id){
    $sql="DELETE FROM cart WHERE id = $cart_id";
    if($this->conn->query($sql)){
      header("location: ../views/cart.php");
      exit;
    }else{
      die("Error".$this->conn->error);
    }
  }
  public function deleteCartList($cart_id){
    $sql="DELETE FROM cart WHERE id = $cart_id";
    if($this->conn->query($sql)){
      header("location: ../views/cartList.php");
      exit;
    }else{
      die("Error".$this->conn->error);
    }
  }

  public function orderCount($id){
    $sql="SELECT sum(quantity) FROM cart WHERE customer_id = $id";
    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error counting".$this->conn->error);
    }
  }

  public function orderPrice($id){
    $sql="SELECT sum(total) FROM cart WHERE customer_id = $id";
    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error total".$this->conn->error);
    }

  }

  public function countCart($customer_id){
    $sql="SELECT count(*) FROM cart WHERE customer_id = $customer_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error counting".$this->conn->error);
    }
  }
}
?>