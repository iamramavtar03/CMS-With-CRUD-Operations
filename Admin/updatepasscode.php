<?php
include_once("../connection.php");
echo "<pre>";

if(isset($_REQUEST["btnupass"]))
	{
	$old=$_REQUEST["Oldpass"];
	$npass=$_REQUEST["Npass"];
	$str="update tbuser set UPass='$npass' where UPass='$old'";
	mysqli_query($conn,$str);
	}
header("location:home.php");
?>