<?php

$sell = BombSellData::getById($_GET["id"]);
$operations = BombOperationData::getAllProductsBySellId($_GET["id"]);

foreach ($operations as $op) {
	$op->del();
}

$sell->del();
Core::redir("./index.php?view=bombsells");

?>
