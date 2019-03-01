<?php
function ola(){
# Está retornado a string e não mostra na tela   
return "Olá!<br/>";	
# O return ele joga a variavel no lugar que o desevevolvedor quer
}
#Chamado a função
echo ola();
$frase = ola();
# Mostra o tamanho da string
echo strlen($frase);
function salario(){
	return 946.00;
}
echo "<hr/>José recebeu trêz salários minimos " . (salario() *3);
?>