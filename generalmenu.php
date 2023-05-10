<?php

?>
<html>

<head>
<style>
*{
	padding:0px; margin:0px;
}
.menu
{
 height:60px;
 width:100%;
 background-color:black;
 margin:0px auto;
 
// margin-top:100px;
// border-radius:20px;
}
.menu ul
{
 list-style-type:none;
}
.menu ul li
{
 display:inline-block;
 padding:20px;
}
.menu ul li a
{
text-decoration:none;color:white;
}
.menu ul li a:hover
{
color:red;border-radius:10px;
}


</style>
</head>

<body>

<div class="menu">
  <ul>
     <li><a href="index.php">HOME</a></li>
     <li><a href="news.php">NEWS & EVENTS</a></li>
     <li><a href="about.php">ABOUT</a></li>
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
   
   <input type="text" style="height:32px" width="100px"/>
   <input type="submit" value="Search" style="height:32px" width="30px"/>
  </ul>

</div>


</body>


</html>