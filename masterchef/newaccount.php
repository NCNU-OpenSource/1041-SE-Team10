<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帳號申請</title>
</head>

<body>

<p>帳號申請</p>
<hr />
<p>
<?php
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'masterchef';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8");
$uid=mysqli_real_escape_string($conn,$_POST['uid']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$nickname=mysqli_real_escape_string($conn,$_POST['nickname']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);


if ($uid) {
	$sql = "insert into user (id, password, nickname, gender, cash) values ('$uid', '$password','$nickname','$gender', '500');";
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
	echo "New account added.";
    header("Location:login.php");
} else {
	echo "empty title, cannot insert.";
}
?>
</p>
<p><a href="register.php">回注冊頁面</a> </p>
</body>
</html>
