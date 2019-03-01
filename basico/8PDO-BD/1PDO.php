<?php
// O tipo de banco, local do  banco admin e senha
$conc = new PDO("mysql:dbname=banphp7;host=localhost","root","root");

$comd = $conc->prepare("SELECT *FROM usuarios ORDER BY login");

$comd->execute();

$result = $comd->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
foreach($result as $row){
    foreach($row as $key => $value){
        echo"<strong>" . $key . ": </strong>" . $value . "<br />" ;
    }
    echo"==========================================<br />";
}
PRINT_R($result);
// echo 'Versão: ' . phpversion() . "<br /> V: " . phpinfo();
?>