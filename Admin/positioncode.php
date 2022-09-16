<?php
include_once("../connection.php");
echo "<pre>";
print_r($_REQUEST);
if(isset($_REQUEST["btnadd"]))
{
	$name=$_REQUEST["txtname"];
	$str="select max(porder)+1 from tbposition";
	$rs=mysqli_query($conn,$str);
	$row=mysqli_fetch_row($rs);
	$order=$row[0]>0?$row[0]:1;
	$str="insert into tbposition(pname,porder) values('$name','$order')";
	mysqli_query($conn,$str);	
}
else if($_REQUEST["mode"]=="delete")
{
	$id=$_REQUEST["id"];
	$str="delete from tbposition where pcode=$id";
	mysqli_query($conn,$str);	
}
else if($_REQUEST["mode"]=="update")
{
	$id=$_REQUEST["id"];
	$name=$_REQUEST["txtuname"];
	
	$str="update  tbposition set pname='$name' where pcode=$id";
	mysqli_query($conn,$str);	
}
else if($_REQUEST["mode"]=="updstatus")
{
	$id=$_REQUEST["id"];
	$chk=$_REQUEST["chk"];
	
	$str="update  tbposition set pisactive=$chk where pcode=$id";
	mysqli_query($conn,$str);	
}
else if($_REQUEST["mode"]=="updorder")
{
	foreach($_REQUEST["txtorder"] as $id=>$order)
	{
	$str="update  tbposition set porder=$order where pcode=$id";
	mysqli_query($conn,$str);	
	}
}
header("location:home.php?page=upos");
?>