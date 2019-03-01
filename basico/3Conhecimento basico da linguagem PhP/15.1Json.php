<?php
$saFru = array("Acerola","manga","maracujá","morango");
	echo json_encode($saFru);
	echo "<hr/>";
	$car  [0][0] = "GM";
	$car  [0][1] = "Motana";
	$car  [0][2] = "Onix";
	$car  [0][3] = "Chevente";

	$car  [1][0] = "Ford";
	$car  [1][1] = "Fiesta";
	$car  [1][2] = "Fusion";
	$car  [1][3] = "Eco Sport";
	echo json_encode($car[0][2]."<br/>");
	echo json_encode(end($car[1]));
	echo "<hr/>";
	$pess = array();
	array_push($pess, array(    
	    'nome'=>'João',
		'idade'=>45
	));

	array_push($pess, array(
		'nome'=>'Glaucio',
		'idade'=>25
		
	));
# esperando um array para codificar ele, é convetido como objeto 	
	echo json_encode($pess);
	echo"<hr/>JSON<br/>";
#Esse é o formato do json	
	$js = '[{"nome":"Jo\u00e3o","idade":45},{"nome":"Glaucio","idade":25}]';
	$da = json_decode($js,true);
    var_dump($da);
    var_dump("<br/> Ele fica como objeto;  ".$js)
?>