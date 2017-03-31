<?php
session_start();
session_register("uid");
mysql_connect("localhost","root");
mysql_select_db("db11");
$a1=@$_GET[t1];
$a2=@$_GET[t2];
//echo"$a1 $a2 <br>";
$res=mysql_query("select * from elogin where uid='$a1' and pwd='$a2'");

$cnt=mysql_num_rows($res);
if($cnt==1)
{
$_SESSION[uid]=$a1;
header("location:inbox.php");
}
else
{
	header("location:index.php?x=3");
}
?>