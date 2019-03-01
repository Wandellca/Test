<?php
//classe data e tempo. A classe faz parte da orientação ao objeto
$dr = new DateTime();
echo $dr->format('l; d/m/Y H:i:s, e');

//Adicionar mais 15 dias na data 
echo '<hr />';
$rr = new DateTime();
$duracao = new DateInterval('P15D'); // add 15 dias 
echo $rr->format('l; d/m/Y H:i:s, e');
$rr->add($duracao);
echo '<br />';
echo $rr->format('d/m/Y H:i:s');
?>