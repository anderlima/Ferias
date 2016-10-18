<?php
session_start();

function isUserLogged() {
	return isset($_SESSION["user_email"]);
}

function checkUser() {
	if(!isUserLogged()) {
		$_SESSION["danger"] = "You do not have access to this functionality.";
		header("Location: index.php");
		die();
	}
}

function Whois() {
	return $_SESSION["user_email"];
}

function WhosName() {
	return $_SESSION["user_name"];
}

function logUser($email, $name) {
	$_SESSION["user_email"] = $email;
	$_SESSION["user_name"] = $name;
}


function getPrivilege($bucket) {
	$_SESSION[$bucket] = $bucket;
	return $_SESSION[$bucket];
}

function logout() {
	session_destroy();
	session_start();
}