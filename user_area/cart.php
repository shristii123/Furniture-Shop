<?php 
include "../database/dcconnect.php";
 include('../function/commonfunction.php'); 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture-Cart Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- bootstrap link -->
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- font link -->
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- icons -->
<body>
    <!-- navbar top -->
    <div class="container">
        <div class="navbar-top">
            <!-- Image and text -->
       <nav class="navbar navbar-light ">
    <a class="navbar-brand" href="#">
      <img src="./image/logo.png" width="50" height="50"  alt="">
      Sunshine Furniture House
    </a>
       
    
    
  </nav>
  <div class="other-links">
    
  <?php
    if(!isset($_SESSION['username'])){
      echo   "<button class='btn-login' id='form'><a href='user_login.php'>Login</a></button>";
    }else{
      
        echo   "<button class='btn-login' id='form'><a href='logout.php'>Logout</a></button>";
    }
    ?>
    <?php
    if(isset($_SESSION['username'])){
      echo   " <button class='btn-signup' id='forms'><a href='profile.php'>My Account</a></button>";
    }else{
      
      echo   " <button class='btn-signup' id='forms'><a href='user_registration.php'>Sign up</a></button>";
    }
    ?>
     
    
</div>
 
          
        </div>
    </div>
    <!-- navbar top -->
   

    <!-- main content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-md" id="navbar-color">
           <div class="container">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span><i><img src="./image/menu.png" alt="" width="30px"></i></span>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="bedroom.php">Bedroom</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="living.php">Living</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="dining.php">Dining</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="office.php">Office</a>
                </li>
      <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
            
            
              </ul>
                 
            	<!-- Cart -->
          
              <a  class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>
										<span>Cart</span>
										<sup><?php cart_item();?></sup></a>
            
								
										
								
									
									
								<!-- /Cart -->
            </div>
           </div> 
          </nav>
<!--calling cart function-->
<?php
cart();
?>

          <!--table-->
    <div class="container">
      <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
          
          <tbody>
            <!--Dynamic data-->
            <?php
            include('../database/dcconnect.php');
            $get_ip_add= getIPAddress();
            $total_price=0;
            $quantities = 1;
            $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
            $result=mysqli_query($conn,$cart_query);
            $result_count=mysqli_num_rows($result);
            if($result_count>0){
              echo "<thead>
              <tr>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove</th>
                <th colspan='2'>Operation</th>
              </tr>
            </thead>";
            while($row=mysqli_fetch_array($result)){
              $product_id=$row['product_id'];
              $select_products="Select * from `producttable` where product_id='$product_id'";
              $result_products=mysqli_query($conn,$select_products);
              while($row_product_price=mysqli_fetch_array($result_products)){
                $product_price=array($row_product_price['product_price']);
                $price_table=$row_product_price['product_price'];
                $product_title=$row_product_price['product_title'];
                $product_image=$row_product_price['product_image'];
               $product_values=array_sum($product_price);
                $total_price+=$product_values;
 
            ?>
            <tr>
              <td><?php  echo $product_title?></td>
              <td><img src="../admin_area/product_images/<?php  echo $product_image?>" alt="" class="cart_img"></td>
              <td><input type="text" name="qty" id="" class="form-input w-50"></td>
              <?php
               $get_ip_add= getIPAddress();
               if(isset($_POST['update_cart'])){
                $quantities=$_POST['qty'];
                $update_cart="update `cart_details` set quantity='$quantities' where ip_address='$get_ip_add'";
                $result_product_quantity=mysqli_query($conn,$update_cart);
                $total_price=$total_price*(int)$quantities;               
               }
               
               ?>
              <td><?php  echo $price_table?></td>
              <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>"></td>
              <td>
                <input type="submit" value="Update Cart" class="bg-warning px-3 py-2 border-0 mx-3"
                name="update_cart">
                <!--<button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>-->
                <input type="submit" value="Remove Cart" class="bg-warning px-3 py-2 border-0 mx-3"
                name="remove_cart">
              </td>
            </tr>
            <?php
              }
            }
          }
          else{
            echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
          }
            ?>
          </tbody>
        </table>
        <!-- subtotal-->
        <div class="d-flex mb-5">
          <?php
           $get_ip_add= getIPAddress();
           $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
           $result=mysqli_query($conn,$cart_query);
           $result_count=mysqli_num_rows($result);
           if($result_count>0){
            echo "<h4 class='px-3'>Subtotal:<strong class='text-warning'>Rs $total_price</strong></h4>
            <input type='submit' value='Continue Shopping' class='bg-warning px-3 py-2 border-0 mx-3'
            name='continue_shopping'>
            <button class='bg-secondary p-3 py-2 border-0'><a href='checkout.php' class='text-light text-decoration-none'>Checkout</a></button>";

           }
           else{
            echo "<input type='submit' value='Continue Shopping' class='bg-warning px-3 py-2 border-0 mx-3'
            name='continue_shopping'>";

           }
           if(isset($_POST['continue_shopping'])){
            echo "<script>window.open('index.php','_self')</script>";
           }
          ?>

       
        </div>
        
      </div>
    </div>
    </form>
    <!--function to remove item-->
    <?php
    function remove_cart_item(){
      include('../database/dcconnect.php');
      if(isset($_POST['remove_cart'])){
      foreach($_POST['removeitem'] as $remove_id){
        echo $remove_id;
        $delete_query="Delete from `cart_details` where product_id=$remove_id";
        $run_delete=mysqli_query($conn,$delete_query);
        if($run_delete){
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }

    }
    echo $remove_item=remove_cart_item();

     
       ?>
   <!--table-->
   <!-- footer -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SUNSHINE FURNITURE HOUSE </h3>
            <p>Khusibun,Kathmandu.
            </p>
            <strong>Phone:</strong>9841000000<br>
            <strong>Email:</strong>sunshinefurniturehouse@.com <br>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Usefull Links</h4>
           <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policey</a></li>
           </ul>
          </div>



         

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>

           <ul>
            <li><a href="#">Table</a></li>
            <li><a href="#">Chair</a></li>
            <li><a href="#">Wordrobe</a></li>
           </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="socail-links mt-3">
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-skype"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
          
          </div>

        </div>
      </div>
    </div>
   
  
  </footer>
  <!-- footer -->





</body>
</html>