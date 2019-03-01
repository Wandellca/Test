<?php
// Inserido dados 
$con = new PDO("mysql:host=localhost;dbname=banphp7", "root", "root");
$comin = $con->prepare("INSERT INTO usuarios (login, senha) VALUES(:LOGIN, :SENHA)");

$login = "João";
$senha = "123";

//O bindParam faz a ligação com cada paramentro 
$comin->bindParam(":LOGIN", $login);
$comin->bindParam(":SENHA", $senha);

$comin->execute();
echo "Inserido OK!";
?>