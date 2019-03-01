<?php
	$meses = array(
	   "Janeiro","Fevereiro","Março",
	    "Abril","Maio","Junho",
		"Julho","Agosto","Setembro",
		"Outubro","Novembro","Dezembro"
	);
	foreach($meses as $index => $mes){
		echo"Indice ". $index . "<br/>";
		echo"O mês é; ". $mes . "<hr/>";
	}
?>
<form>
	<input type="text" name="nome">
	<input type="text" name="nascimento">
	<input type="submit" name="Ok">
</form>
<?php
	if(isset($_GET)){
		foreach($_GET as $key => $value){
			echo"Nome do campo: " . $key."<br/>";
			echo"Valor do campo: " . $value;
			echo"<hr/>";
		}
	}
?>
