<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>CLICK AND BUY</title>
<link rel="stylesheet" href="coe.css" type="text/css">
<style>
body {margin:0;}
.dropbtn {
    background-color: #4d4d00;
    color: white;
    padding: 10px;
	
    font-size: 10px;
    border: none;
    cursor: pointer;
}

.dropdown {
	margin-left:1050px;
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: #8400ff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #7070db;
    position: fixed;
    top: 0;
    width: 100%;
}
 .footer
  {
	  width:100%;
	  height:20%;
	  background-color:black;
	  float:left;
	  position:relative;
	  text-align:center;
	  color:white;
  }

li {
    float:right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #1a1a00;
}

.active {
    background-color: white;
}
h1 {
    text-shadow: 2px 2px #FF0000;
}
p {
    text-indent: 50px;
}
.left {
    position: relative;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
}
.right {
    position: absolute;
    right: 0px;
    width: 300px;
    float:left;
    padding: 10px;
}
  .dropdown
{
position: relative;
display: inline-block;
}
.dropdown-content
 {
	z-index:2;
	border-radius: 5px;
	font-size:20px;
  display: none;
  position: absolute;
  background-color: black;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	box-width:10%;
  padding: 12px 24px;
}
.dropdown:hover .dropdown-content
  {
  display: block;
  }
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
.div1 {
	float:left;
	position:absolute;
}
</style>
</head>
<body>
<link rel="style sheet" type="text/css" href="style2.css">
</br></br></br></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="LOGO1.png" style="margin-left:0px"><font style="color:#555555;font-family:Agency FB;margin-right:10px">
<ul>
 <h2><li><a href="logout.php">Logout</a></li></h2>
  <h2><li><a href="changepassword.php">Change Password</a></li></h2>
   <h2><li><a href="feedback.php">Feedback</a></li></h2>
   <h2><li><a href="deliveryshow.php">Delivery details</a></li></h2>
   <h2><li><a href="payment.php">Payment</a></li></h2>
   <h2><li><a href="userproduct.php">Products</a></li></h2>
   <h2><li><a href="offersview.php">Offers</a></li></h2>
   <h2><li><a href="myprofile.php">Profile</a></li></h2>
   <h2><li><a href="index.php">Home</a></li></h2>

</ul>
<div class=div1>
        <?php
        $a=$_SESSION['userid'];
        //echo $a;
        //echo $_SESSION['userid'];
        $results=mysqli_query($con,"select * from tbl_registration where login_id=$a");
        while($row=mysqli_fetch_array($results))
        {
          ?>
          <table align="center"  border="1" height="100px">
            <tr><font color="black"<html>
              <tr><td ><font color="black">&nbsp;Photo</font></td>
                <td><img src="<?php echo $row['image']; ?>" width="75px" height="75px" /></td></tr>
                <tr><td><font color="black">&nbsp;Firstname</font></td>
                  <td><input name="first_name" type="text" value="<?php echo $row['first_name']; ?>"/></td></tr>
                  <tr><td><font color="black">&nbsp;Lastname</font></td>
                    <td><input name="last_name" type="text" value="<?php echo $row['last_name']; ?>"/></td></tr>
                    <td><font color="black">&nbsp;Gender</font></td>
                    <td><input name="gender" type="text" value="<?php echo $row['gender']; ?>"/></td></tr>
                    <tr><td><font color="black">&nbsp;Mobile Number</font></td>
                      <td><input name="mobile" type="tel" value="<?php echo $row['mobile']; ?>"/></td></tr>
                      <tr><td>Available points</td>
                        <td>
                          <?php
                          $results1=mysqli_query($con,"select * from tbl_points where userid=$a");
                          while($row1=mysqli_fetch_array($results1))
                          {
                            echo $row1['points'];
                          }

                          ?>

                        </td>
                      </tr>
                    <?php } ?>
                  </table>
                  </div>
                
               
<?php

include 'logcheck.php';
if(isset($_POST['submit']))
{
$userid=$_POST["userid"];
$feedback=$_POST["feedback"];
$sql="INSERT INTO `tbl_feedback`(`userid`,`feedback`) VALUES ('$userid','$feedback')";
//echo $sql;
$result=mysqli_query($con,$sql);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
img.i
{
float:right;
 top: 150px;
    right: 70px;
}
html{
background:url('jky.png') no-repeat center fixed;
background-size:cover;
}
</style>
<link rel="stylesheet" href="saps1.css" type="text/css">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>product details</title>
</head>

<body>
<form  name="skills" method="post" action=" " enctype="multipart/form-data">    
 <div align="center">
   <table align="center" width="200" border="1">
  
     <tr>
       <td colspan="2" align="center"><h1><u><font color="black">Feedback</font></u></h1></td>

         </h4></td> 
  <tr>  
     <tr>
       <td><font color="black">User Id</font></td>
       <td><input type="email" name="userid" /></td>
      </tr>
      
    
       <tr>
         <td><font color="black">Feedback</font></td>
         <td><input type="text" name="feedback" required /></td>
      </tr>  
    
        <td><input type="submit" name="submit" id="button" value="ADD" /></td>
        <td>&nbsp;</td>
        </tr>
   </table>
 </div>
 <p>&nbsp;</p>
</form>
</body>
</html> 