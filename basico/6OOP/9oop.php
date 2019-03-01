<?php
//Polimorfismo significa ter muitas formas 
abstract class Animal{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Miar";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "Voa e " . parent::mover(); //Aqui está fazendo o polimorfismo
    }
}

$pluto = new Cachorro();
$garfield = new Gato();
$donald = new Passaro();
echo $pluto->falar() . "<br />";
echo $pluto->mover() . "<br />";
echo "---------------------- <br />";
echo $garfield->falar() . "<br />";
echo $pluto->mover() . "<br />";
echo "---------------------- <br />";
echo $donald->falar() . "<br />";
echo $donald->mover() . "<br />";
?>