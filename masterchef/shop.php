<?php
require("config.php");
?>
<style type="text/css">
.game {
    position: absolute;
    background-image: url(pics/homefade.png); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
}
.chef{
	width: 150px;
	height: 100px;
    position: absolute;
	left: 380px;
	top: 110px;
}
.Back{
    width: 150px;
	height: 100px;
    position: absolute;
	left: 700px;
	top: 500px;
}
table{
	position: absolute;
	z-index: 10;
	ba
}
ul li{
    list-style-type:none;
	width:20px;
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

<div class="Back">
<a href="home.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>

<div class="chef">
<img src="pics\Chef-Clipart.png" width="300px">
</div>

<div class="bake" >

<table> 
<tr><td><a href="breadmaterial.php"><img src="pics\breadbutton.png" style="z-intex:10" width="150px" ></a></td>
<td><img src ="pics\cakebutton.png" style="z-index:10" width="150px"></td></tr>
<tr><td><img src ="pics\cookiebutton.png" style="z-index:10" width="150px"></td>
<td><img src ="pics\pizzabutton.png" style="z-index:10" width="150px"></td>
</tr>
</table>

</div>

</body>
</html>
