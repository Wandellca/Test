<?php
// Conceitos de programção orientação ao objeto e como criar uma classe

// Tudo começa pela classe ela em si não importa, o que importa é o que está dentro da classe
// Uma classe é um conjuto de atributos e métodos. atributo é uma variavel com mais recursos e método é uma função com mais recurso
// Instanciar é tira uma copia ou representa algo. Objeto é uma variavel que representa uma classe ou seja tirei uma copia da classe e coloquei dentro dessa variavel
// Objeto é o que representa uma classe ex: $objeto = new Classe;
// O $this é a representação da classe já instanciada 
class Gente{                             // Criando uma classe no php
    public $nome;                        // Criando um atributo no php, atributo fora do método escreve normal 
    
    public function falar(){                      // Criando um método no php, atributo dentro do método escreve usa a variavel interna do php '$this' e nome do atributo sem o dolar 
        return" O meu nome é ".$this->nome;
    }
}

$joao = new Gente();                    // Criando um objeto, o parenteses é para o método construtor da classe 
$joao->nome = "João Carlos";            // Acessando um abributo com recurso publico da classe
echo $joao->falar();                    // Acessando um método com recurso publico da classe

?>