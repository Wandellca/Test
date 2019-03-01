<?php
// Conexão com a classe nativa mysqli do php7, essa classe só serve para fazer conexão com
// O banco de dados myslq
$conc = new mysqli("localhost","root","root","banphp7");
if($conc->connect_error){
    echo "ERROR: " . $conc->connect_error;
    exit;
}
/* 01
//Prepara um comando e envia lo para o banco de dados 
$com = $conc->prepare("INSERT INTO usuarios (login, senha) VALUES(?, ?)");
// O primeiro paramentro é o tipo de dado e o segundo paramentro é os dados
// O s é de string, i é de inteiro... 
$com->bind_param("ss", $login, $senha);
//Passando os dados para as variaveis 
$login = "admin";
$senha = "231";
//Executar por refencia 
$com->execute(); */
/** 02
 * Consultar os dados que está no banco de dados
 * 
*/
$resu = $conc->query("SELECT *FROM usuarios ORDER BY login");
$dados = array();
while($row = $resu->fetch_array(MYSQLI_ASSOC)){
    echo "<pre>";
    array_push($dados,$row);
    var_dump($row);
    echo "</pre>";
}
echo"Em json<br /> " . json_encode($dados);

?>