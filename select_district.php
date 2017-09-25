<?php
include_once "connection.php";
if(isset($_POST['data']))
{
	$str="";
	$state=$_POST['data'];
	$data=mysqli_query($con,"select * from tbl_district where state_id=". $state);
    while ($row = mysqli_fetch_array($data)) {
        $str .= $row['districts'] . ",";
    }
    echo rtrim($str, ',');
}
?>