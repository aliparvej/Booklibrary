<?php
session_start();
include("connect.php");
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php?msg=1");
}
$query="select * from students";
$res=mysql_query($query);
?>
<html>
<head>
<title>Member's List</title>
<style>

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

th{
	color:blue;font-size:19px;
}
td
{
	color:black;font-size:17px;
}

th{
	color:blue;font-size:19px;
}
td
{
	color:black;font-size:17px;
}
</style>
</head>
<body>
<div style="height:100%;width:100%;background-color:pink;box-shadow:5px 5px 12px black;">
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

<h1 style="margin-left:47%;font-size:50px;"><u>Member's List</u></h1>
<div style="float:left;margin-left:180px;background-color:red;">
<table border="1" align="center" style="box-shadow:25px 25px 150px white inset;">
<tr>
<th>S.No.</th>
<th>Name</th>
<th>Class</th>
<th>Gender</th>
<th>Age</th>
<th>Mobile</th>
<th>Address</th>
<th>Pin</th>
<th>Date & Time</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['st_name']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['pin']; ?></td>
<td><?php echo $row['date']; ?></td>
</tr>

<?php	
$a++;
}
?></table></div></div>
</body>
</html>