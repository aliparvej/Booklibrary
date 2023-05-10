<?php
include("connect.php");
session_start();
$gmail=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("Location:index.php?msg=1");
}
$a=$gmail;
$query="select * from admin where email='$a'";
$res=mysql_query($query);
?>
<html>
<head>
<title>Admin Zone</title>
<style>
.box
{
	height:13.5%;width:80%;background-color:;margin:6% 0% 0% 9%;
}
.box:hover
{
transform:scale(1.1);

}
td
{
	font-size:40px;
}
</style>
</head>
<body style="background-image:url('bg.jpg');background-size:100% 100%;">
<div style="height:100%;width:100%;background-color:;">
<div style="height:100%;width:20%;background-color:pink;float:left;box-shadow:7px 5px 12px 4px black;">
<a href="mlist.php">
<div class="box">
<h1 style="font-size:30px;margin-left:15px;">Members List</h1>
</div></a>
<a href="addm.php">
<div class="box">
<h1 style="font-size:30px;margin-left:15px;">Add Members</h1>
</div></a>
<a href="addbook.php">
<div class="box">
<h1 style="font-size:30px;margin-left:15px;">Add Books</h1>
</div></a>


<div>

<a href="issuebook.php">
<div class="box">
<h1 style="font-size:30px;margin-left:15px;">Issue of Books</h1>
</div></a>
<a href="returnbook.php">
<div class="box">
<h1 style="font-size:30px;margin-left:15px;margin-top:-1px;">Return of </br>Books</h1>
</div></a>

</div>

</div>
<div style="height:100%;width:80%;float:left;background-image:url('../images/background3.png');background-size:cover;box-shadow:5px 5px 12px black;">
<div style="height:60px;width:100%;">
		
<span style="font-size:45px;margin-left:30%;margin-top:0px;color:blue;font-family:DriftType;"><u>Welcome Admin</u></span>
<a style="text-decoration:none;" href="logout.php"><span style="font-size:30px;margin-left:15%;margin-top:0px;color:white;background-color:pink;padding:10px;border-radius:10px;box-shadow:5px 5px 16px green inset;">Logout</span></div></a>


<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<img style="height:360px;width:300px;margin-left:80px;margin-top:80px;border:2px solid;box-shadow:7px 5px 12px 4px black;" src="admin/<?php echo $row['pic']  ?>"/>
	<Table border="1" align="center" style="margin-top:-25%;margin-left:50%;box-shadow:7px 5px 12px 4px black;background-color:lightblue">
	<tr><td>Name</td>
	<td><?php echo $row['Name']  ?></td><tr/>
	<tr><td>E-mail</td>
	<td><?php echo $row['email']  ?></td><tr/>
	<tr><td>Age</td>
	<td><?php echo $row['age']  ?></td><tr/>
	
	</table>
	
	<?php
}
?>

</div>
</div>

</body>
</html>