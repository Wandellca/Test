<?php
//Métodos estaticos

class Documento{

    private $num;

    public  function getNum(){
        return $this->num;
    }
    public function setNum($num){
        $resul = Documento::valiCpf($num);    //O -> serve para acessar métodos normais e o :: métodos estaticos
        if($resul === false){
            throw new Exception("CPF informado é invalido", 1);

        }
        $this->num = $num;
    }

    public static function valiCpf($cpf):bool{

        if(empty($cpf)) {       //Verifica se o número foi informado 
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;  //Elimina possivel mascara 
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT); 
         
        
        if (strlen($cpf) != 11) { //Verifica se o número de digitos informado é igual a 11 
            echo "length";
            return false;
        }
        //Verifica se nenhuma das sequências invalidas abaixo foi digitada. Caso afirmativo, retorne falso

        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
        // Calcular os digitos verificados para verificar se o
        // CPF é valido
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}

$cpf = new Documento();
$cpf->setNum("97907408083");
var_dump($cpf->getNum());

echo"<b> instaciando a classe <br />Sem instanciar a classe </b>";
var_dump(Documento::valiCpf("31878219600"));


?>