<?php
if(isset($_GET['delete_user'])){
    $delete_id=$_GET['delete_user'];
    //echo $delete_id;
    //delete query

    $delete_user="DELETE FROM `usertable` WHERE user_id=$delete_id";
    $result_user=mysqli_query($conn,$delete_user);
    if($result_user){
        echo "<script>alert('User deleted successfully')</script>";
        echo "<script>window.open('./index.php','_self')</script>";
    }
}
?>