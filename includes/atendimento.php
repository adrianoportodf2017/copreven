<?php

function listar_atendimento_salas($consulta, $consultorio)
{
  $url_atualizar_consultar = base_url() . '/functions/atualizar_consultas.php?consultorio=' . $consultorio;
?>
  <input type="hidden" value="<?= $url_atualizar_consultar ?>" id="url_refresh_atendimento">

  <div class="panel-body">
    <h4>Aguardando Atendimento</h4><br>
    <a href="<?= base_url() ?>/pages/salas.php" class="btn btn-primary" style="text-decoration: none; font-weight: bold;">
      <i class="bi bi-arrow-left"></i>Voltar para Salas
    </a>
    <hr>

    <div id="painel_de_atendimento">
      <?php

      if ($consulta == true) {
        for ($i = 0; $i < count($consulta); $i++) {
      ?>

          <ul class="list-group">
            <li class="list-group-item">

              <div class="btn-group">
                <?php if ($consulta[$i]['status'] == '1' && $consulta[$i]['consultorio_atendimento'] == $consultorio) { ?>
                  <button class="btn btn-outline-primary bg-gray" onclick="confirmar_atendimento('<?php echo $consulta[$i]['id'] ?>', '<?= $consultorio ?>')">
                    <span class="text-dark">CONFIRMAR ATENDIMENTO</span>
                  </button>
                <?php }
                if ($consulta[$i]['status'] == '1') { ?>
                  <button class="btn btn-danger" disabled>
                    <span class="text-light">EM ATENDIMENTO SALA: <?= $consulta[$i]['consultorio_atendimento'] ?></span>
                  </button>
                <?php } else { ?>
                  <button class="btn btn-success status_atendimento" onclick="status_atendimento('<?php echo $consulta[$i]['id'] ?>', 1, '<?= $consultorio ?>')">
                    <span class="text-light">ATENDER PACIENTE</span>
                  </button>
                <?php  } ?>
              </div>


              <?php  ?><br>
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
  </div>
<?php } ?>