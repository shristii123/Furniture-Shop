<?php
 include "../database/dcconnect.php";
 include('../function/commonfunction.php'); 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="../user_area/style.css">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
  .product_img{
    width:100px;
    object-fit:contain;
    
  }
  body{
            overflow-x: hidden;
        }
  </style>
<body>
    <header class="header">
        <a href="">Admin Dashboard</a>
        <div class="logout">
            <a href="">Welcome Admin</a>
        </div>

    </header>
    <div class="row">
    <div class="col-md-2">
        <ul class="navbar-nav text-center" style="height:100vh; background-color:#FFA756;">
        <li class="nav-item" style="background-color: #FFA756;">
                  <a class="nav-link text-black"  href="index.php?insert_products">Insert Product</a>
        </li>
        <li class="nav-item" style="background-color: #FFA756;">
                  <a class="nav-link text-black"  href="index.php?view_products">View Product</a>
        </li>
        <li class="nav-item" style="background-color: #FFA756;">
                  <a class="nav-link text-black"  href="index.php?list_orders">All Order</a>
        </li>
        <li class="nav-item" style="background-color: #FFA756;">
                  <a class="nav-link text-black"  href="index.php?list_payments">All Payments</a>
        </li>
        <li class="nav-item" style="background-color: #FFA756;">
                  <a class="nav-link text-black"  href="index.php?list_users">List User</a>
        </li>
        <?php
    if(!isset($_SESSION['admin_name'])){
      echo   "<li class='nav-item' style='background-color: #FFA756;'>
      <a class='nav-link text-black'  href='admin_login.php'>Login</a>
</li>";
    }else{
      
        echo   "<li class='nav-item' style='background-color: #FFA756;'>
        <a class='nav-link text-black'  href='admin_logout.php'>Logout</a>
  </li>";
    }
    ?>
        
       
        </ul>
     </div>
     <div class="col-md-10 text-center">
        <?php
        if(isset($_GET['insert_products'])){
            include('insert_products.php');
          }
          if(isset($_GET['view_products'])){
            include('view_products.php');
          }
          if(isset($_GET['delete_product'])){
            include('delete_product.php');
          }
          if(isset($_GET['list_orders'])){
            include('list_orders.php');
          }
          if(isset($_GET['delete_orders'])){
            include('delete_orders.php');
          }
          if(isset($_GET['list_payments'])){
            include('list_payments.php');
          }
          if(isset($_GET['list_users'])){
            include('list_users.php');
          }
          

        ?>

    </div>
</div>
   
</body>
</html>