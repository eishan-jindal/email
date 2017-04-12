<html>
	<head>
		<title>
		Email system - Edited by E.Jindal
		</title>
	</head>
	<body bgcolor=cyan>
		<center>
			<table width=90% border=0>

			<tr><td align=left><font color=blue size=7>Email system</font></td>
			<td>
			<form name=frm1 action=log.php>
				Id <input type=text name=t1> Password <input type=text name=t2><br>
				<center><input type=submit></center>
			</form>
			<?php
	$a=@$_GET[x];
if($a==3)
{
				echo"<font color=red ><center>*User Id/Password invalid</center></font>";
}
?>
			</td>
			</tr>
			<tr><td colspan=2><hr size=5></td></tr>
			<tr>
				<td><img src=a1.jpg height=400 width=400></td>
				<td align=center>
					<form name=frm2 action=sign.php>

						<table bgcolor=#eeeeee>
<tr><td colspan=2><font color=blue size=5><center>Sign up here</center></font></td></tr>
							<tr><td>Enter First Name</td><td><input type=text name=t1></td></tr>
							<tr><td>Enter Last Name</td><td><input type=text name=t2></td></tr>
							<tr><td>Enter User Id</td><td><input type=text name=t3></td></tr>
							<tr><td>Enter Password</td><td><input type=password name=t4></td></tr>
							<tr><td>Enter Gender</td><td>Male <input type=radio name=t5 value=Male><br>Female <input type=radio name=t5 value=Female></td></tr>							<tr><td></td><td></td></tr>
							<tr><td>Enter Mobile</td><td><input type=text name=t6 maxlength=10></td></tr>
							<tr><td>Enter Pin</td><td><input type=text name=t7 maxlength=6></td></tr>
							<tr><td><input type=submit></td><td><input type=reset></td></tr>
<?php
$a=@$_GET[x];
if($a==1)
{
	echo"<tr bgcolor=yellow><td colspan=2><font color=red size=5><center>User Already exists</center></font></td></tr>";
}
if($a==2)
{
	echo"<tr bgcolor=pink><td colspan=2><font color=blue size=3><center>User created.Please Login</center></font></td></tr>";
}
?>
						</table>
					</form>

				</td>
			</tr>
			</table>
		</center>
	</body>
</html>
