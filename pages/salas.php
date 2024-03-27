

<?php
include("funcao_select.php");
include("pdo.php");

$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');

$consulta = select("atendimento","*","WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id DESC");

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
  

  <body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        <img class="" src="images/logo1.png" height="35px" width="">
      </a>
    </div>
  </div>
  </nav>
  <!-- Fim do bloco -->
  

  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>SALAS DE ATENDIMENTO</strong></h4>
        <hr>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            
            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; Exame Clínico</strong></font> 
            <br>
                <p align="right">
                <?php
                $clinico = $pdo->query("SELECT * FROM atendimento WHERE ex_clinico LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_clinico = count($clinico);
                ?>

                <font color="#228B22" size="12"><?php print $t_clinico; ?></font>
                </p>
                

            <h6><a href="ex_clinico.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            
            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; T. Romberg</strong></font> 
            <br>
                <p align="right">
                <?php
                $romberg = $pdo->query("SELECT * FROM atendimento WHERE romberg LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_romberg = count($romberg);
                ?>

                <font color="#228B22" size="12"><?php print $t_romberg; ?></font>
                </p>


            <h6><a href="romberg.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; Sala Laboratório</strong></font> 
            <br>
                <p align="right">
                <?php
                $lab = $pdo->query("SELECT * FROM atendimento WHERE obs_lab LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_lab = count($lab);
                ?>

                <font color="#228B22" size="12"><?php print $t_lab; ?></font>
                </p>

            <h6><a href="lab.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; Sala Raio-X</strong></font> 
            <br>
                <p align="right"><?php
                $raiox = $pdo->query("SELECT * FROM atendimento WHERE obs_raiox LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_raiox = count($raiox);
                ?>

                <font color="#228B22" size="12"><?php print $t_raiox; ?></font>
                </p>

            <h6><a href="raiox.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            
            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; Espirometria</strong></font> 
            <br>
                <p align="right">
                <?php
                $espiro = $pdo->query("SELECT * FROM atendimento WHERE espirometria LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_espiro = count($espiro);
                ?>

                <font color="#228B22" size="12"><?php print $t_espiro; ?></font>
                </p>
            
            <h6><a href="espirometria.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; Audiometria</strong></font> 
            <br>
                <p align="right">
                <?php
                $audio = $pdo->query("SELECT * FROM atendimento WHERE audiometria LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_audio = count($audio);
                ?>

                <font color="#228B22" size="12"><?php print $t_audio; ?></font>
                </p>

            <h6><a href="audiometria.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
                      
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; Acuidade Visual</strong></font> 
            <br>
                <p align="right">
                <?php
                $acuidade = $pdo->query("SELECT * FROM atendimento WHERE acuidade LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_acuidade = count($acuidade);
                ?>

                <font color="#228B22" size="12"><?php print $t_acuidade; ?></font>
                </p>

            <h6><a href="acuidade.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; Av. Psicossocial</strong></font> 
            <br>
                <p align="right">
                <?php
                $ap = $pdo->query("SELECT * FROM atendimento WHERE psicossocial LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_ap = count($ap);
                ?>

                <font color="#228B22" size="12"><?php print $t_ap; ?></font>
                </p>
            
            <h6><a href="psicossocial.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; ECG</strong></font> 
            <br>
                <p align="right">
                <?php
                $ecg = $pdo->query("SELECT * FROM atendimento WHERE ecg LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_ecg = count($ecg);
                ?>

                <font color="#228B22" size="12"><?php print $t_ecg; ?></font>
                </p>

            <h6><a href="ecg.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">

            <font size="2" color="#00CC00"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font> <font color="#000000"><strong> &nbsp; EEG</strong></font> 
            <br>
                <p align="right">
                <?php
                $eeg = $pdo->query("SELECT * FROM atendimento WHERE eeg LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
                $t_eeg = count($eeg);
                ?>

                <font color="#228B22" size="12"><?php print $t_eeg; ?></font>
                </p>


            <h6><a href="eeg.php" target="_blank"><center><button type="button" class="btn btn-info">Ver sala</button></center></a></h6>                      
          </div>
        </div>
      </div>
  </div>

  
  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>