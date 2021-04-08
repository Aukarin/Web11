
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


$sql = mysqli_query($conn,"SELECT * FROM goods order by goodsid")
or die (mysqli_error($conn));
echo '<table border="1" align="center" width="500">';
echo "
    <tr>
    <td>goodsID</td>
    <td>goodname</td>
    <td>goodPrice</td>
    <td>goodQuantity</td>
    </tr>";

    while ( $row = mysqli_fetch_array ( $sql ) ) {
     echo "<tr>";
     echo  "<td>".$row["goodsId"] ."</td>" ;
     echo  "<td>".$row["goodsName"] ."</td>" ;
     echo  "<td>".$row["goodsPrice"] ."</td>" ;
     echo  "<td>".$row["goodsQuantity"] ."</td>" ;
     echo "<td><a href='editgoods.php?ID=$row[0]'> แก้ไข </a></td>";
     echo "<td><a href='del_goods.php?ID=$row[0]'> ลบ </a></td></tr>";
    }

echo "</table>";
?>  



