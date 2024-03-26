<?php

function fechaConexao($connect){
	$fecha= mysqli_close($connect);
	if(!$fecha){
		echo "IMPOSSIVEL FECHAR A CONEXAO";
		return false;
	}else{
		return true;
	}
}

?>