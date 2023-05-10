<?php
session_start();
include("connect.php");
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php?msg=1");
}
$query="select * from book_stock";
$res=mysql_query($query);
?>
<html>
<head>
<title>Book Issue</title>
<style>
.container
{
	background-image:url('jpg');
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

</style>
</head>
<body>
<div style="height:100%auto;width:100%;background-color:;box-shadow:5px 5px 12px black;" class="container">
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
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>

<a href="confirmbook.php?bid=<?php echo $row['id'] ?>"><img style="height:300px;width:230px;margin-left:25px;margin-top:20px;border:1px solid;" src="addbook/<?php echo $row['pic']; ?>"/></a>

<?php	
$a++;
}
?></table></div>
</body>
</html>