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
	<style>
		.exam-item {
			margin: 2px;
			border-bottom: 1px solid #000000 !important;
			font-size: 12px;
		}
	</style>
</head>

<body onload="self.print();">
	<div class="">
		<div class="row">
			<div class="">
				<h4>
					Colaborador: <strong><?php echo "$nome"; ?></strong><br>
					RG / CPF: <strong><?php echo "$rg"; ?></strong><br>
					Convênio: <strong><?php echo "$convenio"; ?></strong><br>
					Empresa: <strong><?php echo "$empresa"; ?></strong><br>
					Data de Nascimento: <strong><?php echo "$nascimento"; ?></strong><br>
					Tipo de exame: <strong><?php echo "$tipo"; ?></strong><br>
					Função: <strong><?php echo "$cargo"; ?></strong>
					<span class="glyphicon glyphicon-triangle-right" aria-hidden="true">Endereço: Sala 305 - 3º Andar.</span>
				</h4>
			</div>
			<div class="">
				<div class="row">
					<?php
					$espaço = '<p><br>';
					if (!empty($tem_clinico)) {
						echo '<div class="col-12 exam-item">[ <strong>' . $tem_torax . '</strong> ] EXAME CLÍNICO ' . $espaço . '</div>';
					}
					if (!empty($tem_romberg)) {
						echo '<div class="col-12 exam-item">[ <strong>' . $tem_romberg . '</strong> ] ROMBERG ' . $espaço . '</div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>