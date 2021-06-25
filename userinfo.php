<?php

$con = mysqli_connect('remotemysql.com','GMmHwgr3g2','eaNSOiTuIX');

if($con) {
	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'GMmHwgr3g2');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$payment = $_POST['payment'];
$comments = $_POST['comments'];

$query = "INSERT INTO `userinfodata` (`user`, `email`, `mobile`, `payment`, `comments`) VALUES ('$user', '$email', '$mobile', '$payment', '$comments')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>