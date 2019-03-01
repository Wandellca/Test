<?php 
// Isso é uma boa pratica de programção de como podemos criar uma varavel 
$anoNascimento = "21/05/1900";
$nomeCompleto = "José da Silva De Castro";
$_nome = "João";
# php documnt.org tem documentos para programção php
echo $_nome."<br/>";
# Para limpa a variavel para utiliza la de novo com outra  atribuição 
unset($_nome);
# Para tira a messagem de erro da tela
if(isset($_nome)){
	echo $_nome;
}
#Para concatenar variavel utiliza o ponto
$Completo = $nomeCompleto ." e seu nascimento foi em; ".$anoNascimento;
echo "<br/>".$Completo;
#O exit interroper a execução do codigo 
echo "<br/>O exit ele serve para sair da execução do programa <br/>";
//exit; $_nome; 
/* Conhecendo os tipos de variaveis
Primitivos
String */
$nome = "Solf"; 
$site = "ww.google.com";
# int, double ou float
$ano = 1900;
$salario = 5500.40;
# Boolean
$bloqueado = false;
#Compostos
#Array
$fruta = array("Abacaxi","Maça","Laranja","Manga  "); 
echo $fruta[3];
#Objeto o "new" faz parte do orientação objeto 
$nascimento = new DateTime();
var_dump($nascimento);
echo " <br/>";
#Esperciais
#Serve para lê arquivo no disco rigido 
$arquivo = fopen("13.0Utilizando_Variaveis_PHP.php", "r");
var_dump($arquivo);
echo "<br/>";
#nulo
$nulo = NULL;// Nulo é ausencia de valor, não existe
$vazio ="";//Vazio ele foi iniciando só não tem informação

?>