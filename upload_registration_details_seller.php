<?php
//Upload the form details to the database 
include 'dbcon.php';

	if(isset($_POST['submit']))
	{
		$Full_Name=$_POST['Full_Name'];
		$Mobile=$_POST['Mobile'];
		$Email=$_POST['Email'];
		$Username=$_POST['Username'];
		$Password=$_POST['Password'];
		$Address=$_POST['Address'];
		$Photo=$_FILES['Photo'];
		$Aadhar=$_FILES['Aadhar'];
		$Pan=$_FILES['Pan'];

		//print_r($file);
		$filename=$Photo['name'];
		$filename1=$Aadhar['name'];
		$filename2=$Pan['name'];
		
		$filepath=$Photo['tmp_name'];
		$fileerror=$Photo['error'];

		if($fileerror==0)
		{
			$destfile='file_stored/'.$filename;
			$destfile1='file_stored/'.$filename1;
			$destfile2='file_stored/'.$filename2;
			
			//echo $destfile;
			move_uploaded_file($filepath,$destfile);
			move_uploaded_file($filepath,$destfile1);
			move_uploaded_file($filepath,$destfile2);


			$insertquery="insert into seller_registration(Full_Name,Mobile,Email,Username,Password,Address,Photo,Aadhar,Pan) values('$Full_Name','$Mobile','$Email','$Username','$Password','$Address','$destfile','$destfile1','$destfile2')";
			$query=mysqli_query($con,$insertquery);

			if($query)
			{
				echo "\nYour Registration has been done Successfully !!";
			}
			else
			{
				echo "\n Failed to Register !!";
			}
		}
		else
		{
			echo "Submit button is not clicked"; 
		}
	}
?>