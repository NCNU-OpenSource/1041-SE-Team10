<?php
require("config.php");
?>
<style type="text/css">
.game {
    position: absolute;
    background-image: url(pics/materialbackground.jpg); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
	z-index:1;
	opacity: .5;
	filter: Alpha(Opacity=50);
}
.chef{
	width: 150px;
	height: 100px;
    position: absolute;
	left: 600px;
	top: 340px;
	z-index: 20;
}
.Back{
    width: 150px;
	height: 100px;
    position: absolute;
	left: 750px;
	top: 600px;
}
.bake {
	position: absolute;
	left: 80px;
	top: 90px;
    z-index: 10;
    
    opacity:0.9;
}
table {
    width: 700px;
	height: 520px;
	text-align: center;
	background-color: white;
	z-intex: 8px;
}
tr td{
	font-size: 40px;
}
ul li{
    list-style-type: none;
	width: 20px;
}
</style>
<head>

<script>
</script>

</head>
<html>
<body>
<div class="game">

</div>

<div class="Back" style="z-index:15">
<a href="shop.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>

<div class="chef">
<img src="pics\Chef-Clipart.png" width="250px">
</div>

<div class="bake" >

<table class="pizzacategory">
<tr><td><img src ="*"  width="150px"></td>
<td><img src ="*"  width="150px"></td>
<td><img src ="*"  width="150px"></td></tr>
<tr><td>$50</td>
<td>$60</td>
<td>$70</td></tr>
<tr><td><img src ="*" style="z-index:10" width="150px"></td>
<tr><td>$80</td>
</tr>
</table>

</div>

</body>
</html>
