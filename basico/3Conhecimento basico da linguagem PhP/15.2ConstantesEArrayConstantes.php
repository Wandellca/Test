<?php
define("SERVIDOR", "127.0.0.1");
define("BANCO_DE_DADOS", [
   '127.0.0.1',
   'root',
   'password',
   'test'#,true
]);
echo SERVIDOR . "<hr/>";
print_r(BANCO_DE_DADOS);
echo "<hr/> Versão do php sendo utilizado  ";
echo PHP_VERSION;
echo "<br/> Esse seria o separador do windows  ";
echo DIRECTORY_SEPARATOR;
echo "<hr/> <a href ='https://secure.php.net/manual/pt_BR/reserved.constants.php'><strog>Constantes Pré-definidas</strog></a>";
?>