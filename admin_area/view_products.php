<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../user_area/style.css">
     <!-- bootstrap links -->
    
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <h3 class="text-center text-success mt-2">All Products</h3>
    <table class="table table-bordered mt-3">
        <thead style="background-color: #FFA756;">
            <tr>
                <th>Product ID</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Price </th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../database/dcconnect.php"; 
            $get_products="SELECT * FROM `producttable`";
            $result=mysqli_query($conn,$get_products);
            $number=0;
            while($row=mysqli_fetch_assoc($result)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $number++;
                ?>
               <tr class='text-center'>
               <td><?php echo $number;?></td>
               <td><?php echo $product_title;?></td>
               <td><img src='./product_images/<?php echo $product_image;?>' class='product_img'/></td>
               <td><?php echo "Rs".$product_price;?></td>
               <td><a href='index.php?delete_product=<?php echo $product_id;?>'></a><button 
               type="button" class="btn-login" data-toggle="modal" data-target="#exampleModal">Delete</button></td>
           </tr>
               <?php

            }
            
           ?>

        </tbody>
    </table>
</body>
</html>
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <h4>Are you sure you want to delete this?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
         data-dismiss="modal"><a href="./index.php?view_products" class='text-light text-decoration-none'>No</a></button>
        <button type="button" class="btn btn-primary"><a href='index.php?delete_product=<?php echo $product_id;?>'class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>