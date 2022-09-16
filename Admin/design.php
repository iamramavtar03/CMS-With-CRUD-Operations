<?php
//echo "<pre>";
//print_r($_REQUEST);
include_once("../connection.php");
$n=$t=$pc=$pm="";

if(isset($_REQUEST["id"]))
{
	$str="select * from tbpages where PCode=".$_REQUEST["id"];
	$rs=mysqli_query($conn,$str);
	list( $srno,$n,$t,$pc,$pm)=mysqli_fetch_row($rs);
}
?>

<form name="form1" method="post" action="codefck.php">
<input type="hidden" name="id" value="<?=$srno?>"/>
<table align="center" width="500px">
<tr>
<td >Name</td>
<td><input name="txtname"  value="<?=$n?>" required/></td>
</tr>
<tr>

<td >Text</td>
</tr>
<tr>
<td colspan="4">
<?php
include("fckeditor/fckeditor.php");
$obj=new FCKEditor("fck1");
$obj->BasePath="fckeditor/";
$obj->Height=300;
$obj->Width=600;
$obj->Value=$t;
$obj->Create();
 
?>
</td>
</tr>
<tr>
<td>
<?php
if(isset($_REQUEST["id"])=="select")
{
?>  
<input type="submit" value="update" name="btnupdate" />
<?php
}
else
{
?>
<input type="submit" value="Add" name="btnadd" />
<input type="submit" value="Cancel" name="btncancel" />
<?php
}
?>

</td>
</tr>
</table>
</form>

