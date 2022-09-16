<?php
session_start();
include_once("../connection.php");
if(isset($_REQUEST["btnlogin"]))
  {
	$u=$_REQUEST["txtUname"];
	$p=$_REQUEST["txtpass"];
	$str="select * from tbuser where uname='$u' and upass='$p'";
	//echo $str;
	$rs=mysqli_query($conn,$str);
	if(mysqli_num_rows($rs)>0)
	{
		$_SESSION["user	"]=mysqli_fetch_assoc($rs);
		$date=date("Y-m-d");
		$str="update tbuser set ulldate='$date' where UID=".$_SESSION["user"]["UID"];
		mysqli_query($conn,$str);
		header("location:home.php");
	}
else
{
	header("location:index.php");
}
	}
	else if(isset($_REQUEST["btnlogout"]))
		{
		  header("location:logout.php");
		}
?>