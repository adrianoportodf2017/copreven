<?php
 
include("../header.php");



$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');


$consulta = select("atendimento", "*", "WHERE obs_raiox LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'", "ORDER BY id ASC");
$consulta2 = select("atendimento", "*", "WHERE obs_raiox LIKE 'O' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'", "ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="25">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>RAIO-X | SALA ONLINE | COPREVEN</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>


<body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">

      </div>
    </div>
  </nav>
  <!-- Fim do bloco -->

  <div class="container">
    <div class="row">
      <br>
      <br>
      <br>
      <div class="col-md-12">
        <div align="center" class="panel panel-default">
          <strong>RELATÓRIO DE ATENDIMENTO - RAIO-X [GERAL]</strong>
        </div>

        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <?php
              $raiox = select('atendimento', '*', "WHERE obs_raiox = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
              $t_raiox = ($raiox !== false) ? count($raiox) : 0;

              ?>
              Total de colaboradores - Raio-X: <strong><?php print $t_raiox; ?></strong>
            </div>
          </div>
        </div>

        <br>
        <br>

        <div class="panel-body">
          <h4>Aguardando Atendimento</h4><br>
          <a href="<?= base_url() ?>/pages/salas.php" class="btn btn-primary" style="text-decoration: none; font-weight: bold;">
            <i class="bi bi-arrow-left"></i>Voltar para Salas
          </a>
          <hr>

          <?php

          if ($consulta == true) {
            for ($i = 0; $i < count($consulta); $i++) {

              if ($consulta[$i]['rx_torax'] != '') {
                $tem_torax      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_torax      = "";
              }

              if ($consulta[$i]['rx_torax_oit'] != '') {
                $tem_oit      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_oit      = "";
              }

              if ($consulta[$i]['rx_cervical'] != '') {
                $tem_cervical      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_cervical      = "";
              }

              if ($consulta[$i]['rx_lombar'] != '') {
                $tem_lombar      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_lombar      = "";
              }

              if ($consulta[$i]['rx_lombo_sacra'] != '') {
                $tem_sacra      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_sacra      = "";
              }

              if ($consulta[$i]['rx_torax_pa_perfil'] != '') {
                $tem_pa_perfil      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_pa_perfil      = "";
              }

              if ($consulta[$i]['rx_coluna_total'] != '') {
                $tem_coluna_total      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_coluna_total      = "";
              }

              if ($consulta[$i]['rx_ombro'] != '') {
                $tem_ombro      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_ombro      = "";
              }

              if ($consulta[$i]['rx_joelho'] != '') {
                $tem_joelho      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_joelho      = "";
              }

              if ($consulta[$i]['rx_mao'] != '') {
                $tem_mao      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_mao      = "";
              }

              if ($consulta[$i]['rx_quadril'] != '') {
                $tem_quadril      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_quadril      = "";
              }



          ?>



              <div class="col-md-6">
                <div class="panel panel-default">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="btn-group">
                        <?php if ($consulta[$i]['status'] == '1' && $consulta[$i]['consultorio_atendimento'] == 'obs_raiox') { ?>
                          <button class="btn btn-outline-primary bg-gray" onclick="confirmar_atendimento('<?php echo $consulta[$i]['id'] ?>', 'obs_raiox')">
                            <span class="text-dark">CONFIRMAR ATENDIMENTO</span>
                          </button>
                        <?php }
                        if ($consulta[$i]['status'] == '1') { ?>
                          <button class="btn btn-danger" disabled>
                            <span class="text-light">EM ATENDIMENTO SALA: <?= $consulta[$i]['consultorio_atendimento'] ?></span>
                          </button>
                        <?php } else { ?>
                          <button class="btn btn-success status_atendimento" onclick="status_atendimento('<?php echo $consulta[$i]['id'] ?>', 1, 'obs_raiox')">
                            <span class="text-light">ATENDER PACIENTE</span>
                          </button>
                        <?php  } ?>
                      </div>
                      <br>
                      <?php echo $consulta[$i]['id'] ?> |
                      <?php echo $consulta[$i]['nome'] ?><br>
                      <?php echo $consulta[$i]['tipo'] ?> |
                      Convênio: <?php echo $consulta[$i]['convenio'] ?> <br>
                      Empresa: <?php echo $consulta[$i]['empresa'] ?> <br>
                      Nasc: <?php echo $consulta[$i]['nascimento'] ?> |
                      Doc: <?php echo $consulta[$i]['rg'] ?> |
                      Função: <?php echo $consulta[$i]['cargo'] ?>

                      [<font color="#2E8B57"><?php echo $tem_torax; ?></font>] TÓRAX | <br>
                      [<font color="#2E8B57"><?php echo $tem_oit; ?></font>] TÓRAX OIT | <br>
                      [<font color="#2E8B57"><?php echo $tem_cervical; ?></font>] CERVICAL | <br>
                      [<font color="#2E8B57"><?php echo $tem_lombar; ?></font>] LOMBAR | <br>
                      [<font color="#2E8B57"><?php echo $tem_sacra; ?></font>] LOMBO-SACRA | <br>
                      [<font color="#2E8B57"><?php echo $tem_pa_perfil; ?></font>] TÓRAX PA/PERF | <br>
                      [<font color="#2E8B57"><?php echo $tem_coluna_total; ?></font>] COLUNA TOTAL | <br>
                      [<font color="#2E8B57"><?php echo $tem_ombro; ?></font>] OMBRO | <br>
                      [<font color="#2E8B57"><?php echo $tem_joelho; ?></font>] JOELHO | <br>
                      [<font color="#2E8B57"><?php echo $tem_mao; ?></font>] MÃO | <br>
                      [<font color="#2E8B57"><?php echo $tem_quadril; ?></font>] QUADRIL | <br>
                    </li>
                  </ul>
                </div>
              </div>

          <?php
            }
          } else {
            echo "Nenhum dado encontrado!";
          }
          ?>



        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-body">

          <h4>Atendimento Concluído</h4><br>


          <?php

          if ($consulta2 == true) {
            for ($i2 = 0; $i2 < count($consulta2); $i2++) {

              if ($consulta2[$i2]['rx_torax'] != '') {
                $tem_torax2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_torax2     = "";
              }

              if ($consulta2[$i2]['rx_torax_oit'] != '') {
                $tem_oit2     = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_oit2      = "";
              }

              if ($consulta2[$i2]['rx_cervical'] != '') {
                $tem_cervical2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_cervical2      = "";
              }

              if ($consulta2[$i2]['rx_lombar'] != '') {
                $tem_lombar2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_lombar2      = "";
              }

              if ($consulta2[$i2]['rx_lombo_sacra'] != '') {
                $tem_sacra2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_sacra2      = "";
              }

              if ($consulta2[$i2]['rx_torax_pa_perfil'] != '') {
                $tem_pa_perfil2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_pa_perfil2      = "";
              }

              if ($consulta2[$i2]['rx_coluna_total'] != '') {
                $tem_coluna_total2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_coluna_total2      = "";
              }

              if ($consulta2[$i2]['rx_ombro'] != '') {
                $tem_ombro2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_ombro2      = "";
              }

              if ($consulta2[$i2]['rx_joelho'] != '') {
                $tem_joelho2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_joelho2      = "";
              }

              if ($consulta2[$i2]['rx_mao'] != '') {
                $tem_mao2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_mao2      = "";
              }

              if ($consulta2[$i2]['rx_quadril'] != '') {
                $tem_quadril2      = '<span style="" class="text-success"><strong>X</strong></span>';
              } else {
                $tem_quadril2      = "";
              }



          ?>



              <ul class="list-group">
                <li class="list-group-item">

                  <span class="badge badge-success">
                    ATENDIDO</span> <?php echo $consulta2[$i2]['id'] ?> | <?php echo $consulta2[$i2]['nome'] ?><br> <?php echo $consulta2[$i2]['tipo'] ?> | Convênio: <?php echo $consulta2[$i2]['convenio'] ?><br>Empresa: <?php echo $consulta2[$i2]['empresa'] ?> <br> Nasc: <?php echo $consulta2[$i2]['nascimento'] ?> | Doc: <?php echo $consulta2[$i2]['rg'] ?> | Função: <?php echo $consulta2[$i2]['cargo'] ?> <br>
                  [<font color="#2E8B57"><?php echo $tem_torax2; ?></font>] TÓRAX | <br>
                  [<font color="#2E8B57"><?php echo $tem_oit2; ?></font>] TÓRAX OIT | <br>
                  [<font color="#2E8B57"><?php echo $tem_cervical2; ?></font>] CERVICAL | <br>
                  [<font color="#2E8B57"><?php echo $tem_lombar2; ?></font>] LOMBAR | <br>
                  [<font color="#2E8B57"><?php echo $tem_sacra2; ?></font>] LOMBO-SACRA | <br>
                  [<font color="#2E8B57"><?php echo $tem_pa_perfil2; ?></font>] TÓRAX PA/PERF | <br>
                  [<font color="#2E8B57"><?php echo $tem_coluna_total2; ?></font>] COLUNA TOTAL | <br>
                  [<font color="#2E8B57"><?php echo $tem_ombro2; ?></font>] OMBRO | <br>
                  [<font color="#2E8B57"><?php echo $tem_joelho2; ?></font>] JOELHO | <br>
                  [<font color="#2E8B57"><?php echo $tem_mao2; ?></font>] MÃO | <br>
                  [<font color="#2E8B57"><?php echo $tem_quadril2; ?></font>] QUADRIL | <br>
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
    </div>


    <br>
    <br>
    <br>
    <br>

  </div>
  </div>


</body>
<?php include("../footer.php"); ?>

</html>