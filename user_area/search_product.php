
<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php'); 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>
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
       <div class="search-box">
      
       <form class="form-inline my-2 my-lg-0" action="" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          
            <input type="submit" value="Search" class="btn btn-outline-secondary my-2 my-sm-0" name="search_data_product">
       </form>
       </div>
    
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
      
  </nav>
  <div class="other-links">
    <!-- <button id="btn-login" ><a href="login.html">Login</a></button>
    <button id="btn-signup"><a href="signup.html">Sign up</a></button> -->
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
 
            <!-- 
           
            <div class="icons">
                <i class="bi bi-person"></i>
                <h5>MY Account</h5>
            </div> -->
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


         
    </div>
    <!-- main content -->
    <?php
cart();
?>


   
    <!-- card2 -->
    <div class="container" id="product-cards">
        <h3 class="text-center" style="margin-top: 30px;">PRODUCTS</h3>

        <div class="row" style="margin-top: 30px;">
        <?php
     
        
     search_product();
      ?>
           
    <!-- card2 -->
        </div>
        </div>
   
     
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