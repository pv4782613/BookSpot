<!-- Inspection Report -->
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
</style>
</head>
<body>
<a href="index.html" alt="logout" title="logout" onclick="alert('Are you sure you want to logout?');"><i class="fa fa-sign-out"></i></a>
<form action="upload_registration_details_admin.php" method="POST" enctype="multipart/form-data"> 
<div class="container">

<h3 style="color:#e91e63;font-size:30px;text-align:center;">Enter the Details</h3>

<div class="form-group">
<label>Enter Full_Name :</label>
<input type="text" name="Full_Name"  required>
</div>


<div class="form-group">
<label>Enter Mobile No:</label>
<input type="text" name="Mobile" pattern="[1-9,0]{10}" required>
</div>

<div class="form-group">
<label>Enter Your Email Address:</label>
<input type="text"  name="Email"  required>
</div>

<div class="form-group">
<label>Enter Username:</label>
<input type="text"  name="Username"  required>
</div>

<div class="form-group">
<label>Enter Password:</label>
<input type="password"  name="Password"  required>
</div>

<div class="form-group">
<label>Enter Address:</label>
<input type="textarea"  name="Address"  required>
</div>


<div class="form-group">
<label>Upload Passport Size Photo:</label>
<input type="file" id=""  name="Photo" required>
</div>


<input type="submit" name="submit" value="Send">
</div>
</form>

</body>
</html>


