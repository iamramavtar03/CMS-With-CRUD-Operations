 <html>
<head>
<style type="text/css">
#container
{
	width:800px;
	min-height:700px;
	border:solid 2px red;
	margin:0px auto;	
}
.header
{
	height:70px;
	width:100%;
	border-bottom:solid 2px red;
}
.sidebar
{
	 height:400px;
	width:140px;
	border-right:solid 2px red;
	float:left;
}
.content
{
	min-height:700px;
	width:694px;
	//border:solid 2px red;
	//float:right;
	//margin-left:100px;
	//overflow-y:auto;
}
.footer
{
	height:20px;
	width:100%;
	border-top:solid 2px red;
}
</style>
<head>
<body>
<?php
session_start();
if(!isset($_SESSION["user"]))
	header("location:index.php");
	//echo "<pre>";
	print_r($_SESSION);
	echo "<h3> Login successfully</h3>";

?>
<div id="container">
<div class="header"><?php include("header.php"); ?></div>
<div class="sidebar"><?php include("sidebar.php"); ?></div>
<div class="content"><?php include("content.php"); ?></div>
<div class="footer"></div>
</div>
</body>
</html>