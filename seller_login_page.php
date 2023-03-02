<?php 
include 'dbcon.php';
$file = file_get_contents('seller_invalid_page.php');
$next_page = file_get_contents('seller_main_page.html');


session_start(); 

if($_SERVER['REQUEST_METHOD']=='GET')
{
?>

<form method="post" class="form1" action="<?php echo $_SERVER['PHP_SELF']?>">	

<b>Seller Username</b><input type="text" name="Username"  placeholder="Username" required>
<b>Password</b><input type="password" name="Password" placeholder="Password" required>
<input type="submit" name="submit" class="submit1" value="submit">
<p>By continuing, you agree to BookSpot's</p>
<a href="https://termly.io/wp-content/uploads/apple-terms-and-conditions-use-of-site-clause-example.png" id="tt"> Terms of use & policy.</a>
<p class="new">New User?<a href="seller_registration.php" target="_blank" >Click Here</a></p>
</form>
<?php
}
elseif($_SERVER['REQUEST_METHOD']=='POST')
{
	if(!empty($_POST['submit']))
	{
		$Username=$_POST['Username'];
		$Password=$_POST['Password'];
		$query="select * from seller_registration where Username='$Username' and Password='$Password'";
		$result=mysqli_query($con,$query);
		$count=mysqli_num_rows($result);
		
		if($count>0)
		{
			echo "<p class='a1'>You have Successfully Login !! </p>";
			echo "<br><a href='seller_main_page.html' class='a2' target='_blank'>Proceed</a>";
		}
		else
		{
			echo $file;
		}
	}
}
else
{
	die("not able");
}

?>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>

body{
background-image:url('try3.gif');
background-position: left; 
background-repeat: no-repeat; 
}
*{
font-size:20px;
}

/*Login Page*/
.form1{
width:25%;
height:65%;
float:right;
background:linear-gradient(#1D3CAC,white);
padding:40px 20px;
color:white;
margin:1% 10%;
border:1px solid #1D3CAC;
box-shadow:5px 5px 5px grey;
}
.form1 p{
	color:black;
	margin-left:4%;
}
.form1 a{
color:blue;
font-family:'arial';
font-weight:bold;
margin-left:5%;
}
.a1{
	color:green;
	margin-left:60%;
	margin-top:10%;
	font-size:30px;
}
.a2{
	background-color:green;
	border-radius:5px;
	padding:15px;
	margin-left:69%;
	font-size:25px;
	color:white;
	text-decoration:none;
}
input {
 width: 100%;
  padding: 10px;
  border-top:1px solid rgba(255,255,255,0.5);
  border-left:1px solid rgba(255,255,255,0.5);
  backdrop-filter:blur(5px);
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
.submit1{
background:#fc4812;
color: white;
 margin-top: 15px;
}
#tt
{
	font-size:15px;
	padding-left:60px;
}
.new{
padding-left:15%;
padding-top:5%;
}
.new a
{
	font-size:18px;
	color:#fc4812;
}
</style>
<body>


</body>
</html>


