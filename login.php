<?php 
require_once("db_user.php");
require_once("user_logic.php");

$email = $_POST["email"];
$password = $_POST["password"];

$user = getUser($connection, $email, $password);

if($user == null) {
	$_SESSION["danger"] = "Wrong user or password!";
	header("Location: index.php");
} else {
	$_SESSION["success"] = "User successfully logged!";
	logUser($user["email"], $user["group"]);
	getPrivilege($user["bucket"]);
	header("Location: workbench.php");
}
die();
?>