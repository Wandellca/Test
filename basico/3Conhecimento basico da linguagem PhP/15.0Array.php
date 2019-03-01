<?php
	$saFru = array("Acerola","manga","maracujá","morango");
	print_r($saFru);
	echo "<hr/>";
	$car  [0][0] = "GM";
	$car  [0][1] = "Motana";
	$car  [0][2] = "Onix";
	$car  [0][3] = "Chevente";

	$car  [1][0] = "Ford";
	$car  [1][1] = "Fiesta";
	$car  [1][2] = "Fusion";
	$car  [1][3] = "Eco Sport";
	echo $car[0][2]."<br/>";
	echo end($car[1]);
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
	print_r($pess[0]['nome']);
?>