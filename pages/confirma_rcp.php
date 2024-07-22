<?php
include_once("../includes/autoload.php");

$convenio           = $_POST["convenio"];
$dia                = $_POST["dia"];
$mes                = $_POST["mes"];
$ano                = $_POST["ano"];
$empresa            = $_POST["empresa"];
$nome               = $_POST["nome"];
$rg                 = $_POST["rg"];
$nascimento         = $_POST["nascimento"];
$cargo              = $_POST["cargo"];
$tipo               = $_POST["tipo"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Controle de Atendimento | PREVEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="recepcao.php">
        <a class="navbar-brand" href="recepcao.php">
        ''
      </a>
    </div>
  </div>
  </nav>
  <!-- Fim do bloco -->

  <div class="container">
  <div class="col-md-10">
  
  <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <strong><?php echo $nome ?></strong> | <font color="#666666"><?php echo $tipo ?></font></h5>
  <h4><?php echo $empresa ?></h4>  
  
  </div>
  <div class="col-md-2">
  <h3><?php echo $dia; ?>/<?php echo $mes; ?>/<?php echo $ano; ?></h3>    
  </div>

  <div class="col-md-12">
  <hr>
  </div>
  <div class="row"> 
  <form action="confirma2_rcp.php" method="get">
  <div class="col-md-2">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4>Clínico e <br>Roomberg</h4>
    <hr>
    
      <br>
      <input type="checkbox" name="ex_clinico" value="A">
      EXAME CLÍNICO
      

      <br>
      <input type="checkbox" name="romberg" value="A">
      ROMBERG
      
    </div>
    </div>
    <br>
  </div>

  <div class="col-md-2">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Sala <br>Laboratório</strong></h4>
    <hr>
      
      <h6>EXAMES LABORATORIAIS:</h6>
      <textarea style="text-transform: uppercase" name="laboratorio" class="form-control"></textarea>

      
    </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Sala <br>Raio-X</strong></h4>
    <hr>
    
      
      <input type="checkbox" name="rx_torax" value="A">
      - TÓRAX
      <br>

      <input type="checkbox" name="rx_torax_oit" value="A">
      - TÓRAX (OIT)
      <br>
      
      <input type="checkbox" name="rx_cervical" value="A">
      - CERVICAL
      <br>
      
      <input type="checkbox" name="rx_lombar" value="A">
      - LOMBAR
      <br>
      
      <input type="checkbox" name="rx_lombo_sacra" value="A">
      - LOMBO-SACRA

      <input type="checkbox" name="rx_torax_pa_perfil" value="A">
      - TÓRAX-PA/PERFIL
      <br>
      
      <input type="checkbox" name="rx_coluna_total" value="A">
      - COLUNA-TOTAL
      <br>
      
      <input type="checkbox" name="rx_ombro" value="A">
      - OMBRO
      <br>
      
      <input type="checkbox" name="rx_joelho" value="A">
      - JOELHO
      <br>
      
      <input type="checkbox" name="rx_mao" value="A">
      - MÃO
      <br>
      
      <input type="checkbox" name="rx_quadril" value="A">
      - QUADRIL
      
      
      

    </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Sala <br>Audiometria</strong></h4>
    <hr>
    <br>
      
      <input type="checkbox" name="audiometria" value="A">
      AUDIOMETRIA
      <br>
                

    </div>
    </div>
    </div>

    <div class="col-md-2">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> ECG <br>& EEG</strong></h4>
    <hr>
    <br>
      
      <input type="checkbox" name="ecg" value="A">
      ECG
      <br>

      <input type="checkbox" name="eeg" value="A">
      EEG
      <br>

    </div>
    </div>
    </div>

    <div class="col-md-2">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Espiro & <br>Acuidade V.</strong></h4>
    <hr>
    <br>

      <input type="checkbox" name="espirometria" value="A">
      ESPIROMETRIA
      <br>
      
      <input type="checkbox" name="acuidade" value="A">
      ACUI. VISUAL
      <br>
      <hr>
      <br>
      <input type="checkbox" name="psicossocial" value="A">
      AV. Psicossocial
  
    </div>
    </div>
    </div>



    
  </div>
  <div>
    <div align="right">
      <button type="submit" class="btn btn-info">Continuar</button><font color="#FFFFFF">....</font>
    </div> 
  </div>

  <input type="hidden" name="convenio" class="form-control" value="<?php echo $convenio ?>">
  <input type="hidden" name="empresa" class="form-control" value="<?php echo $empresa ?>">
  <input type="hidden" name="dia" class="form-control" value="<?php echo $dia ?>">
  <input type="hidden" name="mes" class="form-control" value="<?php echo $mes ?>">
  <input type="hidden" name="ano" class="form-control" value="<?php echo $ano ?>">
  <input type="hidden" name="nome" class="form-control" value="<?php echo $nome ?>">
  <input type="hidden" name="rg" class="form-control" value="<?php echo $rg ?>">
  <input type="hidden" name="cargo" class="form-control" value="<?php echo $cargo ?>">
  <input type="hidden" name="nascimento" class="form-control" value="<?php echo $nascimento ?>">
  <input type="hidden" name="tipo" class="form-control" value="<?php echo $tipo ?>">
  </form>


  </div>
  </body>
<?php include("../footer.php"); ?>
  </html>