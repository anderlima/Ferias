<?php
require_once("connect_db.php");

function getUser($connection, $email, $password) {

	$passMd5 = md5($password);
	$email = mysqli_real_escape_string($connection, $email);
	$query = "select * from users where email='{$email}' and password='{$password}'";
	$result = mysqli_query($connection, $query);
	$user = mysqli_fetch_assoc($result);

	return $user;
}