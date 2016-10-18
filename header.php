<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("show_alert.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>KPIOnline</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/complement.css" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">KPI</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="kpi-list.php">Search</a></li>
					<li><a href="#">Reports</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="main">
			<?php showAlert("success"); ?>
			<?php showAlert("danger"); ?>