<!-- After seller login order list will be displayed -->
<html>
<head>
<style>
#view {
  border-collapse: collapse;
  width: 100%;
}

#view td, #view th {
  border: 1px solid #ddd;
  padding: 8px;
}
#view tr:hover {background-color: #c1dff7;}

#view th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2f1669;
  color: white;
}
</style>
</head>

<body>
<table id="view">
<tr><th>Product_ID</th> <th>Product Name</th> <th>Product Quantity</th> <th>Product Amount(RS)</th>  <th>Customer Name</th> <th>Customer Contact No</th> <th>Customer Address</th>
</tr>

<tbody>
<?php 
include 'dbcon.php';

$selectquery="select * from booking_details";

$query=mysqli_query($con,$selectquery);

//$result=mysqli_fetch_array($query);
while($result=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $result['Product_ID']; ?></td>
<td><?php echo $result['Product_name']; ?></td>
<td><?php echo $result['Product_qty']; ?></td>
<td><?php echo $result['Product_amt']; ?></td>
<td><?php echo $result['Customer_name']; ?></td>
<td><?php echo $result['Customer_phno']; ?></td>
<td><?php echo $result['Customer_address']; ?></td>
<!--<td><img src="<?php echo $result['Customer_address']; ?>" width="100" height="100"></td>-->
</tr>

<?php
}
?>
</tbody>

</table>

</body>
<html>