<?php
include_once("../connection.php");
echo "<pre>";

if(isset($_REQUEST["btnupro"]))
	{
	//$id=$_REQUEST["id"]
	$oldname=$_REQUEST["oldname"];
	$uname=$_REQUEST["upuname"];
	$email=$_REQUEST["upemail"];
	$phone=$_REQUEST["upphone"];
	$str="update tbuser set UName='$uname',UEmail='$email',UPhone='$phone' where UName='$oldname'";
	mysqli_query($conn,$str);
	}
header("location:home.php");
?>