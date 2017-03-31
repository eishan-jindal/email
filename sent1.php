<?php
session_start();
mysql_connect("localhost","root");
mysql_select_db("db11");
$uid=$_SESSION[uid];
if($uid==null)
{
	header("location:index.php");
}
$a=$_GET[x];
if($a==1)
{
	echo"<center><span style='background-color:yellow'>Mail sent succesfully</span></center>";
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
<?php
echo"<a href=sent.php>Go to Sent</a><br>";
$sn=$_GET[sn];
$res=mysql_query("select * from emsg where sn='$sn'");

	$a1=mysql_result($res,0,"rid");
	$a2=mysql_result($res,0,"sub");
	$a3=mysql_result($res,0,"msg");
	echo"<table>";
		echo"<tr><th>to:</th><td>$a1</td></tr>";
		echo"<tr><th>Subject</th><td>$a2</td></tr>";
		echo"<tr><th>Message</th><td><pre>$a3</pre></td></tr>";
	echo"</table>";



?>
	</td>
	</tr>
</table>
</center>