<?php
//01-PDO-DAO Tudo que o PDO faz essa classe faz pois ela herda do PDO
class Dbsql extends PDO{

    private $conne;

    public function __construct(){
        $this->conne = new PDO("mysql:host=localhost;dbname=banphp7", "root","root");
    }

    public function setParams($statement, $parameters = array()){
        foreach($parameters as $chave => $valor){
            $this->setParam($statement, $chave, $valor);
        }
    }

    private function setParam($statement, $key, $value ){
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array()){
        $com = $this->conne->prepare($rawQuery);
        $this->setParams($com, $params);
        $com->execute();
        return $com;
    }

    public function select($rawQuery, $params = array()):array{
        $com = $this->query($rawQuery, $params);
        return $com->fetchAll(PDO::FETCH_ASSOC);
    }
} 

?>