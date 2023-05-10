<?php
session_start();
$bid=$_REQUEST['bid'];
include("connect.php");

$gmail=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:mylogin.php?msg=1");
}
//echo $aid;
$query="select * from book_stock where id='$bid'";
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
td
{
	font-size:40px;
}
</style>
</head>
<body>
<div style="height:100%;width:100%;background-color:;box-shadow:5px 5px 12px black;" class="container">
<div style="height:100%;width:20%;background-color:pink;box-shadow:5px 5px 10px 1px black;border:1px solid;float:left;">
</br></br>
<div id="head1">
<ul>
<li><a style="font-size:50px;float:left;color:red;" href="myadmin.php">Home<img style="height:50px;width:50px;margin:-50px 0px 0px 150px;" src="home.jpg"/></a></li>&nbsp&nbsp&nbsp&nbsp</br></br>

<li><a style="font-size:30px;" href="mlist.php">Member's List</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
<li><a href="addm.php">Add Members</a></li>&nbsp&nbsp&nbsp&nbsp</br></br>
</br>
<li><a href="addbook.php">Add Books</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
<li><a href="stock.php">Stock Mainte-</br>nance</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
<li><a href="issuebook.php">Issue of Books</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
<li><a href="returnbook.php">Return of </br>Books</a></li>&nbsp&nbsp&nbsp&nbsp</br></br></br>
</ul></div>
</div>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	
	<img style="height:400px;width:300px;margin-left:35px;margin-top:20px;border:1px solid;box-shadow:7px 5px 12px 4px black;" src="addbook/<?php echo $row['pic']  ?>"/>
	<Table border="1" align="center" style="margin-top:-25%;margin-left:50%;background-color:lightblue;box-shadow:7px 5px 12px 4px black;">
	<tr><td>Book Name</td>
	<td><?php echo $row['bookname']  ?></td><tr/>
	<tr><td>Book Code</td>
	<td><?php echo $row['bookcode']  ?></td><tr/>
	<tr><td>Author</td>
	<td><?php echo $row['author']  ?></td><tr/>
	<tr><td>Price</td>
	<td><?php echo $row['price']  ?></td><tr/>
	<tr><td>Rack No</td>
	<td><?php echo $row['rackno']  ?></td><tr/>
	<tr><td>Subject Code</td>
	<td><?php echo $row['subcode']  ?></td><tr/>
	<tr><td>Date</td>
	<td><?php echo $row['date']  ?></td><tr/>
	</table>

<?php
	
}

?>
</body>
</html>