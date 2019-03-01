<?php
# operador atribuição e concartenação
	$nome = "Hcod";
	echo $nome . " mais uma string<br/>";
# operador composto
	$nome .= " Essa é a string<br/>";	
	echo $nome;
# Operador += e -=
    $valorTotal = 0;
    $valorTotal += 100; 
    $valorTotal += 25;
    echo "Sem desconto $valorTotal <br/> Com desconto ";
    $valorTotal -= 10;
 # Por centagem *= . o valor  
    $valorTotal *= .9;
    echo $valorTotal;
 # Operador aritimetrico 
    $d = 10;$w = 2;
    $r = $d + $w;
    $rm = $d - $w;
    echo "<br/>Soma  $r  <br/> Subtração $rm <br/> Multiplicação ". $d * $w  . "<br/> Divisão ". $d / $w  . "<br/> Modulo ".$d % $w  . "<br/> Expoenciação " . $d ** $w  . "<br/>";
 # Operador de comparaçãp
     $a = 30; $b = 55;   
     var_dump($a > $b);
     echo "<br/>";
     var_dump($a < $b);
     echo "<br/>";
     var_dump($a == $b);
     echo "<br/>";
     var_dump($a === $b);
     echo"<br/>";
     var_dump($a != $b);
     echo"<br/>";
     var_dump($a !== $b);
     echo"<br/>";
# do php 7 Operador spaceshit*
    $w = 50;$s = 560;
    var_dump($w <=> $s);
    echo"<br/>";     

# operador de nulo também é do php7
    $y = null; $t = null; $z = 10;
    echo $y ?? $t ?? $z;    
# operador incrementais e descrementais
   $a = 10;$b = 8;
   echo "<br>".$a++;
   echo "<br/>"; echo $a."<br/>";
   echo $b--;
   echo "<br/>".$b."<br/>";
# Aritmetrica de mat   
   $resultado = 10 + 3 / 2;
   echo "<hr/>".$resultado;
   $resultado = (10 + 3)/ 2;
   echo"<br/>". $resultado."<br/>";
#
   $resultado = (10 + 3)/ 2 > 5 && 10 +5 < 3 ;
   var_dump($resultado); 
   echo"<br/>";
   $resultado = (10 + 3)/ 2 > 5 || 10 +5 < 3 ;
   var_dump($resultado); 
   echo "<hr/><a href ='http://php.net/manual/pt_BR/language.operators.php'>clique</a>";
?>