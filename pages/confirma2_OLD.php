<?php

//DADOS DO PRIMEIRO FORMULARIO

$convenio           = $_GET["convenio"];
$dia                = $_GET["dia"];
$mes                = $_GET["mes"];
$ano                = $_GET["ano"];
$empresa            = $_GET["empresa"];
$nome               = $_GET["nome"];
$rg                 = $_GET["rg"];
$nascimento         = $_GET["nascimento"];
$cargo              = $_GET["cargo"];
$tipo               = $_GET["tipo"];
$ex_clinico       = @$_GET["ex_clinico"];
$romberg          = @$_GET["romberg"];
$laboratorio      = @$_GET["laboratorio"];
$rx_torax         = @$_GET["rx_torax"];
$rx_torax_oit     = @$_GET["rx_torax_oit"];
$rx_cervical      = @$_REQUEST["rx_cervical"];
$rx_lombar        = @$_GET["rx_lombar"];
$rx_lombo_sacra   = @$_GET["rx_lombo_sacra"];
$espirometria     = @$_GET["espirometria"];
$audiometria      = @$_GET["audiometria"];
$acuidade         = @$_GET["acuidade"];
$psicossocial     = @$_GET["psicossocial"];
$ecg              = @$_GET["ecg"];
$eeg              = @$_GET["eeg"];

  if($ex_clinico==1){
  $tem_clinico  = "X";
  }else{
  $tem_clinico  = "";
  }

  if($romberg==1){
  $tem_romberg      = "X";
  }else{
  $tem_romberg      = "";
  }

  if($rx_torax==1){
  $tem_torax      = "X";
  }else{
  $tem_torax      = "";
  }

  if($rx_torax_oit==1){
  $tem_oit      = "X";
  }else{
  $tem_oit      = "";
  }

  if($rx_cervical==1){
  $tem_cervical      = "X";
  }else{
  $tem_cervical      = "";
  }

  if($rx_lombar==1){
  $tem_lombar      = "X";
  }else{
  $tem_lombar      = "";
  }

  if($rx_lombo_sacra==1){
  $tem_sacra      = "X";
  }else{
  $tem_sacra      = "";
  }

  if($espirometria==1){
  $tem_espiro      = "X";
  }else{
  $tem_espiro      = "";
  }

  if($audiometria==1){
  $tem_audio      = "X";
  }else{
  $tem_audio      = "";
  }

  if($acuidade==1){
  $tem_acuidade      = "X";
  }else{
  $tem_acuidade      = "";
  }

  if($psicossocial==1){
  $tem_psico      = "X";
  }else{
  $tem_psico      = "";
  }

  if($ecg==1){
  $tem_ecg      = "X";
  }else{
  $tem_ecg      = "";
  }

  if($eeg==1){
  $tem_eeg      = "X";
  }else{
  $tem_eeg      = "";
  }

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
        <a class="navbar-brand" href="index.php">
        ''
      </a>
      </div>
    </div>
  </nav>
  <!-- Fim do bloco -->

  <div class="container">
     <div class="col-md-12">
       <div class="panel panel-default">
          <div class="panel-body">
            <h4>Resumo da solicitação:</h4>
            <hr>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> <?php echo $convenio ?><br>
            <span class="glyphicon glyphicon-user" aria-hidden="true"> </span> <?php echo $nome ?><br>
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"> </span> <?php echo $empresa ?><br>
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"> </span> <?php echo $tipo ?> | <font color="#cccccc"><?php echo $cargo ?></font><br>
                       
          </div>
        </div>
     </div>

     <div class="col-md-2">
       <div class="panel panel-default">
          <div class="panel-body">
            <h5>Clínico &<br>Romberg</strong></h5>
            <hr>
            [ <strong><?php echo $tem_clinico ?></strong> ] CLÍNICO<br>
            [ <strong><?php echo $tem_romberg ?></strong> ] ROMBERG
            
            <hr>
            <h5>Sala <br>Laboratório</strong></h5>
            <hr>
            <h6>Exames:</h6>
            [ <strong><?php echo $laboratorio ?></strong> ] 
          </div>
      </div>
    </div>
    
    <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>Sala <br>Raio-X</h5>
            <hr>
            [ <strong><?php echo $tem_torax ?></strong> ] TORAX<br>
            [ <strong><?php echo $tem_oit ?></strong> ] TORAX (OIT)<br>
            [ <strong><?php echo $tem_lombar ?></strong> ] COL. LOMBAR<br>
            [ <strong><?php echo $tem_cervical ?></strong> ] COL. CERVICAL<br>
            [ <strong><?php echo $tem_sacra ?></strong> ] LOMBO SACRA<br>
          </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>Sala Espiro <br>& Acuidade V.</h5>
            <hr>
            [ <strong><?php echo $tem_acuidade ?></strong> ] ACUIDADE VISUAL<br>
            [ <strong><?php echo $tem_espiro ?></strong> ] ESPIROMETRIA <br>   
          </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>Sala <br>Audiometria</h5>
            <hr>
            [ <strong><?php echo $tem_audio ?></strong> ] AUDIOMETRIA<br>
          </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>Av <br>Psicossocial</h5>
            <hr>
            [ <strong><?php echo $tem_psico ?></strong> ] AV PSICOSSOCIAL<br>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>ECG <br>EEG </h5>
            <hr>
                                   
            [ <strong><?php echo $tem_ecg ?></strong> ] ECG<br>
            [ <strong><?php echo $tem_eeg ?></strong> ] EEG<br>            
          </div>
        </div>
        
    </div>
    <div align="right">
         <br>
         <form method="get" action="confirma3.php">

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
          <input type="hidden" name="ex_clinico" class="form-control" value="<?php echo $ex_clinico ?>">
          <input type="hidden" name="romberg" class="form-control" value="<?php echo $romberg ?>">
          <input type="hidden" name="laboratorio" class="form-control" value="<?php echo $laboratorio ?>">
          <input type="hidden" name="rx_torax" class="form-control" value="<?php echo $rx_torax ?>">
          <input type="hidden" name="rx_torax_oit" class="form-control" value="<?php echo $rx_torax_oit ?>">
          <input type="hidden" name="rx_cervical" class="form-control" value="<?php echo $rx_cervical ?>">
          <input type="hidden" name="rx_lombar" class="form-control" value="<?php echo $rx_lombar ?>">
          <input type="hidden" name="rx_lombo_sacra" class="form-control" value="<?php echo $rx_lombo_sacra ?>">
          <input type="hidden" name="espirometria" class="form-control" value="<?php echo $espirometria ?>">
          <input type="hidden" name="audiometria" class="form-control" value="<?php echo $audiometria ?>">
          <input type="hidden" name="acuidade" class="form-control" value="<?php echo $acuidade ?>">
          <input type="hidden" name="psicossocial" class="form-control" value="<?php echo $psicossocial ?>">
          <input type="hidden" name="ecg" class="form-control" value="<?php echo $ecg ?>">
          <input type="hidden" name="eeg" class="form-control" value="<?php echo $eeg ?>">
         
         
         <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"> </span> Gerar Atendimento</button>
         </form>
        </div>

  </div>

</body>

<?php include("../footer.php"); ?>
  </html>