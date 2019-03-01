<?php
//Atualizado dados no bd
$con = new PDO("mysql:host=localhost;dbname=banphp7", "root", "root" );

$comup = $con->prepare("UPDATE usuarios SET login = :LOGIN, senha = :SENHA WHERE idusuario = :ID");

$login = "Maria";
$senha = "321";
$id = 5;
//Desta forma é mais seguro contra a injeção de dados
$comup->bindParam(":LOGIN", $login);
$comup->bindParam(":SENHA", $senha);
$comup->bindParam(":ID", $id);

$comup->execute();
echo"Ok alterado";
?> 