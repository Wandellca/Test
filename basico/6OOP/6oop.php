<?php
//Herança é quando uma classe herda métodos e atributos da classe pai
// Abstração na oop, é tão generico posso fazer uma classe, que pode ser utilizada em varios lugares
class Documento{
    private $numero;
    
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($num){
        $this->numero = $num;
    }
}

class CPF extends Documento{
    public function validar():bool{
        $numCPF = $this->getNumero(); 
        //Validação do CPF
        return true;
    }
}

$docum = new CPF();
$docum->setNumero("123245367-38");
var_dump($docum->validar());
echo"<br />";
echo $docum->getNumero();
?>
