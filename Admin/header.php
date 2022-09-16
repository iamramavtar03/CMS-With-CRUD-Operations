<?php
?>
<table  width="800px">
<form name="form1" method="POST" action="code.php">
<tr>
<td>Welcome</td>
<td><?=$_SESSION["user"]["UDispName"]?></td>
<td align="right" colspan="2"><input type="Submit" value="Logout" name="btnlogout"/></td>
</tr>
<tr>
<td>Email:-</td>
<td><?=$_SESSION["user"]["UEmail"]?></td>
<td>Last Login Date:-</td>
<td><?=$_SESSION["user"]["ULLDATE"]?></td>
</tr>
</table>
</form>
