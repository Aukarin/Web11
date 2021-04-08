<html>

        <head><title>แก้ไข</title></head>
            <body>
            
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


$sql = "SELECT * FROM goods WHERE goodsId = '$goodsId'  ";

$dbQuery = mysqli_query($conn,$sql);

$result =  mysqli_fetch_object($dbQuery);


?>  

                <form method="GET" action='update.php' >
                <table border="1" align="center" width="500">
                <tr>
                    <td colspan="2" align="center">
                    <big>Add Goods </big>
                    </td>
                </tr>
                <tr>
                    <td> goodsid : </td>
                    <td><input type="text"  readonly name="goodsId"  value=" <?php echo $result->goodsId;  ?>"/> </td>
                </tr>
                <tr>
                    <td> goodsName : </td>
                    <td><input type="text" name="goodsName"  value="<?php echo $result->goodsName;  ;?>"/> </td>
                </tr>
                    <td> goodsPrice : </td>
                    <td><input type="number" name="goodsPrice"  value="<?php echo  $result->goodsPrice ; ?>"/> </td>
                </tr>
                    <td> goodsQuantity : </td>
                    <td><input type="number" name="goodsQuantity" value="<?php echo $result->goodsQuantity  ;?>"/> </td>
                </tr>
                

              
                </table>
                <input align="center" name="sub" type="submit" id="btn-sub" value="Update" /> 
                </form>
                <?php 
$conn->close();
        ?>
     
            </body>
</html>