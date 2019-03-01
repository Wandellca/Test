<?php
session_id('j4s67e30m0m6cdsu4g5h9e0u7k');
require_once("src/16.0.php");
# Gera um id fixo para a sessão mesmo se atualizar o id não modifica
#echo session_id();

#Gerar um novo  id a cada nova atualização do navegador
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
?>
