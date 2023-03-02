<?php
//Upload the form details to the database 
include 'dbcon.php';

	if(isset($_POST['submit']))
	{
	$Product_ID=$_POST['Product_ID'];
	$Product_name=$_POST['Product_name'];
	$Product_qty=$_POST['Product_qty'];
	$Product_amt=$_POST['Product_amt'];
	$Customer_name=$_POST['Customer_name'];
	$Customer_phno=$_POST['Customer_phno'];
	$Customer_address=$_POST['Customer_address'];

	//print_r($file);
	//$filename=$Document['name'];
	//$filepath=$Document['tmp_name'];
	//$fileerror=$Document['error'];

	//if($fileerror==0)
	//{
	//	$destfile='file_stored/'.$filename;
		//echo $destfile;
	//	move_uploaded_file($filepath,$destfile);


		$insertquery="insert into booking_details(Product_ID,Product_name,Product_qty,Product_amt,Customer_name,Customer_phno,Customer_address) values('$Product_ID','$Product_name','$Product_qty','$Product_amt','$Customer_name','$Customer_phno','$Customer_address')";
		$query=mysqli_query($con,$insertquery);

		if($query)
		{
			echo "\nYour Order has been booked Successfully !!";
		}
		else
		{
			echo "\n Your Order has not been booked Successfully !!";
		}

//	}
 }
	else
	{
		echo "Submit button is not clicked"; 
	}

?>