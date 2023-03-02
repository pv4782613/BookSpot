<?php
//Upload the form details to the database 
include 'dbcon.php';

	if(isset($_POST['submit']))
	{
	$Product_ID=$_POST['Product_ID'];
	$Quality=$_POST['Quality'];
	$Torn=$_POST['Torn'];
	$Blank=$_POST['Blank'];	
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


		$insertquery="insert into inspect_details(Product_ID,Quality,Torn,Blank,Images) values('111111','$Quality','$Torn','$Blank','$destfile')";
		$query=mysqli_query($con,$insertquery);

		if($query)
		{
			echo "\nData is been updated !!";
		}
		else
		{
			echo "\nData is not updated !!";
		}

	}
 }
	else
	{
		echo "Submit button is not clicked"; 
	}

?>