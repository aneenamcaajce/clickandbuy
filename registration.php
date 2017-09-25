<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$district=$_POST["district"];
echo "$district";
$sql=mysqli_query($con,"select * from tbl_district where districts='$district'");
while($row=mysqli_fetch_array($sql)){
	$district=$row['districtid'];
}
$place=$_POST["place"];
$pincode=$_POST["pincode"];
$mobile=$_POST["mobile"];
$userid=$_POST["userid"];
$password=$_POST["password"];
$image="image/".time()."".htmlspecialchars($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image);
$sql="INSERT INTO `tbl_registration`( `first_name`, `last_name`, `gender`, `address`,`district`,`place`, `pincode`,`mobile`,`image`) VALUES ('$first_name','$last_name','$gender','$address','$district','$place','$pincode','$mobile','$image')";
print_r($sql);
$result=mysqli_query($con,$sql);
$sql1="INSERT INTO `tbl_login`(`userid`, `password`, `usertype`,`status`) VALUES ('$userid','$password','user',0)";
print_r($sql1);
$result1=mysqli_query($con,$sql1);

//echo "successfully inserted";
}
?>
<html>
    <head>
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
<h1 id="heading" align="left">&nbsp&nbsp&nbsp&nbsp<img src="photo1.jpg" border="0" id="LogoImage" alt="Herb Affair" width="130" height="70">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>CLICK AND BUY</i></h1>
</div>

<ul style="margin-top:2px;">
<li><a class="active" href="registration.php">REGISTER</a></li>
<li><a class="active" href="login1.php">LOGIN</a></li>
 <li><a class="active" href="#home">OFFERS</a></li>
 <li><a class="active" href="index.php">HOME</a></li>
</ul>


<div class="imagegalllery1">
	<table  align="center" cellpadding="10px">
		<tr>
			<td width="17%">&nbsp;</td>
      </tr>
            </table>
            </div>
            </div>
<style>
div.sis3 {
  background: transparent ;
    position: absolute;
    top: 200px;
    right: 0;
    left:500px;
    width: 50%;
    height: 400px;
}</style>
        <title>registration
        </title>
    </head>

    <body>



</div>

               
           


</br>
<br>
<br>
<br>
<br>

<br>
<br>

<div class="sis3">
<form action="#" name="myForm" id="myForm" onsubmit="return" method="post" enctype="multipart/form-data">
<fieldset>
<legend>REGISTRATION FORM</legend>
<table border="0" align="left">
<tr>
                <td>IMAGE:</td>
                <td><input type="file" name="image" id="image"/>
                </td>
                </tr>
<tr><td>FIRST NAME:</td><td><input type="text" name="first_name"  id="first_name"></td></tr>

<tr><td>LAST NAME:</TD><TD><input type="text" name="last_name" id="last_name"></td></tr>
<tr><td></TD><td><FIELDSET><LEGEND>GENDER</LEGEND><input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  </FIELDSET></td></tr>
  <tr><td>ADDRESS:</td><td><textarea name="address" rows="3" cols="16" /></textarea></td></tr>
  <tr><td>STATE:</td>
  <td><select name="state" id="state">
                  <option value="">--select--</option>
                <?php
                $results= mysqli_query($con,"select state_id,state from tbl_state");
                $i=1;
                while($row=mysqli_fetch_array($results))
                { ?>
                  <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state']; ?></option>

                <?php }
                ?></select></td></tr>
                <tr><td>DISTRICT</td>
                <td><select name="district" id="district"></select></td></tr>
                
  <tr><td>PLACE:</td><td><input type="text" name="place"></td></tr>
  <tr><td>PINCODE:</td><td><input type="number" name="pincode"  size="30" min="1" id="pincode"></td></tr>
<tr><td>CONTACT NUMBER</TD><TD><input type="tel" name="mobile" min="1" max="10" id="mobile"></td></tr>


<tr><td>USER ID:</TD><TD><INPUT TYPE="text" NAME="userid" id="userid"></td></tr>
<tr><td>PASSWORD</td>
  <td><input type="password" name="password" id="password"/> </td></tr>
<tr>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp </td>
<td><input type="submit" name="submit" value="Register"></td>
</tr>
</table></form>
</fieldset>
<script src="jquery-3.2.1.min.js"></script>
<script src="js/validation.js"></script>
<script>
	$(document).ready(function(){
		$("#state").on("change",function(){
			var state=$(this).val();
			alert(state);
			$.ajax( {
				type:"POST",
				url:"select_district.php",
				data:{ 'data':state},
				success: function(response){
					//alert(json);
					$ar = response.split(",");
                            $str = "";
                            for (var i = 0; i < $ar.length; i++)
                     		 {
                      			$str += '<option>' + $ar[i] + "</option>";
                      		 }
                      		$('#district').html($str);
				}
			});
		});
	});
</script>

</div>
    </body>
</html>
