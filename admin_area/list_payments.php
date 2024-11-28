
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
   
     <h3 class="text-success mt-3">All Payments</h3>
     <table class="table table-bordered mt-3">
        <thead style="background-color: #FFA756;">
        <?php
         $get_payments="Select * from `user_payments`";
         $result=mysqli_query($conn,$get_payments);
         $row_count=mysqli_num_rows($result);
      
            if($row_count==0){
                echo "<h2 class='bg-danger text-center mt-5'>No Payments Received Yet</h2>";
            }else{
                echo "
                <th>SI no.</th>
                <th>Invoice number</th>
                <th>Amount</th>
                <th>Payment mode</th>
                <th>Order Date</th>
                <th>Delete</th>
                     </tr>
                    </thead>
                     <tbody>";
                $number=0;
                while($row_data=mysqli_fetch_assoc($result)){
                    $order_id=$row_data['order_id'];
                    $payment_id=$row_data['payment_id'];
                    $amount=$row_data['amount'];
                    $invoice_number=$row_data['invoice_number'];
                    $payment_mode=$row_data['payment_mode'];
                    $date=$row_data['date'];
                    $number++;
                    echo" <tr>
                    <td>$number</td>
                    <td>$invoice_number</td>
                    <td>$amount</td>
                    <td>$payment_mode</td>
                    <td>$date</td>
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