<html>
<head>
<title>Form Submission</title>
<style>
*{
padding:0;
margin:0;
box-sizing:border-box;
font-size:22px;
}
body{
font-family:'Poppins';
}
section{
width:100%;
background-color:aliceblue;
display:flex;
align-items:center;
justify-content:center;
flex-direction:column;
}
.container,#Concern_Category{
width:100%;
max-width:900px;
padding:20px;
box-shadow:0px 0px 20px grey;
background:linear-gradient(#2196f3,#e91e63);
border-radius:8px;
color:white;
}
#Concern_Category
{
background:#87aee8;
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
button[type="submit"]
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
</style>
</head>

<body>
<section>

<div class="container">

<h3 style="color:#e91e63;font-size:30px;">Close Order</h3>
<form action="closed_confirm.php" method="POST" id="my-form" enctype="multipart/form-data">

<div class="form-group">
<label for="Employee_ID">Enter Product ID to Close the Order:</label>
<input type="text" name="Product_ID" pattern="[1-9,0]{6}" title="Employee id should be of 6 digits" required>
</div>


<button type="submit" name="submit">Submit</button>

</form>
</div>


</section>


</body>
</html>