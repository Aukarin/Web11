<?php
$goodsId=$_GET['goodsId'];
$goodsName=$_GET['goodsName'];
$goodsPrice=$_GET['goodsPrice'];
$goodsQuantity=$_GET['goodsQuantity'];

$hostname = "localhost";
$username = "root";
$password = "2079";
$dbname = "departmentstore";
// Create connection
$conn = mysqli_connect($hostname, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql ="UPDATE `goods` SET `goodsName`='$goodsName',`goodsPrice`='$goodsPrice',`goodsQuantity`='$goodsQuantity' WHERE goodsId = '$goodsId' ";


mysqli_query($conn,$sql) or die("Update into the goods table an error occurred" .mysqli_error() );

if ($conn->query($sql) === TRUE) {
echo "Record Updaate successfully";

} else {
echo "Error update record: " . $conn->error;
}

$conn->close();

?>  
