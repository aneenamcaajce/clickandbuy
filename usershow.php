<?php 
include_once "connection.php";
	?>

<table align="center" width="200" border="1">
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
    <td><font color="black">&nbsp;State</font></td>
    <td><font color="black">&nbsp;District</font></td>
    <td><font color="black">&nbsp;Place</font></td>
    <td><font color="black">&nbsp;Pincode</font></td>
    <td><font color="black">&nbsp;Mobile Number</font></td>
  </tr>
<?php
$results=mysqli_query($con,"select * from tbl_registration");
while($row=mysqli_fetch_array($results))
{

?>
<td><img src="<?php echo $row['image']; ?>" width="75px" height="75px" /></td>
<td><input name="first_name" type="text" value="<?php echo $row['first_name']; ?>"/></td>
<td><input name="last_name" type="text" value="<?php echo $row['last_name']; ?>"/></td>
<td><input name="gender" type="text" value="<?php echo $row['gender']; ?>"/></td>
<?php
$a=$row['district'];
$state="";
$sql=mysqli_query($con,"select * from tbl_state where state_id=(select state_id from tbl_district where districtid='$a')");
while($row2=mysqli_fetch_array($sql)){
	$state=$row2['state'];
}
$sql=mysqli_query($con,"select * from tbl_district where districtid='$a'");
while($row3=mysqli_fetch_array($sql)){
	$districts=$row3['districts'];
}
?>
<td><input name="state" type="text" value="<?php echo $state; ?>"/></td>
<td><input name="district" type="text" value="<?php echo $districts; ?>"/></td>
<td><input name="place" type="text" value="<?php echo $row['place']; ?>"/></td>
<td><input name="pincode" type="text" value="<?php echo $row['pincode']; ?>"/></td>
<td><input name="mobile" type="tel" value="<?php echo $row['mobile']; ?>"/></td>
<td><a href="useredit.php?id=<?php echo $row['id'];?>" >Edit</a></td>
<td><a href="userdelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
