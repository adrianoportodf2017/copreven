<?php

include("../includes/autoload.php");
//DADOS DO PRIMEIRO FORMULARIO
$convenio = isset($_GET["convenio"]) ? $_GET["convenio"] : '';
$dia = isset($_GET["dia"]) ? $_GET["dia"] : '';
$mes = isset($_GET["mes"]) ? $_GET["mes"] : '';
$ano = isset($_GET["ano"]) ? $_GET["ano"] : '';
$empresa = isset($_GET["empresa"]) ? $_GET["empresa"] : '';
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';
$rg = isset($_GET["rg"]) ? $_GET["rg"] : '';
$nascimento = isset($_GET["nascimento"]) ? $_GET["nascimento"] : '';
$cargo = isset($_GET["cargo"]) ? $_GET["cargo"] : '';
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : '';
$ex_clinico = isset($_GET["ex_clinico"]) ? $_GET["ex_clinico"] : '';
$romberg = isset($_GET["romberg"]) ? $_GET["romberg"] : '';
$laboratorio = isset($_GET["laboratorio"]) ? $_GET["laboratorio"] : '';
$rx_torax = isset($_GET["rx_torax"]) ? $_GET["rx_torax"] : '';
$rx_torax_oit = isset($_GET["rx_torax_oit"]) ? $_GET["rx_torax_oit"] : '';
$rx_cervical = isset($_REQUEST["rx_cervical"]) ? $_REQUEST["rx_cervical"] : '';
$rx_lombar = isset($_GET["rx_lombar"]) ? $_GET["rx_lombar"] : '';
$rx_lombo_sacra = isset($_GET["rx_lombo_sacra"]) ? $_GET["rx_lombo_sacra"] : '';
$rx_torax_pa_perfil = isset($_GET["rx_torax_pa_perfil"]) ? $_GET["rx_torax_pa_perfil"] : '';
$rx_coluna_total = isset($_GET["rx_coluna_total"]) ? $_GET["rx_coluna_total"] : '';
$rx_ombro = isset($_GET["rx_ombro"]) ? $_GET["rx_ombro"] : '';
$rx_joelho = isset($_GET["rx_joelho"]) ? $_GET["rx_joelho"] : '';
$rx_mao = isset($_GET["rx_mao"]) ? $_GET["rx_mao"] : '';
$rx_quadril = isset($_GET["rx_quadril"]) ? $_GET["rx_quadril"] : '';
$espirometria = isset($_GET["espirometria"]) ? $_GET["espirometria"] : '';
$audiometria = isset($_GET["audiometria"]) ? $_GET["audiometria"] : '';
$acuidade = isset($_GET["acuidade"]) ? $_GET["acuidade"] : '';
$psicossocial = isset($_GET["psicossocial"]) ? $_GET["psicossocial"] : '';
$ecg = isset($_GET["ecg"]) ? $_GET["ecg"] : '';
$eeg = isset($_GET["eeg"]) ? $_GET["eeg"] : '';
$obs_raiox = isset($_GET["obs_raiox"]) ? $_GET["obs_raiox"] : '';
$obs_lab = isset($_GET["obs_lab"]) ? $_GET["obs_lab"] : '';
$hr_chegada = date('H:i:s');
$atendente = isset($_SESSION['login']) ? $_SESSION['login'] : '';

$sql = "INSERT INTO atendimento VALUES";
$sql .= "(NULL,'$dia','$mes','$ano','$convenio','$empresa','$nome','$rg','$cargo','$nascimento','$tipo','$ex_clinico',
	          '$romberg','$laboratorio','$rx_torax','$rx_torax_oit','$rx_cervical','$rx_lombar','$rx_lombo_sacra','$rx_torax_pa_perfil','$rx_coluna_total','$rx_ombro','$rx_joelho','$rx_mao','$rx_quadril','$espirometria',
	          '$audiometria','$acuidade','$psicossocial','$ecg','$eeg',NULL,'$obs_raiox','$obs_lab','$hr_chegada','AGUARDANDO','$atendente',NULL, '', '')";
$resultado = mysqli_query(connect(), $sql);


mysqli_close(connect());

if ($ex_clinico == 'A') {
	$tem_clinico  = "X";
} else {
	$tem_clinico  = "";
}

if ($romberg == 'A') {
	$tem_romberg      = "X";
} else {
	$tem_romberg      = "";
}

if ($rx_torax == 'A') {
	$tem_torax      = "X";
} else {
	$tem_torax      = "";
}

if ($rx_torax_oit == 'A') {
	$tem_oit      = "X";
} else {
	$tem_oit      = "";
}

if ($rx_cervical == 'A') {
	$tem_cervical      = "X";
} else {
	$tem_cervical      = "";
}

if ($rx_lombar == 'A') {
	$tem_lombar      = "X";
} else {
	$tem_lombar      = "";
}

if ($rx_lombo_sacra == 'A') {
	$tem_sacra      = "X";
} else {
	$tem_sacra      = "";
}

if ($rx_torax_pa_perfil == 'A') {
	$tem_pa_perfil      = "X";
} else {
	$tem_pa_perfil      = "";
}

if ($rx_coluna_total == 'A') {
	$tem_coluna_total      = "X";
} else {
	$tem_coluna_total      = "";
}

if ($rx_ombro == 'A') {
	$tem_ombro      = "X";
} else {
	$tem_ombro      = "";
}

if ($rx_joelho == 'A') {
	$tem_joelho      = "X";
} else {
	$tem_joelho      = "";
}

if ($rx_mao == 'A') {
	$tem_mao      = "X";
} else {
	$tem_mao      = "";
}

