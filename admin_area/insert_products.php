<?php
include('../database/dcconnect.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_categories=$_POST['product_categories'];
    $product_price=$_POST['product_price'];
    //$product_status='true';

    //accessing images
    $product_image=$_FILES['product_image']['name'];

   //accessing image tmp name
   $temp_image=$_FILES['product_image']['tmp_name'];
  

    //checking empty condition
    if($product_title==NULL|| $description==NULL || $product_keywords==NULL || $product_categories==NULL || 
    $product_price==NULL || $product_image==NULL ){
       echo "<script>alert('Please fill all the available field')</script>";
     exit();
 }
     else{
        move_uploaded_file($temp_image,"./product_images/$product_image");
        //insert query
        $insert_products="insert into `producttable` (product_title,product_description,product_keywords,
        product_categories,product_image,product_price,date)
        values('$product_title','$description','$product_keywords',
        '$product_categories','$product_image','$product_price',NOW())";
        $result_query=mysqli_query($conn,$insert_products);
        if($result_query){
            echo "<script>alert('Successfully inserted the products')</script>";
        }
       
     }

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product-Admin</title>
    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap-->
    <link rel="stylesheet" href="../user_area/style.css">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!--Form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">

            </div>
            <!--description-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">

            </div>
            <!--keywords-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">

            </div>
            <!--categories-->
            <div class="from-outline mb-4 w-50 m-auto">
                <select name="product_categories" class="form-select" id="">
                <option value="">Select Category</option>
                    <option value="Bedroom">Bedroom</option>
                    <option value="Dining">Dining</option>
                    <option value="Living">Living</option>
                    <option value="Office">Office</option>
                </select>
            </div>
            <!--Image -->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product image </label>
                <input type="file" name="product_image" id="product_image" 
                class="form-control" autocomplete="off" required="required">
            </div>

            <!--Price-->
            <div class="from-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">

            </div>
            <!--Submit-->
            <div class="from-outline mb-4 w-50 m-auto">
                <input type="submit"name="insert_product" class="btn btn-secondary mb-3 px-3 "value="Insert Products">
            </div>
            
        </form>
    </div>
</body>
</html>