<?php
//Upload the form details to the database 
include 'dbcon.php';

	if(isset($_POST['submit']))
	{
	$Product_ID=$_POST['Product_ID'];
	$Book_Name=$_POST['Book_Name'];
	$Price=$_POST['Price'];
	$Language=$_POST['Language'];
	$Book_Type=$_POST['Book_Type'];
	$Genre=$_POST['Genre'];
	$Pages=$_POST['Pages'];
	$Year=$_POST['Year'];
	$Quantity=$_POST['Quantity'];
	$Author=$_POST['Author'];
	$Seller_Name=$_POST['Seller_Name'];
	$Designation=$_POST['Designation'];
	$Images=$_FILES['Images'];

	//print_r($file);
	$filename=$Images['name'];
	$filepath=$Images['tmp_name'];
	$fileerror=$Images['error'];

	if($fileerror==0)
	{
		$destfile='file_stored/'.$filename;
		//echo $destfile;
		move_uploaded_file($filepath,$destfile);


		$insertquery="insert into product_details(Product_ID,Book_Name,Price,Language,Book_Type,Genre,Pages,Year,Quantity,Author,Seller_Name,Designation,Images) values('$Product_ID','$Book_Name','$Price','$Language','$Book_Type','$Genre','$Pages','$Year','$Quantity','$Author','$Seller_Name','$Designation','$destfile')";
		$query=mysqli_query($con,$insertquery);

		if($query)
		{
			echo "\nYour Details has been send Successfully !!";
		}
		else
		{
			echo "\n Your Details has not been send Successfully !!";
		}

	}
 }
	else
	{
		echo "Submit button is not clicked"; 
	}

?>