<?php
require_once "conexao.php";
require_once "funcoes.php";
 
$produto=$_POST['produto'];

$produtos = (listarProdutos($conexao));

echo "<pre>";
print_r($produto);
echo "</pre>";

?>