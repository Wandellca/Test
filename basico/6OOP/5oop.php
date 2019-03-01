<?php
//Encapsulamento, ele serve par proteger e quem pode ve-lo
class Gente{
    public $nome = "José Sebastião Da Silva Do Norte"; // Qualquer um tem acesso
    protected $idade = 25; //Só a propria classe e seus filhos tem acesso
    private $senha = "13246"; //Só a propria classe tem acesso

    public function verInfro(){
        echo $this->nome . "<br />";
        echo $this->idade . "<br />";
        echo $this->senha . "<br />";

    }
} 
$gente = new Gente();
echo $gente->verInfro();
// echo $gente->nome;
// echo $gente->idade;
// echo $gente->senha;
class Professor extends Gente{
    
    public function verInfro(){
        echo get_class($this) . "<br />"; //Mostra a classe que está sendo instanciada
        echo $this->nome . "<br />";
        echo $this->idade . "<br />";
        echo $this->senha . "<br />";

    }
}
$prof = new professor();
$prof->verInfro();

?>