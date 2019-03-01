<?php
#Escopo de Variavel seria até onde sua variável será exegando ou até onde vai o seu ambiente
   $nome = "Otavio";
   function teste(){
 // PARA UTILIAZAR A VARIAVEL QUE ESTÁ FORA DA FUNÇÃO DEVEMOS UTILIZAR O global faz que o codigo enteda que é o mesma variavel  ...      
   	global $nome; 
   	echo $nome;
   }
 	function teste2(){
 		$nome = "Carlos";
 		echo "<br/>$nome faz parte da segunda função";

 	}
 #Chamndo a função teste e teste2
   teste();
   teste2();

?>