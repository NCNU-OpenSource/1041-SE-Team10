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
$select="select * from user where `uid`='$uid';";
$select2="select * from cakeoven where `uid`='$uid';";
if ($ingredient==cake1) {
	$sql = "update cakeoven set `cake1`=`cake1`+1 where `uid`='$uid';";
    mysqli_query($conn,$sql) or die("MySQL query error"); 
    $sql2 = "update user set `cash`=`cash`-50 where id='$uid';";
	mysqli_query($conn,$sql2) or die("MySQL query error2"); //執行SQL
	//header("Location:cakematerial.php");
} else echo "empty message id.";

?>