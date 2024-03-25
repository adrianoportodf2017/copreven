

<?php

//DADOS via URL ...

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
$tem_clinico        = @$_GET["clinico"];
$tem_romberg        = @$_GET["romberg"];
$laboratorio        = @$_GET["laboratorio"];
// ------------------------------------------
$tem_torax          = @$_GET["tem_torax"];
$tem_oit            = @$_GET["tem_oit"];
$tem_cervical       = @$_GET["tem_cervical"];
$tem_lombar         = @$_GET["tem_lombar"];
$tem_sacra          = @$_GET["tem_sacra"];
$tem_espiro         = @$_GET["tem_espiro"];
//-------------------------------------------
$tem_audio          = @$_GET["tem_audio"];
$tem_acuidade       = @$_GET["tem_acuidade"];
$tem_psico          = @$_GET["tem_psico"];
$tem_ecg            = @$_GET["tem_ecg"];
$tem_eeg            = @$_GET["tem_eeg"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>GUIA DE ATENDIMENTO (SALA 1.002) | PREVEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>

<body onload="self.print();">

<div class="container">
	<div class="row">
	
		<div class="col-md-12">
			
			<blockquote>
			<h6>
			Colaborador: <strong><?php echo "$nome";?></strong><br>	
			RG / CPF: <strong><?php echo "$rg";?></strong><br>
			Convênio: <strong><?php echo "$convenio";?></strong><br>
			Empresa: <strong><?php echo "$empresa";?></strong><br>
			Data de Nascimento: <strong><?php echo "$nascimento";?></strong><br>		
			Tipo de exame: <strong><?php echo "$tipo";?></strong><br>
			Função: <strong><?php echo "$cargo";?></strong>
			</h6>
			<span class="glyphicon glyphicon-triangle-right" aria-hidden="true">Endereço: Sala 1.002 - 10º Andar.</span>
			</blockquote>

		</div>

		<div class="col-md-12">
			
			<blockquote>
			<h5>

			[ <strong><?php echo $tem_audio ?></strong> ] AUDIOMETRIA 
            [ <strong><?php echo $tem_acuidade ?></strong> ] ACUIDADE VISUAL 
            [ <strong><?php echo $tem_psico ?></strong> ] AV. PSICOSSOCIAL 
            [ <strong><?php echo $tem_ecg ?></strong> ] ECG 
            [ <strong><?php echo $tem_eeg ?></strong> ] EEG 
            			
			</h5>
			</blockquote>

		</div>
	</div>	
</div>


</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>
  