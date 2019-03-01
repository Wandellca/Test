<?php
// 01-PDO-DAO
require_once("config.php");

$sql = new Dbsql();
$usuario = $sql->select("SELECT *FROM usuarios");
echo json_encode($usuario);
?>