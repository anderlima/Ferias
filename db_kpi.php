<?php
require_once("connect_db.php");

function listUserKpi($connection) {

	$kpis = array();
#	$result = mysqli_query($connection, "select p.*,c.nome as categoria_nome from 
#			produtos as p join categorias as c on c.id=p.categoria_id");
	$result = mysqli_query($connection, "select k.id, k.creation_date, k.type, c.name as customer_name, t.name as tool_name, external_ticket from kpis as k
		join customers as c on c.code=k.customers_code join tools as t on t.id=k.tools_id");

	while($kpi = mysqli_fetch_assoc($result)) {
		array_push($kpis, $kpi);
	}

	return $kpis;
}

function insereProduto($conexao, $nome, $preco, $descricao, $usado, $categoria_id) {

	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) 
		values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";

	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $usado, $categoria_id) {

	$query = "update produtos set nome = '{$nome}', preco = {$preco}, 
		descricao = '{$descricao}', categoria_id= {$categoria_id}, 
			usado = {$usado} where id = '{$id}'";

	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {

	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$produto = mysqli_fetch_assoc($resultado);

	return $produto;
}

function removeProduto($conexao, $id) {

	$query = "delete from produtos where id = {$id}";

	return mysqli_query($conexao, $query);
}