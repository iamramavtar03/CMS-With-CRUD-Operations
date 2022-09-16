<?php
include_once("connection.php");
function Include_Menu_Links($pos)
{
	global $conn;
	echo "<ul>";
	$str="select pcode,lpname from tblinkpages where poscode=$pos and lpisactive=1 order by lporder";
	$rs=mysqli_query($conn,$str);
	while(list($id,$name)=mysqli_fetch_row($rs))
	{
        echo "<li><a href='index.php?page_id=$id'>$name</a> </li>";
    }
	echo "</ul>";
}
function Show_Content($page_id)
{
		global $conn;
		$str="select ptext from tbpages where pcode=$page_id";
		$rs=mysqli_query($conn,$str);
		$row=mysqli_fetch_row($rs);
		
		echo $row[0];
}

?>