<?php
//Funções anônimas
function tes($callback){

    //Processo lento, isso ajudar em processo lentos assim evita que o pc retorne tempo de exercução excedindo  
    $callback();
}
tes(function(){
    echo"Terminou!!!";
});

echo"<hr />";
$tr = function($s){
    echo'<pre>';
    var_dump($s);
    echo'</pre>';
};
$tr("Olá mundo");
?>