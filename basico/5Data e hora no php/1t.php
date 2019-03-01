<?php
//Função de data e hora
echo date('d/m/Y H:i:s:e');
echo'<br />'. time('').'<hr />';
$rf = strtotime('1995-02-25');
echo date('l, d/m/Y H:i:s', $rf);
?>