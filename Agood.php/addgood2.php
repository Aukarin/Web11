
<?php
$goodsId=$_GET['goodsId'];
$goodsName=$_GET['goodsName'];
$goodsPrice=$_GET['goodsPrice'];
$goodsQuantity=$_GET['goodsQuantity'];

?>


<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;
}
 
td {
    border: 1px solid #5DADE2;
    text-align: left;
    padding: 8px;
}
 
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table border=1 align=center width=500> 
<tr >
<th colspan="2" align=center> Add goods
</th>
</tr>
<tr >
<td> Goods id
</td>
<td> <?php echo $goodsId ; ?>
</td>
</tr>

<tr >
<td> Goods name
</td>
<td> 
<?php echo  $goodsName ; ?>
</td>
</tr>


<tr >
<td> Goods price(baht)
</td>
<td> 
<?php echo  $goodsPrice ; ?>
</td>
</tr>


<tr >
<td> Goods quanity
</td>
<td> 
<?php echo  $goodsQuantity ; ?>
</td>
</tr>




</table>



<?php


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




$sql = "INSERT INTO goods( goodsId , goodsName , goodsPrice , goodsQuantity ) values ('$goodsId','$goodsName','$goodsPrice','$goodsQuantity')";

mysqli_query($conn,$sql) or die("Insert into the goods table an error occurred" .mysqli_error() );

echo 'the code '.$goodsId.'has been save';
mysqli_close($conn);
echo  '<a href ="addgood.php">Show goods </a>';



?>
