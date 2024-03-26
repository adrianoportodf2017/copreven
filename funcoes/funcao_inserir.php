<?php
include("conexao.php");
include("fecha_conexao.php");

function inserir($coluna,$valor,$tabela){

	//ARRAY?
	if((is_array($coluna)) and (is_array($valor))){

		//TEM O MESMO NUMERO DE ELEMENTOS?
		if(count($coluna) == count($valor)){

			//MONTAR A SQL!!!
			$inserir = "INSERT INTO {$tabela} (".implode(', ',$coluna).")
			VALUES ('".implode('\', \'',$valor)."')";
		}else{
			return false;
		}
	}else{
		//MONTAR SQL
		$inserir ="INSERT INTO {$tabela} ({$coluna}) VALUES ('{$valor}')";
	}
	// CONECTOU ?
	if($conexao = connect()){

		// INSERIU ?
		if(mysqli_query(connect(), $inserir)){
			// FECHA A CONEXÃO
			fechaConexao($conexao);
			return true;
		}else{
			echo "QUERY INVALIDA";
			return false;
		}
	}else{
		return false;
	}
}

?>