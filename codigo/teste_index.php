<?php

require_once "conexao.php";
require_once "funcoes.php";

$idcliente = $_GET['idcliente'];
$valor_total = $_GET['valor_total'];
$data = $_GET['data'];
$produto = $_GET['produto'];
//$quatidade = $_GET['quantidade'];

echo $idcliente;
//echo $valor_total;
//echo $data;
echo "<pre>";
print_r($produto);
echo "</pre>";
//echo $quantidade;

echo "<pre>";
print_r($data);
echo "</pre>";

echo "<pre>";
print_r($valor_total);
echo "</pre>"


?>