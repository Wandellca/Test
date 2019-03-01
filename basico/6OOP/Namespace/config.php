<?php
//Namespace ele ajuda organizar as classes e pastas com nomes iguais ou diferentes
spl_autoload_register(function($nameClass){
    echo"<pre>"; 
    var_dump($nameClass);
    echo"</pre>"; 
    $camCla = "Class";
    $pastnom = $camCla . DIRECTORY_SEPARATOR . $nameClass . ".php";
    
    if(file_exists($pastnom)){
        require_once($pastnom);

    }
 });

?>