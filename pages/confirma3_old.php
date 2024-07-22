
<?php

 
include("../header.php");

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


$sql        = "INSERT INTO atendimento VALUES";
$sql       .= "(NULL,'$dia','$mes','$ano','$convenio','$empresa','$nome','$rg','$cargo','$nascimento','$tipo','$ex_clinico',
	          '$romberg','$laboratorio','$rx_torax','$rx_torax_oit','$rx_cervical','$rx_lombar','$rx_lombo_sacra','$espirometria',
	          '$audiometria','$acuidade','$psicossocial','$ecg','$eeg','AGUARDANDO')";
$resultado  = mysqli_query(connect(), "$sql");

mysqli_close(connect());

  if($ex_clinico=='A'){
  $tem_clinico  = "X";
  }else{
  $tem_clinico  = "";
  }

  if($romberg=='A'){
  $tem_romberg      = "X";
  }else{
  $tem_romberg      = "";
  }

  if($rx_torax=='A'){
  $tem_torax      = "X";
  }else{
  $tem_torax      = "";
  }

  if($rx_torax_oit=='A'){
  $tem_oit      = "X";
  }else{
  $tem_oit      = "";
  }

  if($rx_cervical=='A'){
  $tem_cervical      = "X";
  }else{
  $tem_cervical      = "";
  }

  if($rx_lombar=='A'){
  $tem_lombar      = "X";
  }else{
  $tem_lombar      = "";
  }

  if($rx_lombo_sacra=='A'){
  $tem_sacra      = "X";
  }else{
  $tem_sacra      = "";
  }

  if($espirometria=='A'){
  $tem_espiro      = "X";
  }else{
  $tem_espiro      = "";
  }

  if($audiometria=='A'){
  $tem_audio      = "X";
  }else{
  $tem_audio      = "";
  }

  if($acuidade=='A'){
  $tem_acuidade      = "X";
  }else{
  $tem_acuidade      = "";
  }

  if($psicossocial=='A'){
  $tem_psico      = "X";
  }else{
  $tem_psico      = "";
  }

  if($ecg=='A'){
  $tem_ecg      = "X";
  }else{
  $tem_ecg      = "";
  }

  if($eeg=='A'){
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
      <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Sucesso!</strong> Atendimento inserido no sistema.<br>
      Não esqueça de imprimir as guias de atendimento.
      </div>
       <div class="panel panel-default">
          <div class="panel-body">
            
            
            <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> <?php echo $convenio ?><br>
            <span class="glyphicon glyphicon-user" aria-hidden="true"> </span> <?php echo $nome ?><br>
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"> </span> <?php echo $empresa ?><br>
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"> </span> <?php echo $tipo ?> | <font color="#cccccc"><?php echo $cargo ?></font><br>
                       
          </div>
        </div>
     </div>

     <div class="col-md-3">
       <div class="panel panel-default">
          <div class="panel-body">
            <h4>Unidade <strong>305</strong></h4>
            <hr>
            [ <strong><?php echo $tem_clinico ?></strong> ] EXAME CLÍNICO<br>
            [ <strong><?php echo $tem_romberg ?></strong> ] ROMBERG
            <br>
            <p align="right"><a target="_blank" href="guia_305.php?convenio=<?php echo $convenio ?>&empresa=<?php echo $empresa ?>&dia=<?php echo $dia ?>&mes=<?php echo $mes ?>&ano=<?php echo $ano ?>&nome=<?php echo $nome ?>&rg=<?php echo $rg ?>&cargo=<?php echo $cargo ?>&tipo=<?php echo $tipo ?>&tem_clinico=<?php echo $tem_clinico ?>&romberg=<?php echo $tem_romberg ?>&nascimento=<?php echo $nascimento ?>"><span class="label label-danger"><font color="#fffff">Emitir Guia</a></font></span></p>
          </div>
      </div>
      <div class="panel panel-default">
          <div class="panel-body">
            <h4>SGS / <strong>Teste Ergometrico</strong></h4>
            
            <br>
            <p align="right"><a target="_blank" href="ergometrico.php?convenio=<?php echo $convenio ?>&empresa=<?php echo $empresa ?>&dia=<?php echo $dia ?>&mes=<?php echo $mes ?>&ano=<?php echo $ano ?>&nome=<?php echo $nome ?>&rg=<?php echo $rg ?>&cargo=<?php echo $cargo ?>&tipo=<?php echo $tipo ?>&nascimento=<?php echo $nascimento ?>"><span class="label label-danger"><font color="#fffff">Emitir Guia</a></font></span></p>            
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Unidade <strong>406</strong></h4>
            <hr>
            <h6>EXAMES LABORATORIAIS:</h6>
            [ <strong><?php echo $laboratorio ?></strong> ] 
            <br>
            <p align="right"><a target="_blank" href="guia_406.php?convenio=<?php echo $convenio ?>&empresa=<?php echo $empresa ?>&dia=<?php echo $dia ?>&mes=<?php echo $mes ?>&ano=<?php echo $ano ?>&nome=<?php echo $nome ?>&rg=<?php echo $rg ?>&cargo=<?php echo $cargo ?>&tipo=<?php echo $tipo ?>&laboratorio=<?php echo $laboratorio ?>&nascimento=<?php echo $nascimento ?>"><span class="label label-danger"><font color="#fffff">Emitir Guia</a></font></span></p>
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Unidade <strong>408</strong></h4>
            <hr>
            [ <strong><?php echo $tem_torax ?></strong> ] RX-TORAX<br>
            [ <strong><?php echo $tem_oit ?></strong> ] RX-TORAX (OIT)<br>
            [ <strong><?php echo $tem_lombar ?></strong> ] RX-COLUNA LOMBAR<br>
            [ <strong><?php echo $tem_cervical ?></strong> ] RX-COLUNA CERVICAL<br>
            [ <strong><?php echo $tem_sacra ?></strong> ] RX-LOMBO SACRA<br>
            <hr>
            [ <strong><?php echo $tem_espiro ?></strong> ] ESPIROMETRIA    
            <br>
            <p align="right"><a target="_blank" href="guia_408.php?convenio=<?php echo $convenio ?>&empresa=<?php echo $empresa ?>&dia=<?php echo $dia ?>&mes=<?php echo $mes ?>&ano=<?php echo $ano ?>&nome=<?php echo $nome ?>&rg=<?php echo $rg ?>&cargo=<?php echo $cargo ?>&tipo=<?php echo $tipo ?>&nascimento=<?php echo $nascimento ?>&tem_torax=<?php echo $tem_torax ?>&tem_oit=<?php echo $tem_oit ?>&tem_lombar=<?php echo $tem_lombar ?>&tem_cervical=<?php echo $tem_cervical ?>&tem_sacra=<?php echo $tem_sacra ?>&tem_espiro=<?php echo $tem_espiro ?>"><span class="label label-danger"><font color="#fffff">Emitir Guia</a></font></span></p>
          </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Unidade <strong>1.002</strong></h4>
            <hr>
            [ <strong><?php echo $tem_audio ?></strong> ] AUDIOMETRIA<br>
            [ <strong><?php echo $tem_acuidade ?></strong> ] ACUIDADE VISUAL<br>
            [ <strong><?php echo $tem_psico ?></strong> ] AV PSICOSSOCIAL<br>
            [ <strong><?php echo $tem_ecg ?></strong> ] ECG<br>
            [ <strong><?php echo $tem_eeg ?></strong> ] EEG<br>
            <br>
            <p align="right"><a target="_blank" href="guia_1002.php?convenio=<?php echo $convenio ?>&empresa=<?php echo $empresa ?>&dia=<?php echo $dia ?>&mes=<?php echo $mes ?>&ano=<?php echo $ano ?>&nome=<?php echo $nome ?>&rg=<?php echo $rg ?>&cargo=<?php echo $cargo ?>&tipo=<?php echo $tipo ?>&nascimento=<?php echo $nascimento ?>&tem_audio=<?php echo $tem_audio ?>&tem_acuidade=<?php echo $tem_acuidade ?>&tem_psico=<?php echo $tem_psico ?>&tem_ecg=<?php echo $tem_ecg ?>&tem_eeg=<?php echo $tem_eeg ?>"><span class="label label-danger"><font color="#fffff">Emitir Guia</a></font></span></p>            
          </div></div>

        
    </div>

  </div>

</body>

<?php include("../footer.php"); ?>
  </html>