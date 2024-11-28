
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
</head>
<body>
   
     <h3 class="text-success mt-3">All Orders</h3>
     <table class="table table-bordered mt-3">
        <thead style="background-color: #FFA756;">
        <?php
         $get_orders="Select * from `user_orders`";
         $result=mysqli_query($conn,$get_orders);
         $row_count=mysqli_num_rows($result);
        echo "
        <th>SI no.</th>
        <th>Amount Due</th>
        <th>Invoice number</th>
        <th>Total Products</th>
        <th>Order Date</th>
        <th>Status</th>
        <th>Delete</th>
             </tr>
            </thead>
             <tbody>";
            if($row_count==0){
                echo "<h2 class='bg-danger text-center mt-5'>No orders Yet</h2>";
            }else{
                $number=0;
                while($row_data=mysqli_fetch_assoc($result)){
                    $order_id=$row_data['order_id'];
                    $user_id=$row_data['user_id'];
                    $amount_due=$row_data['amount_due'];
                    $invoice_number=$row_data['invoice_number'];
                    $total_products=$row_data['total_products'];                  
                    $order_date=$row_data['order_date'];
                    $order_status=$row_data['order_status'];
                    $number++;
                    echo" <tr>
                    <td>$number</td>
                    <td>$amount_due</td>
                    <td>$invoice_number</td>
                    <td>$total_products</td>
                    <td>$order_date</td>
                    <td>$order_status</td>
                    <td><a href='index.php?delete_orders=<?php echo $order_id;?>'></a><button 
                type='button' class='btn-login' data-toggle='modal' data-target='#exampleModal'>Delete</button></td>
                </tr>";
                }
            }

        ?>
           
        </tbody>
     </table>
</body>
</html>