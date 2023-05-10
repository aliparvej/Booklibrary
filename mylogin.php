<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo
?>
<html>
<head>
<title>Login</title>
<link href="style.css" rel="stylesheet"/>
<style>
.outer
{
	height:100%;width:100%;
	background-image:url('bg.jpg');
	background-size:100% 100%;
}
</style>
</head>
<body>

<div class="outer">
<div class="outer">
<div class="search"><input style="height:40px;width:88%;border-radius:10px 0px 0px 10px;" placeholder="Search here" type="text"/><span style="float:right;margin-top:;margin-right:2%;"><input style="height:40px;width:100px;margin-right:-20px;border-radius:0px 10px 10px 0px;" type="button" value="search" /></span></div>
<div id="head"><img style="height:100px;width:210px;margin-top:-60px;" src="logo.jpg"/>
<

<ul style="float:right;margin-right:20%;margin-top:-0px;">
<li><a href="index.php" style="color:white;action:active;">Home</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="about.php" style="color:white;">About us</a></li>&nbsp&nbsp&nbsp&nbsp
<li><a href="contact.php" style="color:white;">Contact us</a></li>&nbsp&nbsp&nbsp&nbsp

</div>
</br></br></br></br></br></br>
<?php
if($msg==1)
{
	echo "<span style='color:red;margin-left:130px;'>";
	echo "Invalid! Please login.";
	echo "</span>";
}
?>
<form action="mylogcode.php" method="post">

<div style="height:60%;width:35%;background-color:rgba(0,0,0,0.8);margin:3% 0% 0% 33%;border-radius:5%;">
<input style="height:40px;width:60%;margin:25% 0% 0% 20%;border-radius:5px;outline:none;" type="email" placeholder=" E-MAIL" name="a"/></br></br>
<input style="height:40px;width:60%;margin:5% 0% 0% 20%;border-radius:5px;outline:none;" placeholder=" PASSWORD" type="password" name="b"/></br></br></br>
<input style="height:40px;width:25%;margin:5% 0% 0% 37%;border-radius:5px;outline:none;background-color:lightblue;color:white;box-shadow:2px 2px 25px blue inset" type="submit" value="login"/></br></br>
<a style="margin:5% 0% 0% 10%;color:white" href="#">Forgot Password !</a>
<span style="margin:5% 0% 0% 20%;color:yellow">Have not account<a style="color:white;" href="#">  Sign up</a></span>
</div></form>
<div style="height:20%;width:7%;background-color:rgba(0,0,0,0.8);margin:-35.5% 0% 0% 46%;border-radius:50%;border:5px solid white;">
<img style="height:100%;width:100%;" src="admin.png"/>
</div>

</div>
</body>
</html>