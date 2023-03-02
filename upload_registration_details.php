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
		$Branch=$_POST['Branch'];
		$Photo=$_FILES['Photo'];

		//print_r($file);
		$filename=$Photo['name'];
		$filepath=$Photo['tmp_name'];
		$fileerror=$Photo['error'];

		if($fileerror==0)
		{
			$destfile='file_stored/'.$filename;
			//echo $destfile;
			move_uploaded_file($filepath,$destfile);


			$insertquery="insert into delivery_registration(Full_Name,Mobile,Email,Username,Password,Branch,Photo) values('$Full_Name','$Mobile','$Email','$Username','$Password','$Branch','$destfile')";
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