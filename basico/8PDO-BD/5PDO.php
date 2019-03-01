<?php 
//Deletando dados do BD
$con = new PDO("mysql:host=localhost;dbname=banphp7", "root","root" );

$comde = $con->prepare("DELETE FROM usuarios WHERE idusuario = :ID");

$id = 7;

$comde->bindParam(":ID", $id);

$comde->execute();

echo"Ok deletado";
?>