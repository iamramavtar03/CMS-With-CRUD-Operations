<?php
echo "<pre>";
print_r($_REQUEST);
include_once("../connection.php");
if(isset($_REQUEST["btnadd"]))
{
$name=$_REQUEST["txtname"];
$text=$_REQUEST["fck1"];
$date=date('y-m-d');
$str="insert into tbpages(pname,ptext,pcdate) values('$name','$text','$date')";
mysqli_query($conn,$str);
header("location:home.php?page=pa");
}

else if(isset($_REQUEST["btnupdate"]))
{
	$id=$_REQUEST["id"];
	$name=$_REQUEST["txtname"];
	$fck1=$_REQUEST["fck1"];
	$date=date('y-m-d');
	$str="update tbpages set PName='$name',PText='$fck1',PMDate='$date' where PCode='$id'";
	mysqli_query($conn,$str);
	header("location:home.php?page=pa");

}

else if($_REQUEST["mode"]=="delete")
{
	 $id=$_REQUEST["id"];
	$str="delete from tbpages where PCode=$id";
	mysqli_query($conn,$str);
        header("location:home.php?page=pa");
}

else if(isset($_REQUEST["btnnew"]))
{	
	 header("location:home.php?page=de");
}

else if(isset($_REQUEST["btncancel"]))
{	
	 header("location:view.php");
}


?>
