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
      
       <form class="form-inline my-2 my-lg-0" action="search_product.php" method="get">
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
    
    <!-- <button id="btn-signup">Sign up</button> -->
    
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
<!--calling cart function-->
<?php
cart();
?>

           <!-- home content -->
        <section class="home">
       
          <div class="content">
              <h3>Best Design Of 
                  <br> <span>Furniture Collection</span>
              </h3>
              <p>Improve the amostphere through interior design that driven by purposes to brings value into your environment.</p>
              <button id="shopnow">Shop Now</button>
          </div>
          <div class="img">
              <img src="./image/soffa.png" alt="">
          </div>
      </section>
     
    </div>
    <!-- main content -->

   

   
    <!-- card2 -->
    <div class="container" id="product-cards">
        <h3 class="text-center" style="margin-top: 30px;">TOP PRODUCTS</h3>

        <div class="row" style="margin-top: 30px;">
        <?php
      include('../database/dcconnect.php');
      $select_query="Select * from `producttable` order by rand() limit 0,6";
      $result_query=mysqli_query($conn,$select_query);
      //$row=mysqli_fetch_assoc($result_query);
      //echo $row['product_title'];
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
            <h3>Price: Rs $product_price <button  class='add-to-cart-btn'><a href='index.php?add_to_cart=$product_id' class='fa fa-shopping-cart'></a></button></h3>
          </div>
        </div>
      </div>";
        
      }
      ?>
            <!-- <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                  <img src="../admin_area/product_images/$product_image" class="card-img-top" alt="">
                  <div class="card-body">
                    <h3 class="text-center">sofa</h3>
                    <h2>Rs 179999 <button  class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i></button></h2>
                  </div>
                </div>
              </div>
             -->
    <!-- card2 -->
        </div>
        </div>
     <!-- card1 -->
     <div class="container">
      <h3 class="text-center" style="padding-top: 30px;">SERVICES WE OFFER</h3>
      <div class="row" style="margin-top: 50px;">
          <div class="col-md-3 py-3 py-md-0">
              <div class="card-ad">
                  <img src="./image/shield.png" alt="" class="card image-top" height="200px">
                  <div class="card-body">
                      <h5 class="card-titel text-center">DURABILITY & QUALITY</h5>
                     
                      <small class="card-titel text-center">We provide machine finish options for all our furniture and provide maintenance warranty.</small>
                  </div>
              </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
              <div class="card-ad">
                  <img src="./image/best-price.png" alt="" class="card image-top" height="200px">
                  <div class="card-body">
                      <h5 class="card-titel text-center">BEST PRICE GUARANTEED</h5>
                      
                      <small class="card-titel text-center">We provide the most competitive pricing for all types of furniture in Nepal.</small>
                  </div>
              </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
              <div class="card-ad">
                  <img src="./image/world.png" alt="" class="card image-top" height="200px">
                  <div class="card-body">
                      <h5 class="card-titel text-center">UNDER ONE ROOF</h5>
                      
                     <small class="card-titel text-center">All types of Home, Office, Kitchen, Living renovation with furniture, interiors, painting, flooring.</small>
                  </div>
              </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card-ad">
                <img src="./image/vanity.png" alt="" class="card image-top" height="200px">
                <div class="card-body">
                    <h5 class="card-titel text-center">CUSTOMIZED DESIGNS</h5>
                  <small class="card-titel text-center">Not limited to readymade products, we make furniture customized for your home or office.</small>
                </div>
            </div>
        </div>
      </div>
  </div>
  <!-- card1 -->

    <!-- about -->
    <div class="container">
        <h1 class="text-center" style="margin-top: 50px;">ABOUT</h1>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="./image/about.png" alt="">
                </div>
            </div>
            <div class="col-md-6 py-3 py-md-0">
                <p>Sunshine Furniture house is an online content driven marketplace for home and office products. 
                    With assortments of products of international as well as local brands, Sunshine Furniture house offers new, exciting, convenient and a quality assuring way to shop for furniture, décor products and home appliances in Nepal.

                    The company delivers across Nepal and is dedicated to provide prompt customer service and facilities like free assembly and delivery.                    
                    </p>
               
            </div>
        </div>
    </div>
    <!-- about -->
     
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