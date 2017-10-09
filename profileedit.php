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
<table  width="400" border="1">
  <tr><font color="black"<html>
    <head>
        <title>registration
        </title>
    </head>

    <body>



</div>
   
   <td><font color="black">&nbsp;Photo</font></td>
    <td><font color="black">&nbsp;Firstname</font></td>
    <td><font color="black">&nbsp;Lastname</font></td>
     <td><font color="black">&nbsp;Gender</font></td>
    <td><font color="black">&nbsp;Place</font></td>
    <td><font color="black">&nbsp;Pincode</font></td>
    <td><font color="black">&nbsp;Mobile Number</font></td>
  </tr>
<?php
$id=$_REQUEST['id'];
include 'connection.php';
include 'logcheck.php';

$sql="select * from tbl_registration where id=$id";
$results=mysqli_query($con,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
html{
background:url('jky.png') no-repeat center fixed;
background-size:cover;
}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee edit</title>
</style>
</head>

<body>
<form action="profileupdate.php" method="post">
<td><img src="<?php echo $row['image']; ?>" width="75px" height="75px" /></td>
<td><input name="first_name" type="text" value="<?php echo $row['first_name']; ?>"/></td>
<td><input name="last_name" type="text" value="<?php echo $row['last_name']; ?>"/></td>
<td><input name="gender" type="text" value="<?php echo $row['gender']; ?>"/></td>
<td><input name="place" type="text" value="<?php echo $row['place']; ?>"/></td>
<td><input name="pincode" type="text" value="<?php echo $row['pincode']; ?>"/></td>
<td><input name="mobile" type="tel" value="<?php echo $row['mobile']; ?>"/></td>
<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" /> </td>
<td> <input type="submit" value="update"  name="ok"/> </td>

</form></table>
</body>
</html>
