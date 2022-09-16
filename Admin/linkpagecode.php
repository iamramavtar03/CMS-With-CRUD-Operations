<?php
include_once("../connection.php");
if(isset($_REQUEST["btnadd"]))
{
	$name=$_REQUEST["txtname"];
	$poscode=$_REQUEST["cmbpos"];
	$pcode=$_REQUEST["cmbpage"];
	$str="select max(lporder)+1 from tblinkpages";
	$rs=mysqli_query($conn,$str);
	$row=mysqli_fetch_row($rs);
	$order=$row[0]>0?$row[0]:1;
	$str="insert into tblinkpages(poscode,pcode,lpname,lporder) values('$poscode','$pcode','$name','$order')";
	mysqli_query($conn,$str);
}
else if($_REQUEST["mode"]=="updstatus")
{
	$chk=$_REQUEST["chk"];
	$id=$_REQUEST["id"];
	$str="update tblinkpages set lpisactive=$chk where lpcode=$id";
	mysqli_query($conn,$str);
}
else if($_REQUEST["mode"]=="updorder")
{
	foreach($_REQUEST["txtorder"] as $id=>$order)
	{
	$str="update tblinkpages set lporder=$order where lpcode=$id";
	mysqli_query($conn,$str);
	}
}
else if($_REQUEST["mode"]=="delete")
{
	$id=$_REQUEST["id"];
	$poscode=$_REQUEST["pos"];
	$str="delete from tblinkpages where lpcode=$id";
	mysqli_query($conn,$str);
}

header("location:home.php?page=lp&pos=$poscode");
?>