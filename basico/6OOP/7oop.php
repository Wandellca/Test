<?php
//Interface, ela ajuda na organização, padronisação do codigo e n a documentação*
interface Veiculo{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}
class Fusca implements Veiculo{
    public function acelerar($velocidade){
        echo "O veículo acelerou até " . $velocidade . " Km/h";
    }

    public function freiar($velocidade){
        echo "O veículo freiou até " . $velocidade . "Km/h";
    }

    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha " . $marcha;
    }
}
$car = new Fusca();
$car->trocarMarcha(1);
?>