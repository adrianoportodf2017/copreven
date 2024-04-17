<?php
include("../includes/autoload.php");
include("../header.php");

$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');

$consulta = select("atendimento", "*", "WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'", "ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="10;URL=salas.php">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Salas de Atendimento | PREVEN</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>





<div class="container">
  <div class="row">

    <div class="col-md-12 m-2">
      <h4>
        <font size="5" color="#00CC00"><i class="bi bi-border-all"></i></font>
        <font color="#FFFFFF">--</font><strong>SALAS DE ATENDIMENTO</strong>
      </h4>
      <hr>
    </div>

    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">

        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; Exame Clínico</strong></font>
          <br>
          <p align="right">
            <?php
            $clinico = select('atendimento', '*', "WHERE ex_clinico = 'A' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%'", 'ORDER BY id');
            $t_clinico = ($clinico !== false) ? count($clinico) : 0;
            ?>

            <font color="#228B22" size="12"><?php print $t_clinico; ?></font>
          </p>


          <h6><a href="ex_clinico.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; T. Romberg</strong></font>
          <br>
          <p align="right">
            <?php
            $romberg = select('atendimento', '*', "WHERE romberg = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_romberg = ($romberg !== false) ? count($romberg) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_romberg; ?></font>
          </p>
          <h6><a href="romberg.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; Sala Laboratório</strong></font>
          <br>
          <p align="right">
            <?php
            $lab = select('atendimento', '*', "WHERE obs_lab = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_lab = ($lab !== false) ? count($lab) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_lab; ?></font>
          </p>
          <h6><a href="lab.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; Sala Raio-X</strong></font>
          <br>
          <p align="right">
            <?php
            $raiox = select('atendimento', '*', "WHERE obs_raiox = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_raiox = ($raiox !== false) ? count($raiox) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_raiox; ?></font>
          </p>
          <h6><a href="raiox.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; Espirometria</strong></font>
          <br>
          <p align="right">
            <?php
            $espiro = select('atendimento', '*', "WHERE espirometria = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_espiro = ($espiro !== false) ? count($espiro) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_espiro; ?></font>
          </p>
          <h6><a href="espirometria.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>


    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; Audiometria</strong></font>
          <br>
          <p align="right">
            <?php
            $audio = select('atendimento', '*', "WHERE audiometria = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_audio = ($audio !== false) ? count($audio) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_audio; ?></font>
          </p>
          <h6><a href="audiometria.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; Acuidade Visual</strong></font>
          <br>
          <p align="right">
            <?php
            $acuidade = select('atendimento', '*', "WHERE acuidade = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_acuidade = ($acuidade !== false) ? count($acuidade) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_acuidade; ?></font>
          </p>
          <h6><a href="acuidade.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; Av. Psicossocial</strong></font>
          <br>
          <p align="right">
            <?php
            $ap = select('atendimento', '*', "WHERE psicossocial = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_ap = ($ap !== false) ? count($ap) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_ap; ?></font>
          </p>
          <h6><a href="psicossocial.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>

    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; ECG</strong></font>
          <br>
          <p align="right">
            <?php
            $ecg = select('atendimento', '*', "WHERE ecg = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_ecg = ($ecg !== false) ? count($ecg) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_ecg; ?></font>
          </p>
          <h6><a href="ecg.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 border borde-2 p-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <font size="5" color="#00CC00"><span class="bi bi-box-arrow-right" aria-hidden="true"></span></font>
          <font color="#000000"><strong> &nbsp; EEG</strong></font>
          <br>
          <p align="right">
            <?php
            $eeg = select('atendimento', '*', "WHERE eeg = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_eeg = ($eeg !== false) ? count($eeg) : 0;
            ?>
            <font color="#228B22" size="12"><?php print $t_eeg; ?></font>
          </p>
          <h6><a href="eeg.php" target="_blank">
              <center><button type="button" class="btn btn-info">Ver sala</button></center>
            </a></h6>
        </div>
      </div>
    </div>

    </body>

    <?php include("../footer.php"); ?>

</html>