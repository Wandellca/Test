<?php
//Declaração de tipo esclares
function conta(int ...$valor){
    return array_sum($valor);

}
echo var_dump(conta(2, 3)) ."<br />" .conta(3, 25)."<br />".conta(9.862, 10);

//Tipo de retorno, coloque o tipo na frente dos parenteses da função
echo "<hr />";
function conta2(int ...$valor):string {
    return array_sum($valor);

}
echo var_dump(conta2(2, 3)) ."<br />" .conta2(3, 25)."<br />".conta2(9.862, 10);

echo "<hr />";
function conta3(float ...$valor):float {
    return array_sum($valor);

}
echo var_dump(conta3(2, 3)) ."<br />" .conta3(3, 25)."<br />".conta3(9.862, 10);

?>