<?php
session_start();
mysql_connect("localhost","root");
mysql_select_db("db11");
$uid=$_SESSION[uid];
if($uid==null)
{
	header("location:index.php");
}
$a1=$_GET[t1];
$a2=$_GET[t2];
$a3=$_GET[t3];
mysql_query("insert into emsg(rid,sid,sub,msg) values('$a1','$uid','$a2','$a3')");
header("location:inbox.php?x=1");
?>