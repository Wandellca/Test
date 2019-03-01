<?php

$nome = "Codigo";
$cont = " descompilado";
echo $nome . $cont. "<br/>";
var_dump($nome,$cont);
echo '<br/>ACD $nome<hr/>';
$nm = "ola mundo de hoje";
echo strtoupper($nm);
$nms = strtolower($nm);
echo"<br/>";
echo strtolower($nms);
echo"<br/>";
echo ucfirst($nms);
echo"<br/>";
echo ucwords($nms);
echo"<hr/><hr/>";
$empresa = "CodLocal";
$empresa = str_replace("o","0", $empresa);
$empresa = str_replace("l","7",$empresa);
echo $empresa."<br/>";
$frase = "A repitação mais a prática leva a perfeição";
$palavra = "leva";
$q = strpos($frase, "leva");
$texto = substr($frase, 0, $q);
var_dump($q, $texto);
$text = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br/>";
var_dump($text);


?>