<?php

 include 'dbcon.php';

if(isset($_POST['submit']))
{
	$Product_ID1=$_POST['Product_ID'];
	
 $insertquery="delete from booking_details where Product_ID=$Product_ID1; ";
$query=mysqli_query($con,$insertquery);

if($query)
{
echo "Your Order has been closed successfully !!";
}
else
{
echo "Oops we are facing some issue to closed the ticket !!";
}

}
else
{
	echo "Submit button has not been clicked"; 
}

?>
