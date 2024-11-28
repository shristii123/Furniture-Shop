<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../user_area/style.css">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <style>
       
    .profile_img{
    width: 30%;
    margin:auto;
    display: block;
    /* height: 40%; */
    object-fit: contain;
}

    </style>
</head>
<body>
  
</body>
</html>


<h3 class="text-center text-success mt-3">All Users</h3>
<table class="table table-bordered mt-3">
    <thead style="background-color: #FFA756;">
        <?php
        include "../database/dcconnect.php"; 
        $get_users="SELECT * FROM `usertable`";
        $result=mysqli_query($conn,$get_users);
        $row_count=mysqli_num_rows($result);
        if($row_count==0){
            echo "<h2 class='text-danger text-center mt-5'>No users yet</h2>";

        }else{
            echo "<tr>
            <th>S no.</th>
            <th>Username</th>
            <th>User Email</th>
            <th>User Image</th>
            <th>User Address</th>
            <th>User mobile</th>
            <th>Delete</th>
            </tr>
            </thead>
            <tbody>";
            $number=0;
            while($row_data=mysqli_fetch_assoc($result)){
               $user_id=$row_data['user_id'];
                $username=$row_data['username'];
                $user_email=$row_data['user_email'];
                $user_image=$row_data['user_image'];
                $user_address=$row_data['user_address'];
                $user_mobile=$row_data['user_phone'];
                $number++;
                echo "<tr class='text-center'>
                <td>$number</td>
                <td>$username</td>
                <td>$user_email</td>
                <td><img src='../user_area/user_images/$user_image' alt='$username'  class='profile_img'/></td>
                <td>$user_address</td>
                <td>$user_mobile</td>
                <td><a href='index.php?delete_user=<?php echo $user_id;?>'></a><button 
                type='button' class='btn-login' data-toggle='modal' data-target='#exampleModal'>Delete</button></td>
                </tr>
                ";
            }

        }
        
        ?>

    </thead>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4>Are you sure you want to delete this?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
         data-dismiss="modal"><a href="./index.php?list-users" class='text-light text-decoration-none'>No</a></button>
        <button type="button" class="btn btn-primary"><a href='index.php?delete_user=<?php echo $user_id;?>'class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>


