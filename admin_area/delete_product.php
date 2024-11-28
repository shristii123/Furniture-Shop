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
if(isset($_GET['delete_product'])){
    $delete_id=$_GET['delete_product'];
    //echo $delete_id;
    //delete query

    $delete_product="DELETE FROM `producttable` WHERE product_id=$delete_id";
    $result_product=mysqli_query($conn,$delete_product);
    if($result_product){
        echo "<script>alert('Product deleted successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>