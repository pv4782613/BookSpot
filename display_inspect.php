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
<tr><th>Product_ID</th> <th>Quality</th> <th>Torn</th>  <th>Blank</th> <th>Images</th>
</tr>

<tbody>
<?php 
include 'dbcon.php';

$selectquery="select * from inspect_details where Product_ID='111111'";

$query=mysqli_query($con,$selectquery);

//$result=mysqli_fetch_array($query);
while($result=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $result['Product_ID']; ?></td>
<td><?php echo $result['Quality']; ?></td>
<td><?php echo $result['Torn']; ?></td>
<td><?php echo $result['Blank']; ?></td>
<td><img src="<?php echo $result['Images']; ?>" width="200" height="200"></td>
</tr>

<?php
}
?>
</tbody>
</table>

</body>
<html>