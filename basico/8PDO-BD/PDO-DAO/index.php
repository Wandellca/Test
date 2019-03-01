<?php
// 01-PDO-DAO
require_once("config.php");
/*
$sql = new Dbsql();
$usuario = $sql->select("SELECT *FROM usuarios");
echo json_encode($usuario);*/

//02 PDO-DAO
$usuario = new Usuario();
$usuario->loadbyId(5);
echo $usuario;
?>