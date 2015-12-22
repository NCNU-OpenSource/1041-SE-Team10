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
.game h1{
    padding-left: 30px;
    padding-top: 30px;
}
.game p{
    padding-left: 30px;
}
.game form{
    padding-left: 30px;
}
#shop{
    position: absolute;
    left: 700px;
    top: 470px;
}
.ME{
	position: absolute;
	left: 390px;
	top: 400px;
}
<!--.btn {
  font-size: 3vmin;
  padding: 0.75em 1.5em;
  background-color: #fff;
  border: 1px solid #bbb;
  color: #333;
  text-decoration: none;
  display: inline;
  border-radius: 4px;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}-->

.btn:hover {
  background-color: #ddd;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn-small {
  padding: .75em 1em;
  font-size: 0.8em;
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
<!--<script src="jquery-1.11.3.min.js">
$('#pizzaoven').click(function(){
    if($rs['pizzaoven']==0) //問他要不要買
});
</script>-->
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
</script>

</head>
<html>
<body>
<div class="game">
<a href="shop.php"><img src="pics/shop.png" id="shop" width="60px" height="auto" ></a>
<!--if oven =0 -> locked, =1 -> unlocked-->
<?php
    $uid=$_SESSION['uID'];
    $sql = "select * from oven where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error");
    $results=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_array($results);
    
    if ($rs['pizzaoven']==0){
        echo "<a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buypizzaoven\"><img src=\"pics/pizzaovenlocked.png\" id=\"pizzaoven\" width=\"300px\"></a>";
    }
    else
        echo "<img src=\"pics/pizzaovenunlocked.png\" id=\"pizzaoven\" width=\"300px\">";
    if ($rs['breadoven']==0)
        echo "<a class=\"js-open-modal btn\" href=\"#\" data-modal-id=\"buybreadoven\"><img src=\"pics/breadovenlocked.png\" id=\"breadoven\" width=\"300px\"></a>";
    else
        echo "<img src=\"pics/breadovenunlocked.png\" id=\"breadoven\" width=\"300px\">";
    if ($rs['cakeoven']==0)
        echo "<img src=\"pics/cakeovenlocked.png\" id=\"cakeoven\" width=\"300px\">";
    else
        echo "<img src=\"pics/cakeovenunlocked.png\" id=\"cakeoven\" width=\"300px\">";
    if ($rs['cookieoven']==0)
        echo "<img src=\"pics/cookieovenlocked.png\" id=\"cookieoven\" width=\"300px\">";
    else
        echo "<img src=\"pics/cookieovenunlocked.png\" id=\"cookieoven\" width=\"300px\">";
	
?>
<div class="ME">

<?php
$sql2 = "select * from user ";
$results2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($results2);
echo "<img src=\"pics\cash.png\" style=\"width:100px\" />：";
echo $rs2['cash'];
echo "<img src=\"pics\EXP.png\" style=\"width:100px\" />：";
echo $rs2['exp'];
?>
</div>

<div id="buypizzaoven" class="modal-box">
     <header> <a href="#" class="js-modal-close close">×</a>
        <h3>Buy Pizza Oven</h3>
    </header>
        <div class="modal-body">
            <p>Do you wish you buy the pizza oven for $500?</p>
        </div>
        <footer><form method="post" action="buyoven.php" value="pizza"><button type="submit" class="btn btn-small js-modal-close" name="id" value="pizzaoven">buy</button></form> </footer>
</div>
</div>

</body>
</html>
