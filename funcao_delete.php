<?php
include("conexao.php");
include("fecha_conexao.php");

function delete($tabela,$coluna="*",$where=NULL,$ordem=NULL,$limite=NULL){

	$sql= "DELETE {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";

	if($conexao= connect()){

		if($query = mysql_query($sql,$conexao)){

			if(mysql_num_rows($query)>0){

				$resultados_totais = array();

				while($resultado = mysql_fetch_assoc($query)){

					$resultados_totais[] = $resultado;
				}

				fechaConexao($conexao);
				return $resultados_totais;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return false;
	}
}


?>