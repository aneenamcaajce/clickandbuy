<?php
$id=$_REQUEST['id'];
include 'connection.php';
$sql="delete from tbl_registration where id=$id";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:usershow.php")
?>