<?php
// O tipo de banco, local do  banco admin e senha 
$con = new PDO("sqlsrv:Database=banphp7;server=localhost\COMPUTERNAME;ConnectionPooling=0", "sa", "root"); //Erro na conexão

$comd = $con->prepare("SELECT *FROM usuarios ORDER BY login");

$comd->execute();

$result = $comd->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
?>