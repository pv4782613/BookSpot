<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="footer_style.css">
<style>

*{
	box-sizing:border-box;
}
body
{
	background:#f7f8fc;	
}
.column3
{
float:left;
width:50%;
}
.leftbox{
	border:2px solid grey;
	height:500px;
	width:400px;
	margin:5% 0 0 25%;
	float:left;
	box-shadow:8px 8px 8px grey;
}
.rightbox{
	border:1px solid grey;
	float:left;
	height:300px;
	width:600px;
	margin:5% 10% 0 0;
	padding-top:3%;
}
.rightbox h1{
margin-left:5%;
}
.rightbox p{
	font-size:20px;
	color:grey;
	margin-left:5%;
	line-height:0.2em;
}
.rating{
	background:green;
	width:70px;
	margin-left:5%;
	padding:1% 0 1% 2%;
	color:white;
	border-radius:50px;
	font-weight:bold;
	font-size:20px;
}
.rating .fa{
	font-size:12px;
	margin-bottom:5%;
	background:green;
	color:white;
}
.leftbox1{
	float:left;
	margin:5% 0 0 25%;
}
.leftbox1 a{
	background:#2f1399;
	color:white;
	font-size:20px;
	font-weight:bold;
	text-decoration:none;
	margin-top:2%;
	padding:15px 40px;
	box-shadow:0px 8px 8px grey;
}
.rightbox a{
	border:2px solid #2f1399;
	padding:15px 47px;
	margin-left:5%;
	border-radius:5px;
	color:#2f1399;
	text-decoration:none;
	font-size:20px;
	font-weight:bold;
}
.rightbox a:hover
{
	background:#2f1399;
	color:white;
}
</style>
</head>

<body>
<?php 
include 'dbcon.php';

$selectquery="select * from product_details where Product_ID='111111'";

$query=mysqli_query($con,$selectquery);

//$result=mysqli_fetch_array($query);
while($result=mysqli_fetch_array($query))
{
?>
<div class="column3">
<div class="leftbox">
<img src="<?php echo $result['Images'] ?>" width="400" height="500">
</div>

<div class="leftbox1">
<a href="buy_now.php" target="_blank">Buy Now</a>
<a href="display_inspect.php" target="_blank">View Inspection</a>
</div>

</div>



<div class="column3">
	<div class="rightbox">
		<p><?php echo $result['Book_Name'] ?></p>
		<h1>Rs <?php echo $result['Price'] ?></h1>
		<div class="rating">4.4 <i class="fa fa-star"></i></div><br>
		<p style="font-size:18px;color:black;">Delivery charges Rs.50</p>
	</div>
	
	<div class="rightbox">
		<h1>Product Details</h1>
		<p>Book Name: <?php echo $result['Book_Name'] ?></p>
		<p>Author: <?php echo $result['Author'] ?></p>
		<p>Language: <?php echo $result['Language'] ?></p>
		<p>Format: <?php echo $result['Book_Type'] ?></p>
		<p>Genre: <?php echo $result['Genre'] ?></p>
		<p>Year: <?php echo $result['Year'] ?></p>
		<p>Pages: <?php echo $result['Pages'] ?></p>
		<p>Quantity: <?php echo $result['Quantity'] ?></p>
	</div>
	
	<div class="rightbox" style="height:240px;margin:5% 10% 5% 0;">
	<h1>Sold By</h1>
	<p>Seller_Name: <?php echo $result['Seller_Name'] ?></p>
	<p>Designation: <?php echo $result['Designation'] ?></p><br>
	<a href="">View More</a>
	</div>
</div>

<!-- Footer Page -->
<footer>

<div class="row1">
  <div class="column1">
    		<h4 class="underline" style="color:white;margin-left:12%;">Company</h4>
  			  <ul>
					<li><a href="images/survey.mp4">About Us</a></li>
					<li><a href="#services">Our Services</a></li>
					<li><a href="https://termly.io/wp-content/uploads/apple-terms-and-conditions-use-of-site-clause-example.png" target="_blank">Privacy Policy</a></li>
					<li><a href="#buyer">Inspection Details</a></li>
				</ul>
  </div>

  <div class="column1">
 			  <h4 class="underline" style="color:white;margin-left:12%;">Get Help</h4>
				<ul>
					<li><a href="#FAQs">FAQs</a></li>
					<li><a href="seller_registration.php">Seller Registration</a></li>
					<li><a href="buyer_registration.php">Buyer Registration</a></li>
					<li><a href="delivery_registration.php">Delivery Registration</a></li>
				</ul>
  </div>
  
  <div class="column1">
    		<h4 class="underline" style="color:white;margin-left:12%;">Categories</h4>
				<ul>
					<li><a href="pharmacy.html">Pharmacy Books</a></li>
					<li><a href="filter_books.html">Coding Books</a></li>
					<li><a href="">Management Books</a></li>
					<li><a href="">Autobiography Books</a></li>
				</ul>
  </div>

  <div class="column1">
 		 <h4 class="underline" style="color:white;margin-left:12%;">Follow Us</h4>
         <a href=""><i class="fa fa-facebook"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-instagram"></i></a>
          <a href=""><i class="fa fa-linkedin"></i></a>
          <a href=""><i class="fa fa-telegram"></i></a>
  </div>

</div>

</footer>

<?php
}
?>
</body>
</html>