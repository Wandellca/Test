<?php
// 02 PDO-DAO SELECT
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
            $this->setData($results[0]);
        }
    }

    // 03 PDO-DAO LIST
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
            $this->setData($results[0]);
        } else{
            throw new Exception("Login e/ou senha invalidos");
        }
    }


    // 04 PDO-DAO INSERT 
    public function setData($data){
        $this->setIdususario($data['idusuario']);
        $this->setLogin($data['login']);
        $this->setSenha($data['senha']);
        $this->setCadastro(new DateTime($data['dtcadastro']));
    }
    public function insert(){
        $sql = new Dbsql();
        $sql->SELECT("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->getLogin(),
            ":PASSWORD"=>$this->getSenha()
        ));
        if(count($results) > 0){
            $this->setData($results[0]);
    }
  }  
    public function __construtor($login="", $password=""){
        $this->setLogin($login);
        $this->setSenha($password);
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdususario(),
            "login"=>$this->getlogin(),
            "senha"=>$this->getsenha(),
            "dtcadastro"=>$this->getcadastro()->format("d-m-Y H:i:s")
        ));
    }

    // 05 PDO-DAO UPDATE
    public function update($login, $password){
        $this->setLogin($login);
        $this->setSenha($password);

        $sql = new Dbsql();
        $sql->query("UPDATE tb_usuario SET login =:LOGIN, senha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getlogin();
            'PASSWORD'=>$this->getsenha();
            'ID'=>$this->getIdususario();
        ));
    }
    // 06 PDO-DAO DELETE
    public function delete(){
        $sql = new Dbsql();
        $sql->query("DELETE FROM usuario WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdususario()
        ));
        $this->setIdususario(0);
        $this->setSenha("");
        $this->setLogin("");  
        $this->setCadastro(new DateTime());      
    }
}

?>