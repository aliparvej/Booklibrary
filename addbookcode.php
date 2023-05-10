<?php
include("connect.php");

$n=$_POST['name'];
//echo $n;
$bcode=$_POST['bcode'];
//echo $fn;
$au=$_POST['a'];
//echo $g;
$p=$_POST['p'];
//echo $m;
$rackno=$_POST['rno'];
//echo $age;
$bookno=$_POST['bno'];
//echo $a;
$scode=$_POST['pin'];
//echo $a;
$file=$_FILES['file']['name'];
//echo $file;
$u=$_FILES['file']['tmp_name'];
//echo $u;
$location="addbook/";
echo $query="insert into book_stock(bookname,bookcode,author,price,rackno,bookno,subcode,pic,date) values ('$n','$bcode','$au','$p','$rackno','$bookno','$scode','$file',now())";
mysql_query($query);
move_uploaded_file($u,$location.$file);
header("Location:addbook.php");
?>