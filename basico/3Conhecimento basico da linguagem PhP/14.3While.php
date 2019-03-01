<?php
/*Bastente utilizando para banco de dados, e devemos utilizar um contador se for mexo com números com ele 
O for tenho valor inicial, valor final e incremento.
foreach é utilizando para array e coleções, while pode ser utilizado para qualquer assunto.**/
$c = true;
while ($c) {
	$n = rand(1, 12);
	if($n === 3){
        echo " TRÊS !!!! ";
        $c = false;
	}
    echo $n . " ";
}
echo"<hr/>";
#Testa a condição pelo menos uma vez
$t = 200; $d = 0.9;
do{
	$t *= $d;
}while ($t > 150);
echo $t;
?>