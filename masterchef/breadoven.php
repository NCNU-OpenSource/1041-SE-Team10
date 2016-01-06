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
  left: 50px;
  top: 100px;
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

.modal-box { width: 300px; position: absolute; left: 0px; top: 50px;}
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
  top: 5%;
  right: 2%;
  text-decoration: none;
  color: #bbb;
}

a.close:hover {
  color: #222;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  transition: color 1s ease;
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
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});

//countdown
var myVar;
			function start() {
				var sec = $("#count").val();
				countdown(sec);
			}
			function stop() {
				clearInterval(myVar);
			}
			function countdown(sec) {
				myVar = setInterval(function() {
					$('#countNum').text(sec);
					sec = sec - 1;
					if (sec < 0) {
						stop();
						$('p').html('<h1 id="boom">done cooking!</h1>');
						$('#boom').fadeOut(1000);
					}
				}, 1000);
			}
</script>

</head>
<html>
<body>
<h3>Bread oven</h3>
<img src ="pics\ovenhome.png" style="z-index:1" width="800px" id="bread"><span id="countNum"></span>
<div class="equipment">
<table>
<?php
$sql = "select * from breadoven where amount>0;";
$results=mysqli_query($conn,$sql); 
echo "<tr>";
$i=1;
while ($rs=mysqli_fetch_array($results)) {
	$src = $rs['name'];
    if ($i==1){
	echo "<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy1\"><img src =\"pics\\{$src}.png\" width=\"110px\"></a></td>"; 
	echo "<td>X" , $rs['amount'] ,"</td>" ;
    }
    else if ($i==2){
	echo "<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy2\"><img src =\"pics\\{$src}.png\" width=\"110px\"></a></td>"; 
	echo "<td>X" , $rs['amount'] ,"</td>" ;
    }
    else if ($i==3){
	echo "<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy3\"><img src =\"pics\\{$src}.png\" width=\"110px\"></a></td>"; 
	echo "<td>X" , $rs['amount'] ,"</td>" ;
    }
    else{
	echo "<td><a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buy4\"><img src =\"pics\\{$src}.png\" width=\"110px\"></a></td>"; 
	echo "<td>X" , $rs['amount'] ,"</td>" ;
    }
    $i++;
	
}
echo "</tr>";
?>
<div id="buy1" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook this?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="bread1" onclick="start()">start</button></form> </footer>
</div>
<div id="buy2" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook this?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="bread2" onclick="start()">start</button></form> </footer>
</div>
<div id="buy3" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook this?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="bread3" onclick="start()">start</button></form> </footer>
</div>
<div id="buy4" class="modal-box">
     <header> <a href="#" class="js-modal-close close">x</a>
        <h3>Do you want to cook this?</h3>
    </header>
        <div class="modal-body">
            <p>Cook this?</p>
        </div>
        <footer><form method="post" action="cookingredient.php"><button type="submit" class="btn btn-small js-modal-close" name="id" value="bread4" onclick="start()">start</button></form> </footer>
</div>
</table>
</div>
</body>
</html>