<?php
include_once("../connection.php");
$str="select * from tbuser ";
	$rs=mysqli_query($conn,$str);
?>
<form name="form1" method="POST" action="updatepasscode.php">
<table align="center">
<tr>
<td>Old Password</td>
<td><input name="Oldpass"/></td>
</tr>
<tr>
<td>New Password</td>
<td><input name="Npass"/></td>
</tr>
<tr>
<td>Re-New Password</td>
<td><input name="Npass"/></td>
</tr>
<tr>
<td><input type="Submit" value="Update" name="btnupass"/></td>
</tr>

</table>
</form>
