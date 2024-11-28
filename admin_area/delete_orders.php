<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../user_area/style.css">
</head>
<body>
    
</body>
</html>
<?php
if(isset($_GET['delete_orders'])){
    $delete_order_id=$_GET['delete_orders'];
    //echo $delete_id;
    //delete query

    $delete_orders="DELETE FROM `user_orders` WHERE order_id=$delete_order_id";
    $result=mysqli_query($conn,$delete_orders);
    if($result){
        echo "<script>alert('Orders deleted successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>