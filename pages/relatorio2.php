

<?php
include("funcao_select.php");

$convenio = isset($_GET["convenio"]) ? $_GET["convenio"] : '';
$dia = isset($_GET["dia"]) ? $_GET["dia"] : '';
$mes = isset($_GET["mes"]) ? $_GET["mes"] : '';
$ano = isset($_GET["ano"]) ? $_GET["ano"] : '';
$empresa = isset($_GET["empresa"]) ? $_GET["empresa"] : '';
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : '';
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';



$consulta   = select("atendimento","*","WHERE convenio LIKE '%$convenio%' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND empresa LIKE '%$empresa%' AND tipo LIKE '%$tipo%' AND nome LIKE '%$nome%' ","ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Busca Avançada | PREVEN</title>
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
  	
  
  <div class="col-md-1">
  ID:
  </div>	

  <div class="col-md-1">
  Data:
  </div>	

  <div class="col-md-1">
  Convenio:
  </div>

  <div class="col-md-2">
  Empresa:
  </div>		

  <div class="col-md-4">
  Nome / Tipo de exame:
  </div>	

  <div class="col-md-3">
  Exames:
  </div>	
  	<br>
  	<br>


  </div>
  <?php 



  if($consulta == true){
  for ($i=0;$i<count($consulta);$i++){

			  if($consulta[$i]['ex_clinico']!=''){
			  $tem_clinico  = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_clinico  = "";
			  }

			  if($consulta[$i]['romberg']!=''){
			  $tem_romberg      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_romberg      = "";
			  }

			  if($consulta[$i]['rx_torax']!=''){
			  $tem_torax      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_torax      = "";
			  }

			  if($consulta[$i]['rx_torax_oit']!=''){
			  $tem_oit      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_oit      = "";
			  }

			  if($consulta[$i]['rx_cervical']!=''){
			  $tem_cervical      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_cervical      = "";
			  }

			  if($consulta[$i]['rx_lombar']!=''){
			  $tem_lombar      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_lombar      = "";
			  }

			  if($consulta[$i]['rx_lombo_sacra']!=''){
			  $tem_sacra      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_sacra      = "";
			  }

        if($consulta[$i]['rx_torax_pa_perfil']!=''){
        $tem_pa_perfil      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_pa_perfil      = "";
        }

        if($consulta[$i]['rx_coluna_total']!=''){
        $tem_coluna_total      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_coluna_total      = "";
        }


        if($consulta[$i]['rx_ombro']!=''){
        $tem_ombro      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_ombro      = "";
        }

        if($consulta[$i]['rx_joelho']!=''){
        $tem_joelho      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_joelho      = "";
        }

        if($consulta[$i]['rx_mao']!=''){
        $tem_mao      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_mao      = "";
        }

         if($consulta[$i]['rx_quadril']!=''){
        $tem_quadril      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_quadril      = "";
        }


			  if($consulta[$i]['espirometria']!=''){
			  $tem_espiro      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_espiro      = "";
			  }

			  if($consulta[$i]['audiometria']!=''){
			  $tem_audio      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_audio      = "";
			  }

			  if($consulta[$i]['acuidade']!=''){
			  $tem_acuidade      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_acuidade      = "";
			  }

			  if($consulta[$i]['psicossocial']!=''){
			  $tem_psico      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_psico      = "";
			  }

			  if($consulta[$i]['ecg']!=''){
			  $tem_ecg      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_ecg      = "";
			  }

			  if($consulta[$i]['eeg']!=''){
			  $tem_eeg      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_eeg      = "";
			  }
  ?>

  <div class="row" style="background-color:#F0FFFF">

  	<div align="center" class="col-md-1">
  		
  		<?php echo $consulta[$i]['id'] ?>
  	</div>

  	<div class="col-md-1">
  		<?php echo $consulta[$i]['dia'] ?>/<?php echo $consulta[$i]['mes'] ?>/<?php echo $consulta[$i]['ano'] ?>

  	</div>

  	<div class="col-md-1">
  		<?php echo $consulta[$i]['convenio'] ?>
  	</div>

  	<div class="col-md-2">
  		<?php echo $consulta[$i]['empresa'] ?>  		
  	</div>

  	<div class="col-md-4">
  		<strong><?php echo $consulta[$i]['nome'] ?></strong> <strong><font size="1" color="#00BFFF"><br>
  		<i>(<?php echo $consulta[$i]['tipo'] ?> - <?php echo $consulta[$i]['cargo'] ?>)</i></font></strong>
      <br>
      <br>
      Atendente:<br>
      <?php echo $consulta[$i]['atendente'] ?>
  	</div>

  	<div class="col-md-3">
  	<font size="1">
  	 [<strong><?php echo $tem_clinico ?></strong>]-Ex Clinico
  	 [<strong><?php echo $tem_romberg ?></strong>]-Romberg
  	 [<strong><?php echo $tem_torax ?></strong>]-Raio-x Torax
  	 [<strong><?php echo $tem_oit ?></strong>]-Raio-x Torax OIT
  	 [<strong><?php echo $tem_cervical ?></strong>]-Raio-x Cervical
  	 [<strong><?php echo $tem_lombar ?></strong>]-Raio-x Lombar
  	 [<strong><?php echo $tem_sacra ?></strong>]-Raio-x Lombo-Sacra  	
     [<strong><?php echo $tem_pa_perfil ?></strong>]-Raio-x Torax PA/Perfil
     [<strong><?php echo $tem_coluna_total ?></strong>]-Raio-x Coluna Total
     [<strong><?php echo $tem_ombro ?></strong>]-Raio-x Ombro
     [<strong><?php echo $tem_joelho ?></strong>]-Raio-x Joelho
     [<strong><?php echo $tem_mao ?></strong>]-Raio-x Mao
     [<strong><?php echo $tem_quadril ?></strong>]-Raio-x Qaudril
     [<strong><?php echo $tem_espiro ?></strong>]-Espirometria
  	 [<strong><?php echo $tem_audio ?></strong>]-Audiometria
  	 [<strong><?php echo $tem_acuidade ?></strong>]-Acuidade Visual
  	 [<strong><?php echo $tem_psico ?></strong>]-Av. Psicossocial
  	 [<strong><?php echo $tem_ecg ?></strong>]-ECG
  	 [<strong><?php echo $tem_eeg ?></strong>]-EEG
  	 <br>
  	 <strong>Laboratoriais:</strong> <strong><?php echo $consulta[$i]['laboratorio']; ?></strong>
  	 </font>

  	</div>
  
  </div>
<br>

	<?php
	} 
	}else{
	echo "Nenhum dado encontrado!";
	}
	?>

  </div>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>