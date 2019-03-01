<?php 
#Super globais 
	$nome = $_GET["A"];
#Forçando a tipargem 	
	$noe = (int)$_GET["w"];
	var_dump($nome);

	var_dump($noe);
#Pegar o id do úsuario e do ambiente com a super global 
	$ip = $_SERVER["REMOTE_ADDR"];
#Estou pegando o ip do local host ou seja eu não tenho um ip dando pela a rede 	
	echo "<br/> $ip <br/>";
 #Um EX: EU TENHO CLIENTES E TNHO UMA PAGINA DE LOG EU QUERO SABER COM QUE PÁGINA, HORA, IP ... QUE ELES ESTÃO ENTRADO NA MINHA PÁGINA 
 	$ip1 = $_SERVER["SCRIPT_NAME"];
 	echo $ip1;

?>