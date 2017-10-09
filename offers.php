
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$id=$_POST["item"];
$duration=$_POST["duration"];

$sql="INSERT INTO `tbl_offers`(`id`,`duration`) VALUES ($id,$duration)";
//echo $sql;
$result=mysqli_query($con,$sql);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
	background-image:url(gh.jpg);
	background-size:cover;
}

body {margin:0;}
a
{
	font-size:20px;
	color:white;
  text-decoration: none;
	font-family:Cambria;
}
a:hover
{
	color:red;
}
.header
{
	font-size:48px;
	font-family:Vladimir Script;
	height:50px;
	margin-top:0px;
	margin-bottom:20px;
	background-color:black;
	color:red;
  text-shadow: 1px 1px 2px black, 0 0 100px blue, 0 0 5px darkblue;
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
span
{
	color:white;
	text-decoration:none;
	font-family:Copperplate Gothic;
	font-size:20px;
	padding: 6spx 12px;
}
.button
 {
  	background-color: #ffaa00;
    border: none;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    margin: 1px 1px;
    cursor: pointer;
	border-radius:3px;
    text-align:center;
    margin-bottom:2px;
	overflow:hidden;
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
    text-indent: 5px;
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
img.i
{
float:right;
 top: 150px;
    right: 70px;
}

</style>
<link rel="stylesheet" href="saps1.css" type="text/css">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>offers details</title>
</head>

<body>
<link rel="style sheet" type="text/css" href="style2.css">

<div class="header">
	<img src="logop.png" style="margin-left:0px">
	Admin Home   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="admin.php">Home</a>&nbsp&nbsp
  <div class="dropdown">
  <span><a href="#">Add</a> </span>
  <div class="dropdown-content">
	<a href="offers.php">offers</a>
		<a href="product.php">products</a>
        <a href="moderator.php">moderators</a>
			<a href="delivery.php">delivery</a>
            <a href="points.php">points</a>
            <a href="winners.php">winners</a>
               
	</div>
  </div>&nbsp&nbsp
  <div class="dropdown">
  <span><a href="#">View</a> </span>
  <div class="dropdown-content">
	<a href="usershow.php">Users</a>
		<a href="offersshow.php">offers</a>
			<a href="productview.php">products</a>
			   <a href="moderatorshow.php">moderators</a>
               <a href="deliveryshow.php">delivery</a>
               <a href="pointsshow.php">points</a>
               <a href="paymentshow.php">payments</a>
               <a href="winnershow.php">winners</a>
               <a href="feedbackview.php">feedback</a>
	</div>
  </div>
  <span>&nbsp&nbsp <a href="logout.php">logout</a> </span>
</div>

<form  name="skills" method="post" action=" " enctype="multipart/form-data">    
 <div align="center">
   <table align="center" width="200" border="1">
  
     <tr>
       <td colspan="2" align="center"><font color="black">offers details</font></td>

         </h4></td> 
  <tr>  
  <tr>
                <td>Product Id:</td>
                <td><select name="item" >
                  
                <?php
			$results=mysqli_query($con,"select * from tbl_product");
			while($row=mysqli_fetch_array($results))
            {

			?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>

                <?php }
                ?></select></td></tr>
     <tr>
       <td><font color="black">Duration</font></td>
       <td><input type="text" name="duration" /></td>
      </tr>
      
        <tr><td><input type="submit" name="submit" id="button" value="ADD" /></td></tr>
   </table>
 </div>
 <p>&nbsp;</p>
</form>

</body>
</html> 