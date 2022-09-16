<?php
include_once("../Connection.php");
?>
<script language="javascript">
function SubmitForm(mode,id,chk)
{
	//alert("positioncode.php?mode="+mode+"&chkk=kk"+ "&id="+id+"&chk="+chk);
	document.form2.action="positioncode.php?mode="+mode+ "&id="+id+"&chk="+chk;
	document.form2.submit();
}
</script>
<form name="form2" method="post" action="positioncode.php">
<!-- <input type="hidden" name="id" value=<?=@$_REQUEST["id"]?> /> -->
<table  align="center" >
<tr>
<td>Position</td>
<td><input name="txtname"/></td>
</tr>
<tr>
<td><input name="btnadd" type="submit" value="Add"/></td>
<tr>
</table>
<table align="center" border="2px">
<tr>
<td>S.no</td>
<td>Position</td>
<td>Is active</td>
<td><a href="javascript:SubmitForm('updorder')">Order</a></td>
<td colspan="2">Action</td>
</tr>
<?php
$str="select * from tbposition";
$rs=mysqli_query($conn,$str);
$srno=1;
while(list($code,$n,$p,$order)=mysqli_fetch_row($rs))
{
?>
<tr>
<td><?=$srno++?></td>
<?php
if(isset($_REQUEST["id"]) && $_REQUEST["id"]==$code)
{
?>
<td><input name="txtuname" value="<?=$n?>" /></td>
<td><input type="checkbox" <?php if($p==1) echo " checked " ?>  disabled /></td>
<td><input size="2" value="<?=$order?>" disabled /></td>
<td><a href="javascript:SubmitForm('update',<?=$code?>)">Update</a></td>
<td><a href="home.php?page=upos">Cancel</a></td>
<?php
}
else
{
?>
<td><?=$n?></td>
<td><input type="checkbox" <?php if($p==1) echo " checked" ?> onchange="SubmitForm('updstatus',<?=$code?>, this.checked)" /></td>
<td><input size="2" name="txtorder[<?=$code?>]" value="<?=$order?>" /></td>
<td><a href="home.php?page=upos&id=<?=$code?>">Edit</a></td>
<td><a href="positioncode.php?mode=delete&id=<?=$code?>">Delete</a></td>
<?php
}
?>

</tr>
<?php
}
?>
</table>
</form>