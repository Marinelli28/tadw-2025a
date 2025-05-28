<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$nome="teste";
$tipo="coida";
$preco_compra="11";
$preco_venda="10";
$margem_lucro="12";
$quantidade="14";

salvarProduto($conexao, $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);

?>