if ($rx_quadril == 'A') {
	$tem_quadril      = "X";
} else {
	$tem_quadril      = "";
}

if ($espirometria == 'A') {
	$tem_espiro      = "X";
} else {
	$tem_espiro      = "";
}

if ($audiometria == 'A') {
	$tem_audio      = "X";
} else {
	$tem_audio      = "";
}

if ($acuidade == 'A') {
	$tem_acuidade      = "X";
} else {
	$tem_acuidade      = "";
}

if ($psicossocial == 'A') {
	$tem_psico      = "X";
} else {
	$tem_psico      = "";
}

if ($ecg == 'A') {
	$tem_ecg      = "X";
} else {
	$tem_ecg      = "";
}

if ($eeg == 'A') {
	$tem_eeg      = "X";
} else {
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

	<title>GUIA DE ATENDIMENTO | PREVEN</title>
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
				</h4>
			</div>
			<div class="305">
				<div class="row">
					<?php
					$espaço = '<p><br>';
					if ($tem_clinico == 'X' || $tem_romberg == 'X') {
						if (!empty($tem_clinico)) {
							echo '<div class="col-12 exam-item">[ <strong>' . $tem_clinico . '</strong> ] EXAME CLÍNICO ' . $espaço . '</div>';
						}
						if (!empty($tem_romberg)) {
							echo '<div class="col-12 exam-item">[ <strong>' . $tem_romberg . '</strong> ] ROMBERG ' . $espaço . '</div>';
						}
					}
					?>
				</div>
			</div>
		

			<div class="406">
				<div class="row">
					<?php
					$espaço = '<p><br>';
					if (!empty($laboratorio)) {
						echo '<div class="col-12 exam-item">[ <strong>X</strong> ][<strong>' . $laboratorio . '</strong>] ' . $espaço . '</div>';
					}
					?>
				</div>
			</div>
			<div class="408">
				<div class="row">
					<?php
					$espaço = '<p><br>';
					if ($tem_torax == 'X' || $tem_oit == 'X' || $tem_lombar == 'X' || $tem_cervical == 'X' || $tem_sacra == 'X' || $tem_pa_perfil == 'X' || $tem_coluna_total == 'X' || $tem_ombro == 'X' || $tem_joelho == 'X' || $tem_mao == 'X' || $tem_quadril == 'X' || $tem_espiro == 'X') {
						echo '';
						if (!empty($tem_torax)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_torax . '</strong> ] RX-TORAX ' . $espaço . '</div>';
                        }
                        if (!empty($tem_oit)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_oit . '</strong> ] RX-TORAX (OIT) ' . $espaço . '</div>';
                        }
                        if (!empty($tem_lombar)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_lombar . '</strong> ] RX-COLUNA LOMBAR ' . $espaço . '</div>';
                        }
                        if (!empty($tem_cervical)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_cervical . '</strong> ] RX-COLUNA CERVICAL ' . $espaço . '</div>';
                        }
                        if (!empty($tem_sacra)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_sacra . '</strong> ] RX-LOMBO SACRA ' . $espaço . '</div>';
                        }
						if (!empty($tem_pa_perfil)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_pa_perfil . '</strong> ] TÓRAX PA / PERFIL ' . $espaço . '</div>';
                        }
						if (!empty($tem_coluna_total)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_coluna_total . '</strong> ] COLUNA TOTAL ' . $espaço . '</div>';
                        }
						if (!empty($tem_ombro)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_ombro . '</strong> ] OMBRO ' . $espaço . '</div>';
                        }
						if (!empty($tem_joelho)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_joelho . '</strong> ] JOELHO ' . $espaço . '</div>';
                        }
						if (!empty($tem_mao)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_mao . '</strong> ] MÃO ' . $espaço . '</div>';
                        }
						if (!empty($tem_quadril)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_quadril . '</strong> ] QUADRIL ' . $espaço . '</div>';
                        }
                        if (!empty($tem_espiro)) {
                            echo '<div class="col-12 exam-item">[ <strong>' . $tem_espiro . '</strong> ] ESPIROMETRIA ' . $espaço . '</div>';
                        }
					}
					?>
				</div>
			</div>
			<div class="1.002">
				<div class="row">
					<?php
					$espaço = '<p><br>';
					if ($tem_audio == 'X' || $tem_acuidade == 'X' || $tem_psico == 'X' || $tem_ecg == 'X' || $tem_eeg == 'X') {
						if (!empty($tem_audio)) {
							echo '<div class="col-12 exam-item">[ <strong>' . $tem_audio . '</strong> ] AUDIOMETRIA ' . $espaço . '</div>';
						}
						if (!empty($tem_acuidade)) {
							echo '<div class="col-12 exam-item">[ <strong>' . $tem_acuidade . '</strong> ] ACUIDADE VISUAL  ' . $espaço . '</div>';
						}
						if (!empty($tem_psico)) {
							echo '<div class="col-12 exam-item">[ <strong>' . $tem_psico . '</strong> ] AV. PSICOSSOCIAL   ' . $espaço . '</div>';
						}
						if (!empty($tem_ecg)) {
							echo '<div class="col-12 exam-item">[ <strong>' . $tem_ecg . '</strong> ] ECG   ' . $espaço . '</div>';
						}
						if (!empty($tem_eeg)) {
							echo '<div class="col-12 exam-item">[ <strong>' . $tem_eeg . '</strong> ] EEG   ' . $espaço . '</div>';
						}
					}
					?>
				</div>
			</div>			
		</div>
</body>

</html>