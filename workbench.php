<?php
require_once("header.php");
require_once("user_logic.php");

checkUser();
if(isset($_SESSION['qa']) || isset($_SESSION['dispatcher'])) {
	header('Location:kpi_form.php');
} else {
date_default_timezone_set('America/Sao_Paulo');
$date = date("d/m/Y H:i:s ", time());
}
?>

<p class="text-success">Olá <?= WhosName() ?>. <a href="logout.php">Deslogar</a></p>

<h2>Launch KPI</h2>

<table class="table table-striped">
	
<form action="add-kpi.php" method="post">
	<tr>
		<td>KPI Number</td>
		<td>Type</td>
		<td>Customer</td>
		<td>Tool</td>
		<td>External Ticket</td>
		<td>Severity</td>
	</tr>
	<tr>
		<td><input class="form-control input-sm form-control-medium" type="text" name="kpi_id" readonly></td>
		<td><select class="form-control input-sm form-control-medium">
			<option value="sr">SR</option>
			<option value="incident">Incident</option>
			<option value="change">Change</option>
		</select></td>
		<td><select class="form-control input-sm form-control-medium">
			<option value="ace">ACE</option>
			<option value="ameriprise">Ameriprise</option>
			<option value="campbell">Campbell</option>
		</select></td>
		<td><select class="form-control input-sm form-control-medium">
			<option value="monitoring">Monitoring</option>
			<option value="netcool">Netcool</option>
			<option value="tad4d">TAD4D</option>
		</select></td>
		<td>
			<input type="text" name="external_ticket" class="form-control input-sm form-control-medium">
		</td>
		<td><select class="form-control input-sm form-control-small">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		</td>
	</tr>
	<tr>
		<td colspan="2">Description</td>
		<td>Time (H)</td>
		<td># Servers</td>
		<td>Category</td>
		<td>Action</td>
		</tr>
	<tr>
		<td colspan="2"><input type="text" name="description" class="form-control input-sm form-control-large"></td>
		<td><input type="number" name="time_spent" step="0.1" class="form-control input-sm col-xs-1 form-control-small"></td>
		<td><input type="number" name="num_server" step="1" class="form-control input-sm col-xs-1 form-control-small"></td>
		<td><select class="form-control input-sm form-control-medium">
			<option value="hc">HC</option>
			<option value="monitoring">Monitoring</option>
			<option value="troubleshoot">Troubleshoot</option>
			<option value="meeting">Meeting</option>
		</select></td>
		<td><button class="btn btn-primary btn-sm" type="submit">Launch</button></td>
	</tr>
</form>

</table>

<?php
require_once("footer.php")
?>