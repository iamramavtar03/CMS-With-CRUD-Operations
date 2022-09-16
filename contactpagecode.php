<?php

include_once("connection.php");
if(isset($_REQUEST["btnsubmit"]))
  {
	$fn=$_REQUEST["firstname"];
	$ln=$_REQUEST["lastname"];
    $cm=$_REQUEST["comment"];
    $em=$_REQUEST["txtemail"];
	$str="insert into contactus (firstname,lastname,comment,email) values ('$fn','$ln','$cm','$em')	";
    $rs=mysqli_query($conn,$str);
		}


        header("location:index.php?page_id=3");
?>