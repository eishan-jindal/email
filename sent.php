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
$res=mysql_query("select * from emsg where sid='$uid' order by sn desc");
$cnt=mysql_num_rows($res);
if($cnt==0)
{
	echo"<font color=red>No msg found</font>";
}
echo"<table>";
echo"<tr><th>To</th><th>Subject</th><th>Message</th></tr>";
for($i=0;$i<$cnt;$i++)
{
	$a1=mysql_result($res,$i,"rid");
	$a2=mysql_result($res,$i,"sub");
	$a3=mysql_result($res,$i,"msg");
	$a4=mysql_result($res,$i,"sn");
	$a3=substr($a3,0,10);
	echo"<tr><td><b>$a1</b></td><td>$a2</td><td><a href=sent1.php?sn=$a4>$a3</a></td></tr>";
}
echo"</table>";

?>
	</td>
	</tr>
</table>
</center>