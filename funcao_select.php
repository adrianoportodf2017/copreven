<?php
include("conexao.php");
include("fecha_conexao.php");

function select($tabela, $coluna = "*", $where = NULL, $ordem = NULL, $limite = NULL) {
    $sql = "SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";

    if (connect()) {
        if ($query = mysqli_query(connect(), $sql)) {
            if (mysqli_num_rows($query) > 0) {
                $resultados_totais = array();

                while ($resultado = mysqli_fetch_assoc($query)) {
                    $resultados_totais[] = $resultado;
                }

                fechaConexao(connect());
                return $resultados_totais;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>
