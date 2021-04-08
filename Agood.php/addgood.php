<?php
$servername = "localhost";
$username = "root";
$password = "2079";
$dbname = "departmentstore";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



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
<form action="addgood2.php" method="GET"> 
<table border=1 align=center width=500> 
<tr >
<th colspan="2" align=center> Add goods
</th>
</tr>
<tr >
<td> Goods id
</td>
<td> 
<input name="goodsId" type="text"  value="" id="goodsId" /> 
</td>
</tr>

<tr >
<td> Goods name
</td>
<td> 
<input name="goodsName" type="text"  value="" id="goodsName" /> 
</td>
</tr>


<tr >
<td> Goods price(baht)
</td>
<td> 
<input name="goodsPrice" type="number"  value="" id="goodsPrice" /> 
</td>
</tr>


<tr >
<td> Goods quanity
</td>
<td> 
<input name="goodsQuantity" type="number"  value="" id="goodsQuantity" /> 
</td>
</tr>




</table>
<br></br>
<table border=0 align=center width=500> 

<tr >
<th  align=right> 
<input name="sub" type="submit" id="btn-sub" value="ADD" /> 
</td>
<th  align=left> 


<input name="reset" type="reset" id="btn-re" value="Clear" /> 
</td>
</tr>
</table>
</form> 