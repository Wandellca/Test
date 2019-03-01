<?php
//Faz parte do 10oop.php autoload
interface Veiculo{
    public function acelerar($veloci);
    public function frenar($veloci);
    public function trocarMarcha($macha);
}
abstract class Automovel implements Veiculo{
    public function acelerar($veloci){
        echo"O veiculo acelerou até " . $veloci . " km/h";
    }

    public function frenar($veloci){
        echo"O veiculo frenou até " .$veloci . " km/h";
    }
    public function trocarMarcha($marcha){
        echo"O veiculo engatou a marcha " . $marcha;
    }
}

?>