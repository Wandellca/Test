<?php
require_once("src/16.0.php");
echo session_save_path();
echo "<hr/>";
var_dump(session_status());
echo "<hr/>";
switch(session_status()){
	case PHP_SESSION_DISABLED:
	echo "As sessões estiverem desabilitadas";
	break;
	case PHP_SESSION_NONE:
	echo "As sessões estiverem habilitadas, más nenhuma existir";
	break;
	case PHP_SESSION_ACTIVE:
	echo "As sessões estiverem habilitadas, e uma existir";
	break;
}
echo "<hr/><a href='php.net/manual/pt_BR/book.session.php'> Sessão </a>";
?>