<?php
include_once("../connection.php");
$str="select * from tbuser";
	$rs=mysqli_query($conn,$str);
?>
<form name="form1" method="POST" action="updateprofcode.php">
<table align="center">
<tr>
<td>Old User name
<td><input name="oldname" /></td>
</tr>
<tr>
<td> User Name</td>
<td><input name="upuname" /></td>
</tr>
<tr>
<td>Email</td>
<td><input name="upemail"/></td>
</tr>
<tr>
<td>Phone</td>
<td><input name="upphone"/></td>
</tr>
<tr>
<td><input type="Submit" value="Update" name="btnupro"/></td>
</tr>

</table>
</form>