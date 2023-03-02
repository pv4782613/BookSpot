<!-- buy Now -->
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
padding:0;
margin:0;
box-sizing:border-box;
font-size:22px;
}
body{
font-family:'Poppins';
background:#f7f8fc;
}
.container{
width:100%;
margin-left:28%;
margin-top:1%;
max-width:600px;
padding:20px;
box-shadow:0px 0px 20px grey;
background:linear-gradient(#2196f3,#e91e63);
border-radius:8px;
color:white;
}
.form-group{
width:100%;
margin-top:10px;
font-size:20px;
}
.form-group select,
.form-group input,
.form-group textarea{
width: 100%;
padding: 12px;
border-top:1px solid rgba(255,255,255,0.5);
border-left:1px solid rgba(255,255,255,0.5);
backdrop-filter:blur(5px);
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
background:rgba(255,255,255,0.1); 
color:white;
} 
.form-group select{
	color:black;
}
textarea{
resize:vertical; 
}
input[type="submit"]
{
	width:100%;
	border:none;
	outline:none;
	padding:20px;
	font-size:24px;
	border-radius:8px;
	font-family:'Poppins';
	color:rgb(27,166,247);
	text-align:center;
	cursor:pointer;
	margin-top:10px;
	transition: .3s ease background-color; 
	background:#2196f3;
	color:white;
}
a .fa{
font-size:60px;
float:right;
color:#2196f3;
top:0;
padding:5px 25px;
}
.form-group a{
background:green;
color:white;
font-size:20px;
text-decoration:none;
padding:8px 10px;
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

<a href="index.html" alt="logout" title="logout" onclick="alert('Are you sure you want to logout?');"><i class="fa fa-sign-out"></i></a>
<form action="upload.php" method="POST" enctype="multipart/form-data"> 
<div class="container">

<h3 style="color:#e91e63;font-size:30px;text-align:center;">Enter the Details</h3>

<div class="form-group">
<label>Enter Product_ID :</label>
<input type="text"  value="<?php echo $result['Product_ID'] ?>" name="Product_ID"  pattern="[1-9,0]{6}" title="Product_ID should be of 6 digits" readonly required>
</div>

<div class="form-group">
<label>Enter Product_name :</label>
<input type="text" value="<?php echo $result['Book_Name'] ?>" name="Product_name" pattern="^(?![0-9,$,%,#,@,!,]).*" readonly title="Designation should consists of characters"   required>
</div>


<div class="form-group">
<label>Enter Product_qty :</label>
<input type="number" id=""  name="Product_qty" required>
</div>


<div class="form-group">
<label>Enter Product_amt :</label>
<input type="text" value="<?php echo $result['Price'] ?>" name="Product_amt" readonly required>
</div>


<div class="form-group">
<label>Enter Customer_name :</label>
<textarea type="text" id=""  name="Customer_name"  title="Customer name should consists of characters"   required></textarea>
</div>

<div class="form-group">
<label>Enter Customer_phno :</label>
<input type="text" id=""  name="Customer_phno"  pattern="[1-9,0]{10}" title="Phone number should consists of 10 digits" required>
</div>

<div class="form-group">
<label>Enter Customer_address :</label>
<textarea type="textarea" id=""  name="Customer_address" title="Customer address  should consists of characters" required></textarea>
</div>

<div class="form-group">
<select>
<option>Select the Payment Mode</option>
<option name="cash">Cash On delivery</option>
<option name="online">Online Payment</option>
</select>
</div>

<div class="form-group">
<a href="https://rzp.io/i/XGccVIZrK" target="_blank">Make Payment</a>
</div><br>



<input type="submit" name="submit" value="Send">
</div>
</form>

<?php
}
?>
</body>
</html>


