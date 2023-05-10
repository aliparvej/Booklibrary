<?php
session_start();
$mail=$_POST['a']; //echo $mail;
$password=$_POST['b']; //echo $password;
include("connect.php");
$query="select * from admin where email='$mail' and pass='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$mail;
	header("Location:myadmin.php");
}
else
{
	header("Location:mylogin.php?msg=1");
}
?>