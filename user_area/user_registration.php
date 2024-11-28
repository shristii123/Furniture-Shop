
<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php'); ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
         <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
        <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- bootstrap link -->
    <!-- <style>  
.error {color: #FF0001;}  
</style>   -->
    
                        
    </head>
    <body>
   
    <div class="container-fluid my-3">
        <h2 class="text-center"><b>Sign up</b></h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data"> 
                     <!--userfield-->
                <div class="form-outline mb-3">
                <label for="user_username" class="form-label">Username</label>
                <input type="text" name="user_username" id="user_username" 
                class="form-control" placeholder="Enter your username" autocomplete="off" 
                required="required"/>
            </div>
              <!--emailfield-->
              <div class="form-outline mb-3">
                <label for="user_email" class="form-label">Email</label>
                <input type="text" name="user_email" id="user_email" 
                class="form-control" placeholder="Enter your email" autocomplete="off" 
                required="required"/>
            </div>
            <!--image field-->
            <div class="form-outline mb-3">
                <label for="user_image" class="form-label">User Image</label>
                <input type="file" id="user_image" 
                class="form-control" required="required" name="user_image"/>
            </div>
            <!--password field-->
            <div class="form-outline mb-3">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" name="user_password" id="user_password" 
                class="form-control" placeholder="Enter your password" autocomplete="off" 
                required="required"/>
            </div>
             <!--confirm password field-->
             <div class="form-outline mb-3">
                <label for="conf_user_password" class="form-label">Confirm Password</label>
                <input type="password" name="conf_user_password" id="conf_user_password" 
                class="form-control" placeholder="Confirm password" autocomplete="off" 
                required="required"/>
            </div>
             <!--Address field-->
             <div class="form-outline mb-3">
                <label for="user_address" class="form-label">Address</label>
                <input type="text" name="user_address" id="user_address" 
                class="form-control" placeholder="Enter your address" autocomplete="off" 
                required="required"/>
            </div>
              <!--contact field-->
              <div class="form-outline mb-3">
                <label for="user_contact" class="form-label">Contact</label>
                <input type="text" name="user_contact" id="user_contact" 
                class="form-control" placeholder="Enter your mobile number" autocomplete="off" 
                required="required"/>
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="Signup" class="btn-signup" 
                name="user_register">
                <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ?<a 
                href="user_login.php" class="text-danger"> Login</a></p>
            </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<!--php code-->
<?php
if(isset($_POST['user_register'])){
  $user_username = $_POST['user_username'];
  $user_email = $_POST['user_email'];
  $user_password= $_POST['user_password'];
//   $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
  $conf_user_password = $_POST['conf_user_password'];
  $user_address= $_POST['user_address'];
  $user_contact= $_POST['user_contact'];
  $user_image=$_FILES['user_image']['name'];
  $user_image_tmp=$_FILES['user_image']['tmp_name'];
  $user_ip=getIPAddress();


  //select query
  $select_query="SELECT * FROM `usertable` WHERE username ='$user_username' OR user_email = '$user_email'";
  $result=mysqli_query($conn,$select_query);
  $rows_count=mysqli_num_rows($result);
  if($rows_count > 0){
    echo "<script> alert('Username or email already exist')</script>";
   }
   elseif($user_password!= $conf_user_password){
    echo "<script> alert('Password Does Not Match')</script>";

   }
   else{
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $insert_query = "INSERT INTO `usertable`(username,user_email,user_password,user_image,user_ip,
    user_address,user_phone) VALUES('$user_username ','$user_email','$user_password','$user_image',
    '$user_ip','$user_address','$user_contact')";
    $sql_execute=mysqli_query($conn,$insert_query);
    //if($sql_execute){
    // echo "<script> alert('Data inserted successfully')</script>";
    //}else{
       //die(mysqli_error($conn));
    //}
    
   }
   //selecting cart items
   $select_cart_items="SELECT * from `cart_details` where ip_address='$user_ip'";
   $result_cart=mysqli_query($conn, $select_cart_items);
   $rows_count_cart=mysqli_num_rows($result_cart);
   if($rows_count_cart>0){
    $_SESSION['username']= $user_username;
    echo "<script> alert('You have items in your cart')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
   }
   else{
    echo "<script>window.open('index.php','_self')</script>";
   }

   



}
?>
