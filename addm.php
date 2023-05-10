<?php

?>
<html>
<head>
<title>Add member</title>
<style>
.container
{
	background-image:url('bg.jpg');
}
#head1
{
	height:;width:100%;
	
}
#head1 ul
{
	list-style-type:none;
		
}
#head1 ul li
{
	display:inline;
	padding:0px;
  
	border-radius:10px 10px 10px 10px;
	font-size:27px;background-color:;font-family:;
	
}

#head1 ul li a:hover
{
	font-size:30px;
	
	
}
#head1 ul li a:hover
{
	color:white;
	
	
}
#head1 ul li a
{
	text-decoration:none;
	color:blue;
}

table
{
	padding:10px;
}
td
{
	font-size:35px;
	color:white;
	
}
input
{
	height:30px;
}
h1
{
	margin:20px 0px 0px 85px;
	color:red;font-family:handwriting-draft_free-version;
}
.click:hover
{
	transform:scale(1.2);
	filter:drop-shadow(5px 5px 15px blue);
}

a img:hover{
transform:scale(1.3);
box-shadow:5px 5px 12px blue;
border-radius:10px;
}
</style>
</head>
<body>
<div style="height:100%;width:100%;background-color:pink;box-shadow:5px 5px 12px black;" class="container">
<div style="height:100%;width:20%;background-color:pink;box-shadow:5px 5px 10px 1px black;border:1px solid;float:left;">
</br></br>
<div id="head1">
<ul>
<li><a style="font-size:50px;float:left;color:red;" href="myadmin.php">Home<img style="height:50px;width:50px;margin:-50px 0px 0px 150px;" src="home.jpg"/></a></li>&nbsp&nbsp&nbsp&nbsp</br></br>

<li><a style="font-size:30px;" href="mlist.php">Member's List</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
<li><a href="addm.php">Add Members</a></li>&nbsp&nbsp&nbsp&nbsp</br></br>
</br>
<li><a href="addbook.php">Add Books</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>

<li><a href="issuebook.php">Issue of Books</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
<li><a href="returnbook.php">Return of </br>Books</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
</ul></div>
</div>

<h1 style="margin-left:45%;font-size:50px;"><u>Add Member</u></h1>
<div style="float:left;margin-left:240px;background-color:;">
</br>
<div style="height:80%;width:120%;background-color:rgba(0,0,0,0.6);box-shadow:7px 7px 15px red;float:left;margin-left:15%;border-radius:15px;">

<legend align="center"></legend>
<form action="addmcode.php" method="post" enctype="multipart/form-data">
<table  align="center"></br><br/></br>

<tr><td>Name</td>
<td><input type="text"  name="name"/></td></tr>
<tr><td>Class   </td>
<td><input type="text" name="class"/></td></tr>
<tr><td>Gender</td>
<td><input type="radio" name="a" value="male"/>Male
<input type="radio" name="a" value="female"/>Female</tr></td>
<tr><td>Age  </td>
<td><input type="text" name="age"/></td></tr>

<tr><td>Mobile</td>
<td><input type="number" name="mob"/></tr></td>

<tr><td>Address</td>
<td><textarea name="add"> </textarea ></tr></td>
<tr><td>PIN</td>
<td><input type="number" name="pin"/></tr></td></table></br></br></br>
<input style="height:40px;width:140px;background-color:lightblue;margin-left:35%;box-shadow:5px 5px 25px blue inset;border-radius:5px;color:white;font-size:20px;" type="submit" value="Add"/></div>
</div>
</div>
</form>
</div>
</div>
</body>
</html>