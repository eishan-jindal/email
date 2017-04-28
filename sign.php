<?php

$host = "localhost";
$user = "root";
$password = "eismeh.8";
$database = "db11";

$link = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_error()) {
    die("Connection to the database failed");
}

$a1 = $_GET[t1];
$a2 = $_GET[t2];
$a3 = $_GET[t3];
$a4 = $_GET[t4];
$a5 = $_GET[t5];
$a6 = $_GET[t6];
$a7 = $_GET[t7];
$res = mysqli_query("select * from elogin where uid='$a3'");
$cnt = mysqli_num_rows($res);
if ($cnt == 0) {
    mysqli_query("INSERT INTO `eusers`(`uid`, `fnam`, `lnam`, `gender`, `mob`, `pin`) VALUES ('$a3','$a1','$a2','$a5','$a6','$a7')");
    mysqli_query("INSERT INTO `elogin`(`uid`, `pwd`) VALUES ('$a3','$a4')");
    header("location:index.php?x=2");
} else {
    header("location:index.php?x=1");
}
?>