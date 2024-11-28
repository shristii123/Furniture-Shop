<?php
//including connect file
//include('../database/dcconnect.php');

//get ip address function
 function getIPAddress() {  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
       }  
    //whether ip is from the proxy  
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
  else{  
  $ip = $_SERVER['REMOTE_ADDR'];  
 }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  

//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $conn;
 $get_ip_add = getIPAddress();
// $get_user_id=$_GET['user_id'];
  $get_product_id=$_GET['add_to_cart'];
  $select_query="Select * from `cart_details` where ip_address='$get_ip_add'  and 
  product_id= $get_product_id";
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('This item is already present inside cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";

  }else{
    $insert_query="insert into `cart_details` (product_id,ip_address,quantity)
    values ($get_product_id,'$get_ip_add',0)";
    $result_query=mysqli_query($conn,$insert_query);
    echo "<script>alert('Item is added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";

  }




}
}
//function to get cart item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
   $get_ip_add = getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  
    }else{
      global $conn;
      $get_ip_add = getIPAddress();
      $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($conn,$select_query);
      $count_cart_items=mysqli_num_rows($result_query);
    
  
    }
    echo $count_cart_items;

  }
  //searching products function
  function search_product(){
    global $conn;
    if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
    $search_query="Select * from `producttable` where product_keywords like '%$search_data_value%'";
      $result_query=mysqli_query($conn,$search_query);
      $num_of_rows=mysqli_num_rows($result_query);
      if($num_of_rows==0){
        echo "<h2 class='text-center text-danger'>No result match. No products found on this category!";
      }
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image=$row['product_image'];
        $product_price=$row['product_price'];
        echo "<div class='col-md-4 py-8 py-md-3'>
        <div class='card'>
          <img src='../admin_area/product_images/$product_image' class='card-img-top' alt=''>
          <div class='card-body'>
            <h3 class='text-center'> $product_title</h3>
            <p class='text-center'>$product_description</p>
            <h3>Price: Rs $product_price  <button  class='add-to-cart-btn'><a href='index.php?add_to_cart=$product_id' class='fa fa-shopping-cart'></a></button></h3>
          </div>
        </div>
      </div>";
        
      }
}
  }


//get user order details
function get_user_order_details(){
  global $conn;
  $username=$_SESSION['username'];
  $get_details="Select * from `usertable` where username='$username'";
  $result_query=mysqli_query($conn,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
    $user_id=$row_query['user_id'];
    if(!isset($_GET['edit_account'])){
      if(!isset($_GET['my_orders'])){
        if(!isset($_GET['delete_account'])){
          $get_orders="Select * from `user_orders` where user_id=$user_id and order_status='pending'";
          $result_orders_query=mysqli_query($conn,$get_orders);
          $row_count=mysqli_num_rows($result_orders_query);
          if($row_count>0){
            echo "<h3 class='text-center text-success mt-5 mb-2'>You have <span class='text-danger'>$row_count</span> pending orders</h3>
            <p class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
          }else{
            echo "<h3 class='text-center text-success mt-5 mb-2'>You have zero pending orders</h3>
            <p class='text-center'><a href='../index.php' class='text-dark'>Explore Products</a></p>";
          }
        }
        
      }
    }
  }

}
?>
