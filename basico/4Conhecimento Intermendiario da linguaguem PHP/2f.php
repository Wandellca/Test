<?php
function ola($texto = "mundo", $periodo = "Bom dia"){
	return "Olá $texto!  $periodo<hr/>";
}
#Pega como padrão o mundo que está dentro do parâmentro
echo ola();
echo ola("");
echo ola("Brasil","Boa Tarde!");
echo ola("Minas Gerais","Boa Noite!!");
echo ola("João","");
function ol(){
	$argumentos = func_get_args();
	return $argumentos;
}
#Parecido como uma sobrecarga
var_dump(ol("Bom Dia"));
?>