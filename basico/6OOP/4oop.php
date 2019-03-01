<?php
// Métodos mágicos, todos métodos mágicos vai comerça com dois @_no inicio do nome. Ele é o construtor da classe

class Endereco{
    private $logadouro;
    private $numero;
    private $cidade;
    private $estado;
    private $ud;
    private $pais;

    public function __construct($logad, $num, $cid, $est, $ud, $pa){
        $this->logadouro = $logad;
        $this->numero = $num;
        $this->cidade = $cid;
        $this->estado = $est;
        $this->ud = $ud;
        $this->pais = $pa;
    }
    // O destruct ele utilizado quando o objeto é removido da memoria, quando você quer desconectar do BD ou quando terminar o acesso ao um site ... ele utimo a ser excutado
    // para limpa a mémoria
    public function __destruct(){
        var_dump("DESTRUIR");

    }
    //Ainda tem 9 tipos de métodos magicos para limpa a memoria
    public function __toString(){
        return $this->logadouro . ", " . $this->numero . ", " . $this->cidade;
    }

}

$endereco = new Endereco('logadouro é o mesmo que rua','122','Naoa','Bahia','BA','Brasil');
$enderoco = new Endereco('Rua São Sebastião','12','Naoa','Bahia','BA','Brasil');
echo"<pre>";
var_dump($endereco);
echo"</pre>";
unset($endereco);//Aqui ele vai chamar o destruct
echo"<hr />" . $enderoco;
?>