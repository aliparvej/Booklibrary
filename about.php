<?php

?>


<html>

<head>

<style>
*{
	margin:0px; padding:0px;
}
#outer{
	height:auto; width:100%;
	background-image:url('images/aboutbgimage.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	background-attachment: fixed;
	
}
#about{
	height:auto; width:100%;
	background-color:rgba(255,255,255,0.5);
}

.space{
	height:13px; width:100%; 
	background-color:transparent; opacity:0.5;
}
#bgimage{
	height:350px; width:100%;
}
#heading{
	height:100px; width:100%;
	//border:1px solid;
}
#container{
	height:auto;width:90%;
	//border:1px solid;
	background:transparent;
	background-color:rgba(255,255,255,0.7);
	font-family:calibri;
	font-size:18px;
}
#material1{
	height:auto; width:95%;
	background-color:transparent;
	//border:1px solid; 
	//margin-top:2%;
}
#officals{
	height:300px; width:100%;
}
.ceo{
	 height:280px; width:280px; background-color:pink; float:left; border-radius:280px; margin-left:30px;
}

#footerimg{
	height:340px; width:100%;
// background-color:rgba(255,255,255,0.7);
}
#values{
	height:340px; width:70%; background-color:transparent;
	font-family:calibri; font-size:22px;float:left;
}
#valuesbg{
	height:320px; width:100%; background-color:white; margin-top:20px; margin-left:30px;
}
#line{
	height:320px; width:4px; background-color:black; margin-left:40px;
	margin-top:20px; float:left; border-radius:5px; opacity:0.5;
}
#valuesimg{
	height:340px; width:340px;background-color:transparent;float:left;
}



</style>

</head>


<body>
<div id="outer">
<div id="about">

<div id="menu">
<?php include("generalmenu.php"); ?>
</div>
<br/><br/><br/><br/><br/><br/>

<div id="bgimage">

<center><img style=" height:350px; width:96%;"src="images/gliagraa.jpg"></center>
</div>
<div class="space"></div>
<div id="heading">
<center>
<span style="font-family:calibri;font-size:55px; line-height:100px;">
 <b>ABOUT US </b>
</span></center>
</div>

<center>
<div id="container">
<div id="material1">
<br/><br/>
<p1>Government Leather Institute is located at Agra, the Historical city of Mughal Emperors. where apart from Taj Mahal, the biggest shoe industry of Asia is also located. This institute was setup in the year 1962 for training in two branches of technology
(Diploma in Leather Technology and Diploma in Footwear & leather goods Technology).
</p1>
<br/><br/>
<p2>
To provide adequate technically trained manpower to the Leather and Footwear industry of Agra Both the courses were intended for 2 years duration, which was subsequently changed to 3 years course w.e.f. 1983 as per the need of the industry with revised curriculum and increased intake for both.
</p2>

<br/><br/><br/>
</div>
</div>
</center>
<div class="space"></div>
<br/>




</div>
<?php include("footer.php"); ?>

</div>
</body>

</html>