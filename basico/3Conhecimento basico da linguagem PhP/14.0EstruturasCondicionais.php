<?php

   $qualASuaIdade = 37;
   $idadeCrianca = 12;
   $idadeMaior = 19;
   $idadeMelhor = 65;
   if($qualASuaIdade < $idadeCrianca){
   		echo"Criança<br/>";
   }else if($qualASuaIdade < $idadeMaior){
   	    echo"Adolecente<br/>";
   }elseif($qualASuaIdade < $idadeMelhor){
        echo"Adulto<br/>";
   }else {
   	    echo"Idoso<br/>";
   }
 # Operador têrnario 
   echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade ":"Maior de Idade.";
   
?>