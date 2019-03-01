<?php
//Definido a conf regional com setlocale
$te = setlocale(LC_ALL,'pt_BR', 'pt_BR.utf-8', 'portuguese');
echo ucwords(strftime('%A %B'));


?>