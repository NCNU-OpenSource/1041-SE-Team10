<?php
require("config.php");
$id=$_SESSION['uID'];
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

<table class="equipment">
<?php

$sql = "select * from breadoven where amount>0";
$results=mysqli_query($conn,$sql);
while ($rs=mysqli_fetch_array($results)) {
	if ($rs['amount']>0){
		echo "<tr><td><img src =\"pics\bread1.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs['amount'] ,"</td>" ;
	}
	if ($rs['amount']>0){
		echo "<tr><td><img src =\"pics\bread2.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs['amount'] ,"</td>" ;
	}
	if ($rs['amount']>0){
		echo "<tr><td><img src =\"pics\bread3.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs['amount'] ,"</td>" ;
	}
	if ($rs['amount']>0){
		echo "<tr><td><img src =\"pics\bread4.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs['amount'] ,"</td>" ;
	}

	echo "</tr>";
}

$sql2 = "select * from cakeoven where uid='$id';";
$results2=mysqli_query($conn,$sql2);
while ($rs2=mysqli_fetch_array($results2)) {
	if ($rs2['cake1']>0){
		echo "<tr><td><img src =\"pics\cake1.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs2['cake1'] ,"</td>" ;
	}
	if ($rs2['cake2']>0){
		echo "<tr><td><img src =\"pics\cake2.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs2['cake2'] ,"</td>" ;
	}
	if ($rs2['cake3']>0){
		echo "<tr><td><img src =\"pics\cake3.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs2['cake3'] ,"</td>" ;
	}
	if ($rs2['cake4']>0){
		echo "<tr><td><img src =\"pics\cake4.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs2['cake4'] ,"</td>" ;
	}

	echo "</tr>";
}

$sql3 = "select * from cookieoven where uid='$id';";
$results3=mysqli_query($conn,$sql3);
while ($rs3=mysqli_fetch_array($results3)) {
	if ($rs3['cookie1']>0){
		echo "<tr><td><img src =\"pics\cookie1.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs3['cookie1'] ,"</td>" ;
	}
	if ($rs3['cookie2']>0){
		echo "<tr><td><img src =\"pics\cookie2.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs3['cookie2'] ,"</td>" ;
	}
	if ($rs3['cookie3']>0){
		echo "<tr><td><img src =\"pics\cookie3.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs3['cookie3'] ,"</td>" ;
	}
	if ($rs3['cookie4']>0){
		echo "<tr><td><img src =\"pics\cookie.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs3['cookie4'] ,"</td>" ;
	}

	echo "</tr>";
}

$sql4 = "select * from pizzaoven where uid='$id';";
$results4=mysqli_query($conn,$sql4);
while ($rs4=mysqli_fetch_array($results4)) {
	if ($rs4['pizza1']>0){
		echo "<tr><td><img src =\"pics\pizza1.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs4['pizza1'] ,"</td>" ;
	}
	if ($rs4['pizza2']>0){
		echo "<tr><td><img src =\"pics\pizza2.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs4['pizza2'] ,"</td>" ;
	}
	if ($rs4['pizza3']>0){
		echo "<tr><td><img src =\"pics\pizza3.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs4['pizza3'] ,"</td>" ;
	}
	if ($rs4['pizza4']>0){
		echo "<tr><td><img src =\"pics\pizza4.png\"  width=\"150px\"></td>"; 
		echo "<tr><td>" , $rs4['pizza4'] ,"</td>" ;
	}

	echo "</tr>";
}

?>
</table>


</body>
</html>
