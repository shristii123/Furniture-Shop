<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php'); ?>
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
        <h2 class="text-center"><b>Admin Registration</b></h2>
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
              <!--emailfield-->
              <div class="form-outline mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="admin_email" id="admin_email" 
                class="form-control" placeholder="Enter your email" autocomplete="off" 
                required="required"/>
            </div>
            <!--password field-->
            <div class="form-outline mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="admin_password" id="admin_password" 
                class="form-control" placeholder="Enter your password" autocomplete="off" 
                required="required"/>
            </div>
             <!--confirm password field-->
             <div class="form-outline mb-3">
                <label for="conf_password" class="form-label">Confirm Password</label>
                <input type="password" name="conf_admin_password" id="conf_admin_password" 
                class="form-control" placeholder="Confirm password" autocomplete="off" 
                required="required"/>
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="Register" class="btn-login" 
                name="admin_registration">
                <p class="small fw-bold mt-2 pt-1 mb-0">Do you already have an account?<a 
                href="admin_login.php" class="link-danger"> Login</a></p>
            </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!--php code-->
<?php
if(isset($_POST['admin_registration'])){
  $admin_name = $_POST['admin_name'];
  $admin_email = $_POST['admin_email'];
  $admin_password= $_POST['admin_password'];
  $conf_admin_password = $_POST['conf_admin_password'];
  //select query
  $select_query="SELECT * FROM `admin_table` WHERE admin_name ='$admin_name' OR admin_email = '$admin_email'";
  $result=mysqli_query($conn,$select_query);
  $rows_count=mysqli_num_rows($result);
  if($rows_count > 0){
    echo "<script> alert('Admin name and email already exist')</script>";
   }elseif($admin_password!= $conf_admin_password){
    echo "<script> alert('Password Does Not Match')</script>";
   }
   else{
    $insert_query = "INSERT INTO `admin_table`(admin_name,admin_email,admin_password)
     VALUES('$admin_name','$admin_email','$admin_password')";
    $sql_execute=mysqli_query($conn,$insert_query);
    if($sql_execute){
    echo "<script> alert('Data inserted successfully')</script>";
    }else{
       die(mysqli_error($conn));
    }
    
   }
   

}
?>
