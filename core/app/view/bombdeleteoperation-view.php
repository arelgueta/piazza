<?php

print_r($_GET);

$operation = BombOperationData::getById($_GET["opid"]);
$operation->del();

print "<script>window.location='index.php?view=$_GET[ref]&product_id=$_GET[pid]';</script>";

?>
