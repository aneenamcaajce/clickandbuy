<!DOCTYPE html>
<html>
<head>
<title>CLICK AND BUY</title>
<style>

ul {
    list-style-type: none;
    margin: 5;
    padding: 0;
    overflow: hidden;
    background-color: #333;
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
height:70px;
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
	border:3px solid black;
	height : 400px;
	width: 350px;
	position: absolute;
	left:950px;
	top:168px;
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
.imagegalllery{
	position:absolute;
	top:600px;
	width:100%;
	height:300px;
}
.img{
	position:absolute;
	border: 3px solid black;
	width:900px;
	height:400px;
	top:168px;
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
</style>
</head>
<body>
<div class="header">
<h1 id="heading"><i>CLICK AND BUY</i></h1>
</div>

<ul style="margin-top:2px;">
<li><a class="active" href="logout.php">LOGOUT</a></li>
<li><a class="active" href="changepassword.php">CHANGE PASSWORDS</a></li>
<li><a class="active" href="feedback.php">FEEDBACK</a></li>
<li><a class="active" href="delivery.php">DELIVERY DETAILS</a></li>
<li><a class="active" href="payment.php">PAYMENT</a></li>
<li><a class="active" href="winners.php">WINNERS</a></li>
<li><a class="active" href="product.php">PRODUCTS</a></li>
<li><a class="active" href="myprofile.php">MY PROFILE</a></li>
 <li><a class="active" href="#home">OFFERS</a></li>
 <li><a class="active" href="#home">HOME</a></li>
</ul>
</ul>
</body>
</html>
<?php
$id=$_POST["id"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$place=$_POST["place"];
$pincode=$_POST["pincode"];
$mobile=$_POST["mobile"];
include 'connection.php';
include 'logcheck.php';
$sql="update   `clickandbuy`.`tbl_registration` SET  `first_name` =  '$first_name',`last_name` =  '$last_name',`gender` = '$gender',`address` = '$address',`place` = '$place',`pincode` = '$pincode',`mobile` ='$mobile'WHERE  id=$id";
$results=mysqli_query($con,$sql);
//echo $sql;
header("location:myprofile.php");
?>
