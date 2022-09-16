<?php
$page=isset($_REQUEST["page"])?$_REQUEST["page"]:"A";
if($page=="upro")
{
 	include("updateprofile.php");
}
else if($page=="upass")
{
 	include("updatepassword.php");
}
else if($page=="upos")
{
 	include("position.php");
}
else if($page=="pa")
{
	include("view.php");
}
else if($page=="de")
{
	include("design.php");
}
else if($page=="select")
{
include("design.php");
}
else if($page=="lp")
{
include("linkpagedesg.php");
}


//header("location:content.php");

?>