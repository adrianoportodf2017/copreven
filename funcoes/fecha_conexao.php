<?php

function fechaConexao($connect){
	$fecha= mysql_close($connect);
	if(!$fecha){
		echo "IMPOSSIVEL FECHAR A CONEXAO";
		return false;
	}else{
		return true;
	}
}

?>