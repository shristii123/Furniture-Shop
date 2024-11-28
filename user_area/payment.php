<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <!-- <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script> -->
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- bootstrap link -->
    <style>
        .payment_img{
            width:100%;
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
    <!--php code to access user_id-->
    <?php
    $user_ip=getIPAddress();
    $get_user="Select * from `usertable` where user_ip='$user_ip'";
    $result=mysqli_query($conn,$get_user);
    $run_query=mysqli_fetch_array( $result);
    $user_id=$run_query['user_id'];

    ?>
    <div class="container">
        <h2 class="text-center text-warning">Payment option</h2>
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6">
            <!-- <button id="payment-button">Pay with Khalti</button> -->
            <a href="pay.php" class=""><h2 class="text-center">Pay With Khalti</a>
            </div>
            <div class="col-md-6">
            <a href="order.php?user_id=<?php echo $user_id ?>" class=""><h2 class="text-center">Pay offline</a>
            </div>
        </div>
    </div>
    <!-- <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_7d7578b52e794dd89f6b4c63b71bae7e",
            "productIdentity": "1234567890",
            "productName": "L-SHAPE SOFA",
            "productUrl": "http://localhost/fromproduct/user_area/living.php",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    //console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script> -->
   

</body>
</html>