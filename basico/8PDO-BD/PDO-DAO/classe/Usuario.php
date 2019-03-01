<?php
// 02 PDO-DAO
class Usuario{
    private $idusuario;
    private $login;
    private $senha;
    private $cadastro;

    public function getIdususario(){
        return $this->idusuario;
    }
    public function setIdususario($value){
        $this->idusuario = $value;
    }

    public function getLogin(){
        return $this->login;
    }
    public function setLogin($value){
        $this->login = $value;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($value){
        $this->senha = $value;
    }

    public function getCadastro(){
        return $this->cadastro;
    }
    public function setCadastro($value){
        $this->cadastro = $value;
    }

    public function loadById($id){
        $sql = new Dbsql();
        $results = $sql->SELECT("SELECT * FROM usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));
        if(count($results) > 0){
            $row = $results[0];

            $this->setIdususario($row['idusuario']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setCadastro(new DateTime($row['dtcadastro']));
        }
    }

    // 03 PDO-DAO
    public function getList(){
        $sql = new Dbsql();
        return $sql->SELECT("SELECT *FROM usuarios ORDER BY login;");
    }

    public static function search($login){ 
        $sql = new Dbsql();
        return $sql->SELECT("SELECT * FROM usuarios WHERE login LIKE :SEARCH ORDER BY login", array(
            ':SEARCH'=>"%". $login ."%" 
        ));
    }

    public function login($login, $password){
        $sql = new Dbsql();
        $results = $sql->SELECT("SELECT * FROM usuarios WHERE login = :LOGIN AND senha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));
        if(count($results) > 0){
            $row = $results[0];

            $this->setIdususario($row['idusuario']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setCadastro(new DateTime($row['dtcadastro']));
        } else{
            throw new Exception("Login e/ou senha invalidos");
        }
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdususario(),
            "login"=>$this->getlogin(),
            "senha"=>$this->getsenha(),
            "dtcadastro"=>$this->getcadastro()->format("d-m-Y H:i:s")
        ));
    }
}
?>