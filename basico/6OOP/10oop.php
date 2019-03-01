<?php
//Autoload ele carrega varias classes php automaticamente é igual o require_once e o include_once 
function __autoload($nomeClass){
    // var_dump($nomeClass);
    require_once("$nomeClass.php");
}
$car = new Fusca();
$car->acelerar(150);

function incluirClass($nomeClasse){
    if(file_exists($nomeClasse . ".php") === true){
        require_once($nomeClasse . ".php");
    }
}
spl_autoload_register("incluirClass");
spl_autoload_register(function($nomeClasse){
    //Verifica se o diretorio exesite
    if(file_exists("Abstr" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){ 
        require_once("Abstr" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
});

echo "<br />Estes dados estão no mesmo diretorio <hr />Este dados estão em diretorio diferentes <br />";
$car->frenar(200);


?>