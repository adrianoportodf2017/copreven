

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
$tem_clinico      = @$_GET["tem_clinico"];
$tem_romberg      = @$_GET["romberg"];
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

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>GUIA DE ATENDIMENTO (SALA 305) | PREVEN</title>
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
			<span class="glyphicon glyphicon-triangle-right" aria-hidden="true">Endereço: Sala 305 - 3º Andar.</span>
			</blockquote>

		</div>

		<div class="col-md-12">
			
			<blockquote>
			<h5>
			
			[ <strong><?php echo $tem_clinico ?></strong> ] EXAME CLÍNICO<br>
            [ <strong><?php echo $tem_romberg ?></strong> ] ROMBERG
			
			</h5>
			</blockquote>

		</div>
	</div>	
</div>


</body>

<?php include("../footer.php"); ?>
  </html>
  