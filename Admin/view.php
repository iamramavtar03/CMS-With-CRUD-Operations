<?php
//echo "<pre>";
//print_r($_REQUEST);
include_once("../connection.php");
?>
<form name="form1" method="post" action="codefck.php">
<input type="hidden" name="id" value="<?=$srno?>"/>
<table width="500px"  border="1px" >
<tr>
<td align="right"><input type="Submit" value="New" name="btnnew"/></td>
</tr>

<tr>
<td>

</tr>

<tr>
<th>Sr.No.</th>
<th>Pages</th>
<th>PActive</th>
<th>Porder</th>
<th>PCDate</th>
<th>MDate</th>
<th colspan="2">Action</th>
</tr>

<?php
$str="select * from tbpages";
$rs=mysqli_query($conn,$str);
//$srno=1;
while(list( $srno,$n,$t,$pc,$pm)=mysqli_fetch_row($rs))
{
echo"<tr>";
echo"<td>$srno</td>";
echo"<td>$n</td>";
echo"<td></td>";
echo"<td></td>";
echo"<td>$pc</td>";
echo"<td>$pm</td>";
echo"<td><a href='home.php?page=select&id=$srno'>Select</a></td>";
echo"<td><a href='code.php?mode=delete&id=$srno'>Delete</a></td>";
echo"<tr>";

}
$srno++;
?>
</table>
</form>
