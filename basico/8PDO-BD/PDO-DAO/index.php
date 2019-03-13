<!-- author: Wandell R.C -->
<?php
// 01-PDO-DAO 
require_once("config.php");
/*
$sql = new Dbsql();
$usuario = $sql->select("SELECT *FROM usuarios");
echo json_encode($usuario);

//02 PDO-DAO SELECT carrega um usuario
$usuario = new Usuario();
$usuario->loadbyId(5);
echo $usuario .'<hr />';

// 03 PDO-DAO LIST carrega uma lista de usuario 
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
*/

/*
// 04 PDO-DAO INSERT
$aluno = new Usuario();
$aluno->setLogin('aluno');
$aluno->setSenha('@lun0');
$aluno->insert();
echo $aluno;
*/

/*
// 05 PDO-DAO UPDATE
$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->update("dev","#@$%");
echo $usuario;
*/

// 06 PDO-DAO DELETE
$user = new Usuario();
$user->loadbyId(1);
$user->delete();
echo $user;

?>