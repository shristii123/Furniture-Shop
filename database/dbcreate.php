<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$hostname="localhost";
$username="root";
$password="";

$conn=mysqli_connect($hostname,$username,$password);
if(!$conn){
    die("Connection was not successful due to:".mysqli_connect_error());

}
else{
    echo "Connection is successful";
}
echo "<br>";
$sql="CREATE DATABASE furnitures";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Database is created";
    
}
?>
</body>
</html>




