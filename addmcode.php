<?php
include("connect.php");

$n=$_POST['name'];
//echo $n;
$cl=$_POST['class'];
//echo $fn;
$g=$_POST['a'];
//echo $g;
$m=$_POST['mob'];
//echo $m;
$age=$_POST['age'];
//echo $age;
$a=$_POST['add'];
//echo $a;
$pin=$_POST['pin'];
$location="saddm/";
echo $query="insert into students(st_name,class,gender,mobile,age,address,pin,date) values ('$n','$cl','$g','$m','$age','$a','$pin',now())";
mysql_query($query);
header("Location:addm.php");
?>