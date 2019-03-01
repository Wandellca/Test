<?php
// Classe abstrata objeto nunca irá instanciar essa classe, para utiliza lá devemos criar outra classe
// e essa irá exetender dessa classe abstrata
interface Transporte{
    public function dirigir($direcao);
    public function lotacao($quantidade);
    public function capacidade($nivelTaque);
}

abstract class Carro implements Transporte{
    public function dirigir($direcao){
        echo "O motorista virou o volante do carro para ". $direcao;
    }

    public function lotacao($quantidade){
        echo "A quantidade de passageiro dentro do ônibus é " . $quantidade;
    }

    public function capacidade($nivelTaque){
        echo "O taque do gol está " . $nivelTaque;
    }
} 
class DelRey extends Carro{
    public function empurra(){

    }
}
$car = new DelRey();
$car->dirigir("Esquerda");



?>