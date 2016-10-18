<?php
require_once("header.php");
require_once("user_logic.php");
?>

<h1>IBM Intranet</h1>

<?php
if(isUserLogged()) {
?>
		<p class="text-success">Você está logado como <?= Whois() ?>. <a href="logout.php">Deslogar</a></p>
<?php
} else {
?>
	<h3 class="text-center">Login</h3>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="text" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="password"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
<?php
}
?>

<?php include("footer.php"); ?>