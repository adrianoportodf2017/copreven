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
                return false;
            }
        } else {
            return false;
        }
    } else {
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
            // Retorna falso se a consulta falhou
            return false;
        }
    } else {
        // Retorna falso se a conexão com o banco de dados falhou
        return false;
    }
}

function listar_atendimento_salas($consulta, $coluna ){ ?>

<div class="panel-body">
              <h4>Aguardando Atendimento</h4><br>
              <a href="<?= $base_url ?>/pages/salas.php" class="btn btn-primary" style="text-decoration: none; font-weight: bold;">
    <i class="bi bi-arrow-left"></i>Voltar para Salas
</a>
<hr>

              <?php

              if ($consulta == true) {
                for ($i = 0; $i < count($consulta); $i++) {
              ?>

                  <ul class="list-group">
                    <li class="list-group-item">
                      <button class="btn btn-outline-primary bg-gray" onclick="confirmar_atendimento('<?php echo $consulta[$i]['id'] ?>', '<?= $coluna ?>')">
                        <span class="text-dark">CONFIRMAR ATENDIMENTO</span>
                      </button>
                      <?php if ($consulta[$i]['status'] == '1') { ?>
                        <button class="btn btn-danger">
                          <span class="text-light">EM ATENDIMENTO</span>
                        </button> <br>
                      <?php } else { ?>
                        <button class="btn btn-success" onclick="status_atendimento('<?php echo $consulta[$i]['id'] ?>', 1)">
                          <span class="text-light">ATENDER PACIENTE</span>
                        </button>
                      <?php  } ?><br>
                      <?php echo $consulta[$i]['id'] ?> |
                      <?php echo $consulta[$i]['nome'] ?><br>
                      <?php echo $consulta[$i]['tipo'] ?> |
                      Convênio: <?php echo $consulta[$i]['convenio'] ?> <br>
                      Empresa: <?php echo $consulta[$i]['empresa'] ?> <br>
                      Nasc: <?php echo $consulta[$i]['nascimento'] ?> |
                      Doc: <?php echo $consulta[$i]['rg'] ?> |
                      Função: <?php echo $consulta[$i]['cargo'] ?>
                    </li>
                  </ul>

              <?php
                }
              } else {
                echo "Nenhum dado encontrado!";
              }
              ?>
            </div>


<?php }?>
