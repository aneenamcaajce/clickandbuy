<?php
//include_once 'amsdb.php';
//?>
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
<li><a class="active" href="feedback.php">FEEDBACK</a></li>
<li><a class="active" href="delivery.php">DELIVERY DETAILS</a></li>
<li><a class="active" href="payment.php">PAYMENT</a></li>
<li><a class="active" href="winners.php">WINNERS</a></li>
<li><a class="active" href="product.php">PRODUCTS</a></li>
<li><a class="active" href="offers.php">OFFERS</a></li>
<li><a class="active" href="points.php">POINTS</a></li>
<li><a class="active" href="moderator.php">MODERATORS</a></li>
<li><a class="active" href="usershow.php">USERS</a></li>
 <li><a class="active" href="#home">OFFERS</a></li>
 <li><a class="active" href="index.php">HOME</a></li>
</ul>
</ul>s

<div class= "img">
<img src="jkl.jpg" alt="class" width="900px;" height="400px">
</div>
<div class="login">
<h1 align="center"><b>WINNERS</b></h1><br>
<marquee>congrats</marquee>
<div class="login_image_container">
                <center>
                    <img src="pm.jpg" alt="loginpic" class="login_pic" id="login_pic">
                    <img src="kl.jpg" alt="loginpic" class="login_pic" id="login_pic">
                </center>
</div>
<form action="logcon.php" method="post">
<table align="center" cellpadding="4px">
</table></br>
</form>

</div>
<div class="imagegalllery">
	<table  align="center" cellpadding="10px">
		<tr>
			<td width="17%">
				<img src="img2.jpg" alt="icon6" width="150px" height="150px"/>
			</td>
			<td width="17%">
				<img src="img3.jpg" alt="icon7" width="150px" height="150px"/> 
			</td>
			<td width="17%">
				<img src="img4.jpg" alt="icon8" width="150px" height="150px"/>
			</td>
			<td width="17%">
				<img src="img5.jpg" alt="icon6" width="150px" height="150px"/>
			</td>
			<td width="17%">
				<img src="img6.jpg" alt="icon7" width="150px" height="150px"/> 
			</td>
			<td width="17%">
				<img src="img7.jpg" alt="icon8" width="150px" height="150px"/>
			</td>
			<td width="17%">
				<img src="img8.jpg" alt="icon8" width="150px" height="150px"/>
			</td>
		</tr>
	</table>
</div>

<footer><div class="footer">
            <table  align="center" cellpadding="10px">
                <tr>
                    <td width="33%">
                        <img src="img2.jpg" alt="icon6" width="80px" height="80px"/>
                    </td>
                    <td width="33%">
                        <img src="img4.jpg" alt="icon7" width="80px" height="80px"/> 
                    </td>
                    <td width="33%">
                        <img src="img6.jpg" alt="icon8" width="80px" height="80px"/>
                    </td>
                </tr>
            </table>
            <i style="position:relative;top:20px;left:320px;">@2016 Amal Jyothi College of Engineering.All rights Reserved. Powered by Department of MCA 
| <a href="#main">Top</a></i>
        </div></footer> 
</body>
</html>