<?php
include_once("../connection.php");
?>
<script>
function UpdateStatus(id,chk)
{
	var url="linkpagecode.php?mode=updstatus&id="+id+"&chk="+chk;
	window.location.href=url;
}
function SubmitForm()
{
	document.form2.action="linkpagecode.php?mode=updorder";
	document.form2.submit();
}
function UpdatePage(value)
{
	//alert(value);
	window.location.href="home.php?page=lp&pos="+value;
}
</script>
<form name="form2" action="linkpagecode.php" method="post">
<table align="center" width="90%" border="0">
<tr>
<td>Select Position</td>
<td>
<?php
echo "<select name='cmbpos' onchange='UpdatePage(this.value)'>";
$str="select pcode,pname from tbposition where pisactive=1";
$rs=mysqli_query($conn,$str);
$pos=-1;
while(list($id,$name)=mysqli_fetch_row($rs))
{
		if($pos==-1)$pos=$id;
		if(isset($_REQUEST["pos"]) && $_REQUEST["pos"]==$id)
		{
		$pos=$id;
		echo "<option value='$id'  selected>$name</option>";
		}
		else
		{
		echo "<option value='$id'>$name</option>";
		}
}
echo "<select name='cmbpos'>";
echo "Postion" .$pos;
?>
</td>
<td>Page Name</td>
<td><input name="txtname" /></td>
</tr>
<tr>
<td>Select Page</td>
<td>
<?php
echo "<select name='cmbpage'>";
$str="select pcode,pname from tbpages where pcode not in(select pcode from tblinkpages where poscode=$pos)";
$rs=mysqli_query($conn,$str);
while(list($id,$name)=mysqli_fetch_row($rs))
{
	echo "<option value='$id'>$name</option>";
}
echo "<select name='cmbpos'>";
?>
</td>
</tr>
<tr>
<td><input type="submit" value="Add" name="btnadd" /></td>
</tr>
<tr>
<td colspan="4">
<table width="100%" border="1">
<tr>
<th>Sr.No</th>
<th>Position</th>
<th>Page</th>
<th>Title</th>
<th>IsActive</th>
<th><a href="javascript:SubmitForm()">Order</a></th>
<th>Action</th>
</tr>
<?php
$str="select pos.pname as PosName,p.PName,lp.*   from tbposition pos, tbpages p, tblinkpages lp where lp.poscode=pos.pcode and lp.pcode=p.pcode and lp.poscode=$pos";
$rs=mysqli_query($conn,$str);
$srno=1;
while($row=mysqli_fetch_assoc($rs))
{
$checked="";
if($row['LPIsActive']==1)
$checked=" checked";
echo "<tr>";
echo "<td>$srno</td>";
echo "<td>".$row['PosName']."</td>";
echo "<td>".$row['PName']."</td>";
echo "<td>".$row['LPName']."</td>";
echo "<td><input type='checkbox' onclick='UpdateStatus(". $row['LPCode'] .",this.checked)' name='chk' ". $checked." /></td>";
echo "<td align='center'><input size='4' name='txtorder[". $row['LPCode'] ."]'  value='".$row['LPOrder']."' /></td>";
echo "<td><a href='linkpagecode.php?mode=delete&pos=$pos&id=". $row['LPCode'] ."'>Delete</a></td>";
echo "</tr>";
$srno++;
}
?>
</table>
</td>
</tr>
</table>
</form>