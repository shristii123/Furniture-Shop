
<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php'); 
 @session_start();
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
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
       
                        
    </head>
    <body>
    <div class="container-fluid my-3">
        <h2 class="text-center"><b>Login</b></h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post"> 
                     <!--userfield-->
                <div class="form-outline mb-3">
                <label for="user_username" class="form-label">Username</label>
                <input type="text" name="user_username" id="user_username" 
                class="form-control" placeholder="Enter your username" autocomplete="off" 
                required="required"/>
            </div>
            <!--password field-->
            <div class="form-outline mb-3">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" name="user_password" id="user_password" 
                class="form-control" placeholder="Enter your password" autocomplete="off" 
                required="required"/>
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="Login" class="btn-login" 
                name="user_login">
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? <a 
                href="user_registration.php" class="text-danger"> Signup</a></p>
            </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>


<?php
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $select_query="SELECT user_id, user_password FROM `usertable` WHERE username='$user_username'";
    $result=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($result);
    if($row_count>0){
      $_SESSION['username']= $user_username;
        $row_data=mysqli_fetch_assoc($result);
        if(password_verify($user_password, $row_data['user_password'])){
            
            //cart_item
            $user_ip=getIPAddress();
            $select_query_cart="SELECT * FROM `cart_details` WHERE ip_address='$user_ip'";
            $select_cart=mysqli_query($conn,$select_query_cart);
            $row_count_cart=mysqli_num_rows($select_cart);
            if($row_count_cart==0){
              $_SESSION['username']= $user_username;
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            } else {
              $_SESSION['username']= $user_username;
                echo "<script>alert('Login successful')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
            
        }
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
       
    }
}
?>