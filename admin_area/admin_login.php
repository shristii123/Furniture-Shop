<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php'); 
 @session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
     <!-- bootstrap links -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="../user_area/style.css">
    <style>
        body{
            overflow:hidden;
        }
        </style>
</head>
<body>
    
    <div class="container-fluid my-3">
        <h2 class="text-center"><b>Admin Login</b></h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post"> 
                     <!--userfield-->
                <div class="form-outline mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="admin_name" id="admin_name" 
                class="form-control" placeholder="Enter your username" autocomplete="off" 
                required="required"/>
            </div>
            <!--password field-->
            <div class="form-outline mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="admin_password" id="admin_password" 
                class="form-control" placeholder="Enter your password" autocomplete="off" 
                required="required"/>
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="Login" class="btn-login" 
                name="admin_login">
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't you have account?<a 
                href="admin_registration.php" class="link-danger">Register</a></p>
            </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!--php code-->
<?php
if(isset($_POST['admin_login'])){
    $admin_name = $_POST['admin_name'];
    $admin_password= $_POST['admin_password'];
    $select_query="SELECT * FROM `admin_table` WHERE admin_name='$admin_name' and admin_password='$admin_password'";
    $result=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    if($row_count>0){
        $_SESSION['admin_name']= $admin_name;
           echo "<script>alert('Login successful')</script>";
           echo "<script>window.open('index.php','_self')</script>";
        }else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }

?>