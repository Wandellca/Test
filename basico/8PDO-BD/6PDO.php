<?php  
//Usando Transações com PDO
$con = new PDO("mysql:host=localhost;dbname=banphp7", "root","root");
// Pepara para fazer uma transação
$con->beginTransaction();
//Pode utilizar o ? no lugar do :VaRIAVEL  e passa-lo no array a variavel 
// $comde = $con->prepare("DELETE FROM usuarios WHERE idusuario = ?");

$comde = $con->prepare("DELETE FROM usuarios WHERE idusuario = :ID");
$id= 4;
$comde->bindParam(":ID", $id);
$comde->execute();
// $comde->execute(array($id));

print_r($comde);  
/*Comando para cancelar a transação
$con->rollback();
Comando para confimar a transação*/
$con->commit();
echo"ok deletado";
?>