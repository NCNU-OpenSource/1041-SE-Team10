<?php
require("config.php");
$id=$_SESSION['uID'];
?>
<style type="text/css">
<!--.game {
    position: absolute;
    background-image: url(pics/homefade.png); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
}-->
.game img{
    position: absolute;
    left:0px;
    top:0px;
}
.equipment{
	position: absolute;
	left:170px;
	top:520px;
}

.modal-box {
  display: none;
  position: absolute;

  z-index: 1000;
  width: 300px;
  background: white;
  border-bottom: 1px solid #aaa;
  border-radius: 4px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}
@media (min-width: 32em) {

.modal-box { width: 300px; position: absolute; left: 100px;}
}

.modal-box header,
.modal-box .modal-header {
  padding: 1.25em 1.5em;
  border-bottom: 1px solid #ddd;
}

.modal-box header h3,
.modal-box header h4,
.modal-box .modal-header h3,
.modal-box .modal-header h4 { margin: 0; }

.modal-box .modal-body { padding: 2em 1.5em; }

.modal-box footer,
.modal-box .modal-footer {
  padding: 1em;
  border-top: 1px solid #ddd;
  background: rgba(0, 0, 0, 0.02);
  text-align: right;
}

.modal-overlay {
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 900;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3) !important;
}

a.close {
  line-height: 1;
  font-size: 1.5em;
  position: absolute;
  top: 50px;
  right: 20px;
  text-decoration: none;
  color: #bbb;
}

a.close:hover {
  color: #222;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  transition: color 1s ease;
}
tr td{
	font-size: 35px;
	color: #333300;
	font-family: cursive;
	font-weight: bold;
	text-shadow: 0px 0px 7px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 0px 0px 5px #fff, 
}
.equipment{
	left: 38px;
	top: 448px;
}
h3{
	font-size: 25px;
	font-family: cursive;
}
.Back{
    width: 150px;
	height: 100px;
    position: absolute;
	left: 745px;
	top: 528px;
}
.uncook{
	position: absolute;
	left: 189px;
	top: 170px;
}
</style>
<head>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 1000,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>

</head>
<html>
<body>
    <div class="container">
		<div>
            <div id="droppable" class="ui-widget-header">
				<img src ="pics\ovenhome.png" style="z-index:1" width="800px" id="cake">
			</div>
		</div>
			
	</div>
	
<div class="uncook">
<table>
<?php
$sql2 = "select * from cakeoven";
$results2=mysqli_query($conn,$sql2);
while ($rs2=mysqli_fetch_array($results2)) {
    $nickname = $rs2['name'];
    if($rs2['status']==1)
    {
        if($nickname == 'cake1')
            echo"<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"cake{$rs2['uid']}\"><img src=\"pics\\uncook.png\" width=\"120px\"></a></td>";
        if($nickname == 'cake2')
            echo"<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"cake{$rs2['uid']}\"><img src=\"pics\\uncook.png\" width=\"120px\"></a></td>";
        if($nickname == 'cake3')
            echo"<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"cake{$rs2['uid']}\"><img src=\"pics\\uncook.png\" width=\"120px\"></a></td>";
        if($nickname == 'cake4')
            echo"<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"cake{$rs2['uid']}\"><img src=\"pics\\uncook.png\" width=\"120px\"></a></td>";
    }
}
    
}
?>
    <div id="pizza1" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Finish!</h3>
    </header>
        <div class="modal-body">
            <p>you got $100 & 40 exp!</p>
        </div>
        <footer><form method="post" action="sold.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake1">start</button></form> </footer>
    </div>
    <div id="pizza2" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Finish!</h3>
    </header>
        <div class="modal-body">
            <p>you got $120 & 50 exp</p>
        </div>
        <footer><form method="post" action="sold.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake2">start</button></form> </footer>
    </div>
    <div id="pizza3" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Finish!</h3>
    </header>
        <div class="modal-body">
            <p>you got $140 & 60 exp!</p>
        </div>
        <footer><form method="post" action="sold.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake3">start</button></form> </footer>
    </div>
    <div id="pizza4" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Finish!</h3>
    </header>
        <div class="modal-body">
            <p>you got $160 & 70 exp!</p>
        </div>
        <footer><form method="post" action="sold.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake4">start</button></form> </footer>
    </div>
    </table>
</div>
	
	
<div class="equipment">
<table>
<?php
$sql = "select * from cakeoven where amount>0;";
$results=mysqli_query($conn,$sql); 
echo "<tr>";
while ($rs=mysqli_fetch_array($results)) {
	$src = $rs['name'];
	if($rs['status']==0)
	echo "<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy{$rs['uid']}\">
	<img src=\"pics\\{$src}.png\" width=\"120px\"></a></td>";
	if($rs['status']==1)
	echo "<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"notbuy{$rs['uid']}\">
	<img src=\"pics\\{$src}.png\" width=\"120px\"></a></td>";
	echo "<td>x " , $rs['amount'] ,"</td>" ;
}

echo"</tr>";
?>
<div id="buy1" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook Cake?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake1">start</button></form> </footer>
</div>
<div id="buy2" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook Cake?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake2">start</button></form> </footer>
</div>
<div id="buy3" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook Cake?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake3">start</button></form> </footer>
</div>
<div id="buy4" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook Cake?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake4">start</button></form> </footer>
</div>
<div id="notbuy1" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Only can cook one cake</h3>
    </header>
        <div class="modal-body">
            <p>Please Wait</p>
        </div>
        <footer><form method="post" action="cakeoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake1">back</button></form> </footer>
</div>
<div id="notbuy2" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Only can cook one cake</h3>
    </header>
        <div class="modal-body">
            <p>Please Wait</p>
        </div>
        <footer><form method="post" action="cakeoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake1">back</button></form> </footer>
</div>
<div id="notbuy3" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Only can cook one cake</h3>
    </header>
        <div class="modal-body">
            <p>Please Wait</p>
        </div>
        <footer><form method="post" action="cakeoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake1">back</button></form> </footer>
</div>
<div id="notbuy4" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Only can cook one cake</h3>
    </header>
        <div class="modal-body">
            <p>Please Wait</p>
        </div>
        <footer><form method="post" action="cakeoven.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="cake1">back</button></form> </footer>
</div>
</table>
</div>
<div class="Back" style="z-index:15">
<a href="home.php"><img src="pics/unnamed.png" id="back" width="60px" height="auto" ></a>
</div>
</body>
</html>