<?php
//Paramentro por valor
 $a = 10; 
 //O que ocorre dentro da função, fica dentro da função
 function trocaValor(&$a){
 	$a = 50;
 	return $a;
 }

 echo "Esse valor está fora da função ". $a . "<br />E esse valor está sendo chamado de dentro da função " . trocaValor($a);

//Paramentro  por refencia
$f = 10;
function troca(&$e){
	$e += 50;
	return $e;

}
echo"<hr />" . troca($f);
echo"<br />" . $f;
echo"<br />" . troca($f);
echo"<br />"  . $f;

$gente = array(
	'nome'=>'José',
	'idade'=>35
);

echo"<hr />";
foreach($gente as &$value){
	//retorno o tipo de dado da variavel
	if(gettype($value) === 'integer') $value +=10;
	echo $value.'<br />';
}
echo "<pre>";
	print_r($gente);
echo "</pre>";
?>