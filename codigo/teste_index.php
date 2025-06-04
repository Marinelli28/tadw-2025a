<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idcliente = $_GEt['idcliente'];
$valor_total = $_GET['valor_total'];
$data_compra = $_GET['data_compra'];
$idproduto = $_GET['idproduto'];
$quatidade = $_GET['quantidade'];

echo "idcliente: $idcliente";
echo "<br>valor: $valor_total";
echo "<br>data compra: $data_compra";
echo "<br>idproduto";
print_r($idproduto);
echo "<br>quantidade: $quantidade";


?>