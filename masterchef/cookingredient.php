<?php
require("config.php");

$ingredient = $_POST['id'];
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'masterchef';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8");
$uid=$_SESSION['uID'];
?>
<style type="text/css">
.game {
    position: absolute;
    background-image: url(pics/ovenhome.png); 
    background-repeat: no-repeat; 
    width: 800px;
    height: 600px;
    overflow: hidden;
    padding-left: 30px;
    padding-top: 30px;
	z-index:1;
    opacity: 0.5;
	filter: Alpha(Opacity=50);
}
.game h1{
    padding-left: 30px;
    padding-top: 30px;
    color: black;
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
</style>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<html>
<body>
<div class="game">
<h1>countdown second：<span id="countNum"></span></h1>
<?php
$select="select * from user;";
$results=mysqli_query($conn,$select);
$rs2=mysqli_fetch_array($results);
$select2="select * from cakeoven where `user` = '$uid';";
$select3="select * from cookieoven where `user`='$uid';";
$select4="select * from breadoven where `user`='$uid';";
$select5="select * from pizzaoven where `user`='$uid';";
$results=mysqli_query($conn,$select2);
$results2=mysqli_query($conn,$select3);
$results3=mysqli_query($conn,$select4);
$results4=mysqli_query($conn,$select5);
$rs1=mysqli_fetch_array($results);
$rs2=mysqli_fetch_array($results2);
$rs3=mysqli_fetch_array($results3);
$rs4=mysqli_fetch_array($results4);
switch($ingredient)
{
    case'cake1'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 where `uid`='1';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        $cooktime="select time from cakeoven where `name`=`cake1`;";
        mysqli_query($conn,$select2);
        break;
    case'cake2'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 where `uid`='2';";
        mysqli_query($conn,$sql) or die("MySQL query error");   
        break;
    case'cake3'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 where `uid`='3';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'cake4'://cake
        $sql = "update cakeoven set `amount`=`amount`-1 where `uid`='4';";
        mysqli_query($conn,$sql) or die("MySQL query error");       
        break;
    case'bread1'://bread
        $sql = "update breadoven set `amount`=`amount`-1 where `uid`='1';";
        mysqli_query($conn,$sql) or die("MySQL query error");
        $cooktime=$rs3['time'];?>
        <script>
            var = myVar;
            start();
        </script>
        <?php
        break;
    case'bread2'://bread
        $sql = "update breadoven set `amount`=`amount`-1 where `uid`='2';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'bread3'://bread
        $sql = "update breadoven set `amount`=`amount`-1 where `uid`='3';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'bread4'://bread
        $sql = "update breadoven set `amount`=`amount`-1 where `uid`='4';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'cookie1'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 where `uid`='1';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'cookie2'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 where `uid`='2';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'cookie3'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 where `uid`='3';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'cookie4'://cookie
        $sql = "update cookieoven set `amount`=`amount`-1 where `uid`='4';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'pizza1'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 where `uid`='1';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'pizza2'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 where `uid`='2';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'pizza3'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 where `uid`='3';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
    case'pizza4'://pizza
        $sql = "update pizzaoven set `amount`=`amount`-1 where `uid`='4';";
        mysqli_query($conn,$sql) or die("MySQL query error"); 
        break;
}
?>
<script>
			var myVar;
			function start() {
				var sec = "<?php echo $cooktime; ?>";
                $('#countNum').text(sec);
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
</body>
</html>
