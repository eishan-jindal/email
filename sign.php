<?php
mysql_connect("localhost","root");
mysql_select_db("db11");
$a1=$_GET[t1];
$a2=$_GET[t2];
$a3=$_GET[t3];
$a4=$_GET[t4];
$a5=$_GET[t5];
$a6=$_GET[t6];
$a7=$_GET[t7];
$res=mysql_query("select * from elogin where uid='$a3'");
$cnt=mysql_num_rows($res);
if($cnt==0)
{
	mysql_query("insert into elogin values('$a3','$a4')");
	mysql_query("insert into eusers values('$a3','$a1','$a2','$a5','$a6','$a7')");
	header("location:index.php?x=2");
}
else
{
	header("location:index.php?x=1");
}

?>