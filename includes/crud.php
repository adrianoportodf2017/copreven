<?php



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
                fechaConexao(connect());

                return false;
            }
        } else {
            fechaConexao(connect());

            return false;
        }
    } else {
        fechaConexao(connect());

        return false;
    }
}


function update($tabela, $valores, $where) {
    // Monta a parte da query com os valores a serem atualizados
    $valores_sql = '';
    foreach ($valores as $coluna => $valor) {
        $valores_sql .= "$coluna = '$valor', ";
    }
    $valores_sql = rtrim($valores_sql, ', '); // Remove a última vírgula e espaço

    // Monta a parte da query com a condição WHERE
    $where_sql = '';
    if (!is_null($where)) {
        $where_sql = "WHERE $where";
    }

    // Monta a consulta SQL completa
    $sql = "UPDATE $tabela SET $valores_sql $where_sql";

    // Executa a consulta
    if (connect()) {
        if ($query = mysqli_query(connect(), $sql)) {
            // Retorna verdadeiro se a consulta foi bem sucedida
            fechaConexao(connect());
            return true;
        } else {
            fechaConexao(connect());

            // Retorna falso se a consulta falhou
            return false;
        }
    } else {
        fechaConexao(connect());

        // Retorna falso se a conexão com o banco de dados falhou
        return false;
    }
}

