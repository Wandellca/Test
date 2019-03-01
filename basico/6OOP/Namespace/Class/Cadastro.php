<?php
class Cadastro{
    
    private $nome;
    private $email;
    private $senha;

    public function getNome():string{
        return $this->nome;
    }
    public function setNome($name){
        $this->nome = $name;
    }

    public function getEmail():string{
        return $this->email;
    }
    public function setEmail($emai){
        $this->email = $emai;
    }

    public function getSenha():string{
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function __toString(){
        return json_encode(array(   
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }
 }
?>