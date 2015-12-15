<?php
/*require("config.php");*/
session_start(); //program needs session function
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'masterchef';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫

$_SESSION['uID'] = "";
if(isset($_POST['id']) && isset($_POST['pwd'])){
	$userName = $_POST['id'];
	$passWord = $_POST['pwd'];
    $sql = "SELECT * FROM user WHERE id='" . $userName . "' AND password= '" . $passWord . "'";
		if ($result = mysqli_query($conn,$sql)) {
			if ($row=mysqli_fetch_array($result)) {
				$_SESSION['uID'] = $row['id'];
				$_SESSION['nickname']=$row['nickname'];
				header("Location:home.php");
				exit(0);
			} else {
				echo "Invalid Username or Password - Please try again <br />";
			}
		}
}
else{
	$userName = "";
	$passWord = "";
}
		

?>
<html>
<link  href="mycss.css"  rel="stylesheet"  type="text/css" />

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
.game img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: auto;
}
</style>
<body id="">
<div class="game">
<h1>Login</h1>
<p>
New User? Click <a href="register.php">here</a> to register<br/><br/>
<form method="post" action="login.php">
Username: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="submit">
</form>
</p>
</div>
</body>
</html>