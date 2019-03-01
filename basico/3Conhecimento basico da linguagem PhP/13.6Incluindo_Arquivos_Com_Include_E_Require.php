<?php
#(Chamar) Trazendo uma função externa do codigo
include"./src/exemplo.php";
include_once"./src/exemplo.php"; 
# É com o include copiasse o cod do diretório
$resultado = somar(10,20);
echo $resultado." O include se arquivo não existir ele vai rodar do mesmo jeito"; 
# . é subir e / é descer
echo "<br/><hr/>";
# TIVE QUE MUDAR O NOME DA FUNÇÃO  
require"./src/exem.php";
#O require_once traz apenas uma vez o chamdo de for duplicado ele evita isso
require_once"./src/exem.php";
$resultado = soma(10,20);
echo $resultado . " O require obrigar o arquivo existir senão tiver o codigo para de funcionar ";
?>