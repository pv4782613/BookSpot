<?php
//Upload the form details to the database 
include 'dbcon.php';

	if(isset($_POST['submit']))
	{
	$Product_id=$_POST['Product_id'];
	$Product_delivered=$_POST['Product_delivered'];
	$Reason=$_POST['Reason'];
	$Delivery_date=$_POST['Delivery_date'];
	$Payment_mode=$_POST['Payment_mode'];


		$insertquery="insert into tracking_details(Product_id,Product_delivered,Reason,Delivery_date,Payment_mode) values('$Product_id','$Product_delivered','$Reason','$Delivery_date','$Payment_mode')";
		$query=mysqli_query($con,$insertquery);

		if($query)
		{
			echo "\nStatus Updated to Seller Successfully !!";
		}
		else
		{
			echo "\nTheir is some issue in the updation of status !!";
		}

	}
	else
	{
		echo "Submit button is not clicked"; 
	}

?>