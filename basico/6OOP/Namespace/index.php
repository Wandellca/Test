<?php
require_once("config.php");
use Usuario\Cadastro; //Utilizado a classe Cadastro dentro da pasta usuario
$cada = new Cadastro(); 

$cada->setNome("Dj");
$cada->setEmail("Djnarea@.com");
$cada->setSenha("123");
echo $cada; //Objeto está preparado para virar texto por causa do toString
$cada->registrarV(); 
?>