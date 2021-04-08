         
<?php
$goodsId=$_REQUEST['ID'];

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

$sql = "DELETE FROM goods WHERE goodsId ='$goodsId'  ";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
echo header("location:showgoods.php"); 
} else {
echo "Error deleting record: " . $conn->error;
}
$conn->close();


?>  
