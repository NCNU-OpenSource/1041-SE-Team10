<?php
require("config.php");
$oven = $_POST['id'];
$host = 'localhost';
$user = 'myid';
$pass = '12345';
$db = 'masterchef';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8");
$uid=$_SESSION['uID'];
if ($oven==pizzaoven) {
	$sql = "update oven set `pizzaoven`='1' where uid='$uid';";
    $sql2 = "update user set `cash`='cash'-500 where uid='$uid';";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
    mysqli_query($conn,$sql2) or die("MySQL query error2");
	header("Location:home.php");
} else echo "empty message id.";
if ($oven==breadoven) {
	$sql = "update oven set `breadoven`='1' where uid='$uid';";
    $sql2 = "update user set `cash`='cash'-500 where uid='$uid';";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
    mysqli_query($conn,$sql2) or die("MySQL query error2");
	header("Location:home.php");
} else echo "empty message id.";
if ($oven==cookieoven) {
	$sql = "update oven set `cookieoven`='1' where uid='$uid';";
    $sql2 = "update user set `cash`='cash'-500 where uid='$uid';";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
    mysqli_query($conn,$sql2) or die("MySQL query error2");
	header("Location:home.php");
} else echo "empty message id.";
if ($oven==cakeoven) {
	$sql = "update oven set `cakeoven`='1' where uid='$uid';";
    $sql2 = "update user set `cash`='cash'-500 where uid='$uid';";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
    mysqli_query($conn,$sql2) or die("MySQL query error2");
	header("Location:home.php");
} else echo "empty message id.";
?>