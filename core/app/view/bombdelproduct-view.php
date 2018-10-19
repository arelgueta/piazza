<?php

$operations = BombOperationData::getAllByProductId($_GET["id"]);

foreach ($operations as $op) {
	$op->del();
}

$product = BombProductData::getById($_GET["id"]);
$product->del();

Core::redir("./index.php?view=products");
?>
