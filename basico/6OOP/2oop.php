<?php
//Atributos e Métodos

class Carro{                                //Criando uma classe carro
    private $nome;                           //Criando atributos com o recurso privado
    private $modelo;
    private $motor;
    private $ano;

    public function getNome(){             //Criando método get ele pega o valor do atributo ele aumenta o controle, 
        return $this->nome;                //pelo padrão o método começa com letra minuscula e outros nomes comerça com letra maiuscula ex: setNome
    }
    public function setNome($nome){     //Esse método ele modifica o valor dos atributos 
                                        //Esse paramentro que está sendo passando é outra variavel ela não tem nada vê com o atributo poderia te colocado $value no lugar
        $this->nome = $nome;            //Essa variavel só vai ser igual ao atributo apartir dessa linha 
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor():float{
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getAno():int{
        return $this->ano;
    }
    public function setAno($ano){   //O return ele é só vai ter quando vou devolver para ser exibindo
        $this->ano = $ano;
    }

    public function exibeInf(){ //Criaando um método para exibir as infro do carro
        return array(
            "modelo"=>$this->getModelo(),
            "nome"=>$this->getNome(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$car = new Carro();
$car->setNome("Gol");
$car->setModelo("GT");
$car->setMotor("1.6");
$car->setAno("2000");
echo"<pre>";
var_dump($car->exibeInf());
echo"</pre>";
?>