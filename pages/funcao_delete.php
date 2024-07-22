<?php
 
include("../header.php");
include("fecha_conexao.php");

function delete($tabela,$coluna="*",$where=NULL,$ordem=NULL,$limite=NULL){

	$sql= "DELETE {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";

	if(connect()){

		if($query = mysqli_query(connect(),$sql)){

			if(mysqli_num_rows($query)>0){

				$resultados_totais = array();

				while($resultado = mysqli_fetch_assoc($query)){

					$resultados_totais[] = $resultado;
				}

				fechaConexao(connect());
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