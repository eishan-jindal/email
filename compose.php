<?php
session_start();
mysql_connect("localhost","root");
mysql_select_db("db11");
$uid=$_SESSION[uid];
if($uid==null)
{
	header("location:index.php");
}
?>
<center>
<table width=90%>
	<tr><td align=left>Welcome <?php echo $uid ?></td><td align=right><a href=logout.php>Logout</a></td></tr>
	<tr><td colspan=2><hr size=5></td></tr>
	<tr>
	<td>
	<a href=compose.php>Compose</a><br><br>
	<a href=inbox.php>inbox</a><br><br>
	<a href=sent.php>sent</a><br><br>

	</td>
	<td>
<form name=frm1 action=compose1.php>
	<table width=80%>
		<tr><td>To</td><td><input type=text name=t1></td></tr>
		<tr><td>Subject</td><td><input type=text name=t2></td></tr>
		<tr><td>Message</td><td><textarea rows=10 cols=50 name=t3></textarea></td></tr>

		<tr><td><input type=submit></td><td></td></tr>
	</table>
</form>
	</td>
	</tr>
</table>
</center>