<tr>
	<td>User</td>
	<td>
		<input class="form-control" type="email" name="user_mail" 
			value="<?=$kpi['user_email']?>">
	</td>
	<td>Created by</td>
	<td>
		<input class="form-control" type="text" name="user_creator" 
			value="<?= Whois() ?>" readonly>
	</td>
</tr>
<tr>
	<td>Creation Date</td>
	<td>
	<input class="form-control" type="date" name="creation_date" value="<?=$date?>" <?=$privilege?>>
	</td>
	<td>Status</td>
	<td><input class="form-control" type="boolean" name="status" value="Open" readonly> </td>
</tr>
<tr>
	<td>Type</td>
	<td><select class="form-control">
			<option value="Incident">Incident</option>
			<option value="Change">Change</option>
			<option value="SR">Service Request</option>
			<option value="HC">Health Check</option>
		</select>
	</td>
	<td>External Ticket</td>
	<td><input class="form-control" type="text" name="external_ticket" value="<?=$kpi['external_ticket']?>"> </td>
</tr>
<tr>
	<td>Severity</td>
	<td><select class="form-control">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
	</td>
	<td>Categoria</td>
	<td>
		<select name="categories_id" class="form-control">
			<?php
			#foreach($categorias as $categoria) :
				#$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
				#$selecao = $essaEhACategoria ? "selected='selected'" : "";
			?>
			

			<!--	<option value="Exemplo.<?=$categoria['id']?>" <?=$selecao?>>
					<?=$categoria['nome']?>
				</option>
			<?php
			#endforeach
			?>
		</select>  -->
		<option value="Exemplo">1</option>
		<option value="Exemplo">1</option>
	</td>
<tr>
	<td>Description</td>
	<td>
		<textarea class="form-control" name="description"><?=$kpi['description']?></textarea>
	</td>
</tr>
<tr>
	<td>Servers Quantity</td>
	<td><input class="form-control" type="number" name="num_server" step="1" value="<?=$kpi['num_server']?>"> </td>
</tr>
</tr>