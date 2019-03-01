<!-- author: Wandell R.C -->
<?php
// 01-PDO-DAO
require_once("config.php");
/*
$sql = new Dbsql();
$usuario = $sql->select("SELECT *FROM usuarios");
echo json_encode($usuario);*/

//02 PDO-DAO carrega um usuario
$usuario = new Usuario();
$usuario->loadbyId(5);
echo $usuario .'<hr />';

// 03 PDO-DAO carrega uma lista de usuario 
$lista = Usuario::getList();
echo json_encode($lista) . '<hr />';;

// Carrega de usuario buscado pelo login
$search = Usuario::search("ad");
echo json_encode($search) .'<hr />';

// Carrega um usuario usando login e senha 
$user = new Usuario();
$user->login("admin","231"); 
echo  $user . "<br />";
$user->login("admin","21");
echo $user; 
?>