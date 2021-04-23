<?php

require_once "database.php";

class Customer extends Database{

  public function createCustomer($first_name,$last_name,$username,$password,$email,$address,$contact){

    $sql = "INSERT INTO customers(first_name,last_name,username,`password`,email,`address`,contact)
            VALUES('$first_name','$last_name','$username','$password','$email','$address','$contact')";

    if($this->conn->query($sql)){
      header("location: ../views/login.php");
    }else{
      die("Error creating customer".$this->conn->error);
    }
  } 

  public function createLogin($username,$password){

    $sql="SELECT username,`password` 
          FROM customers 
          WHERE username='$username'";

    $result = $this->conn->query($sql);
    if($result->num_rows == 1){
      $customer_detail = $result->fetch_assoc();
        if(password_verify($password,$customer_detail['password'])){
          session_start();
          $_SESSION['id'] = $customer_detail['id'];
          $_SESSION['username'] = $customer_detail['username'];

            if($customer_detail['username'] == 'sho5'){
              header("location: ../views/admin.php");
              exit;
            }else{
              header("location: ../views/main.php");
              exit;
            }
        }else{
          die("Error login".$this->conn->error);
        }
    }else{
      die("Error login".$this->conn->error);
    }
  }

  public function getCustomerList(){

    $sql="SELECT id,first_name,last_name,username,`password`,email,contact FROM customers";

    
      if($result = $this->conn->query($sql)){
          return $result;
      }else{
        die("Error display".$this->conn->error);
      }
  }
  
  public function deleteCustomer($customer_id){
    $sql="DELETE FROM customers WHERE id='$customer_id'";

    if($this->conn->query($sql)){
      header("location: ../views/customerList.php");
      exit;
    }else{
      die("Error deleting".$this->conn->error);
    }
  }

  public function updateCustomer($customer_id,$first_name,$last_name,$username,$email,$address,$contact){
    $sql="UPDATE customers
          SET first_name = '$first_name',
              last_name ='$last_name',
              username ='$username',
              email ='$email',
              `address` ='$address',
              contact ='$contact'
          WHERE id = '$customer_id'";

    if($this->conn->query($sql)){
      header("location: ../views/customerList.php");
      exit;
    }else{
      die("Error updating".$this->conn->error);
    }
  }

  public function getCustomer($customer_id){
    $sql="SELECT id,first_name,last_name,username,email,`address`,contact FROM customers WHERE id = '$customer_id'";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error getting".$this->conn->error);
    }
  }
}

?>