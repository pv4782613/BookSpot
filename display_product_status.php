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
<tr><th>Product_ID</th> <th>Product_delivered</th> <th>Reason</th>  <th>Delivery_date</th> <th>Payment_mode</th>
</tr>

<tbody>
<?php 
include 'dbcon.php';

$selectquery="select * from tracking_details";

$query=mysqli_query($con,$selectquery);

//$result=mysqli_fetch_array($query);
while($result=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $result['Product_id']; ?></td>
<td><?php echo $result['Product_delivered']; ?></td>
<td><?php echo $result['Reason']; ?></td>
<td><?php echo $result['Delivery_date']; ?></td>
<td><?php echo $result['Payment_mode']; ?></td>
</tr>

<?php
}
?>
</tbody>

</table>

</body>
<html>