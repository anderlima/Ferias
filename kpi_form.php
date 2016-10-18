<?php
require_once("header.php");
#require_once("db_lookup.php");
require_once("user_logic.php");

checkUser();

date_default_timezone_set('America/Sao_Paulo');
$date = date("d/m/Y H:i:s ", time());

$kpi = array("user_email" => "", "user_creator" => "", "creation_date" => "",
	"closure_date" => "", "time-spent" => "", "description" => "");

$privilege = $_SESSION['analista'] ? "readonly" : "";


#$tools = listTools($connection);
#$severity = listSLAs($connection);
#$categories = listCategories($connection);
#$customers = listCustomers($connection);

?>	

<h1>Create KPI</h1>
<form action="add-kpi.php" method="post">
	<table class="table">
		
		<?php include("kpi-form-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Create</button>
			</td>
		</tr>
	</table>
</form>

<?php include("footer.php"); ?>