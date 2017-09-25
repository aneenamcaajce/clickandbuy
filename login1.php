<?php
include 'connection.php'; //database connection page
if(isset($_SESSION["userid"])) {
	header('location:usershome.php');
}
if(isset($_POST["submit"]))
{
	$userid=$_POST["userid"];   //username value from the form
	$password=$_POST["password"];	//password value from the form
	//echo $usern;
	$sql="select * from tbl_login where userid='$userid' and password ='$password' "; //value querried from the table
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));  //query executing function
	
	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch['usertype']=="user") // role means admin or user , for admin set to 0 and for user set to  
		{
			$_SESSION["userid"]=$userid;
			//$_SESSION["id"]=$fetch['id'];
			// setting username as session variable 
			header("location:usershome.php");	//home page or the dashboard page to be redirected
		}
		elseif($fetch['usertype']=="admin") // role means admin or user , for admin set to 0 and for user set to  
		{
			//$_SESSION["username"]=$username;	// setting username as session variable 
			header("location:admin.php");
		}
		elseif($fetch['usertype']=="moderator") // role means admin or user , for admin set to 0 and for user set to  
		{
			//$_SESSION["username"]=$username;	// setting username as session variable 
			header("location:admin.php");
		}
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CLICK AND BUY</title>
<link rel="stylesheet" href="coe.css" type="text/css">
<style>

ul {
    list-style-type: none;
    margin: 5;
    padding: 0;
    overflow: hidden;
    background-color: #2441C7;
    top: 0;
    width: 100%;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color:#000; 
}
div.header{
text-align:center;
font-family:serif;
height:100px;
color:green;
background-color:white;
margin-top:0px;
}

#heading{
position:absolute;
top:10px;
right:20px;
width:100%;
}


.button{
	width:130px;
	height:30px;
	background-color:#4CAF50;
	border-radius:13px;
	cursor: pointer;
}
.login{
	border:black;
	height : 400px;
	width: 250px;
	position: absolute;
	left:1000px;
	top:168px;
	color:blue;
}
	.login7{
	border:black;
	height : 400px;
	width: 650px;
	position: absolute;
	rightt:1000px;
	top:168px;
	color:blue;
}
	.login6{
	border:black;
	height : 400px;
	width: 250px;
	position: absolute;
	right:900px;
	top:200px;
	color:blue;
}
.footer{
	position:absolute;
	top:800px;
	width:100%;
	color:white;
	background-color:#060001;
	height:150px;
}
.imagegalllery1{
	position:absolute;
	top:168px;
	width:100%;
	height:300px;
}
.imagegalllery{
	position:absolute;
	top:600px;
	width:100%;
	height:300px;
}
.img{
	position: absolute;
	border: 3px solid black;
	width: 900px;
	height: 600px;
	top: 145px;
}
.login_pic{
    width: 30%;
    border-radius: 50%;
}
.login_image_container{
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right:16px;
    padding-left: 16px;
}
.div {
       background-color:black;
       height:10%;
}
.floating-box{
           float:left;
           width:500px;
           height:350px;
           margin:10px;
         
          }
.float-box{
            float:right;
            width:300px;
            height:500px;
            margin:30px;
            
            }
.float-box1{
             float:left;
             width:1318px;
             height:175px;
             margin:10px;
             background-color:gray;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
   box-sizing: border-box;
   
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
}
form {
    border: 3px solid #f1f1f1;
}






.container {
    padding: 60px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    
}
html{
background:url('hj.jpg') no-repeat center fixed;
background-size:cover;
}
</style>
</head>
<body>
<div class="header">
<h1 id="heading" align="left">&nbsp&nbsp&nbsp&nbsp<img src="photo1.jpg" border="0" id="LogoImage" alt="Herb Affair" width="130" height="70">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>CLICK AND BUY</i></h1>
</div>

<ul style="margin-top:2px;">
<li><a class="active" href="registration.php">REGISTER</a></li>
 <li><a class="active" href="#home">OFFERS</a></li>
 <li><a class="active" href="index.php">HOME</a></li>
</ul>
<div class= "img">
<img src="jkl.jpg" alt="class" width="1500px;" height="384">
</div>
<div class="float-box">
<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><font color="orange">LOGIN</font></u></h2>

<form name="login" id="login" action="#" method="post">

  <div class="container">
    
    <label><b><font color="orange">Userid</font></b></label><br>
    <input type="text" placeholder="Enter Userid" name="userid" required><br>

    <label><b><font color="orange">Password</font></b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
        
    <button type="submit" name="submit">Login</button>
    </div>
  
  </div>
</form>
</div>
</body>
</html>