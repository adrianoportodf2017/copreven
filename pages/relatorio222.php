<?php


$convenio = isset($_GET["convenio"]) ? $_GET["convenio"] : '';
$dia = isset($_GET["dia"]) ? $_GET["dia"] : '';
$mes = isset($_GET["mes"]) ? $_GET["mes"] : '';
$ano = isset($_GET["ano"]) ? $_GET["ano"] : '';
$empresa = isset($_GET["empresa"]) ? $_GET["empresa"] : '';
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : '';
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';



$consulta3   = select("atendimento","*","WHERE nome LIKE '%$nome%' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ","ORDER BY id DESC");

?>



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



  if($consulta3 == true){
  for ($i=0;$i<count($consulta3);$i++){

			  if($consulta3[$i]['ex_clinico']==1){
			  $tem_clinico  = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_clinico  = "";
			  }

			  if($consulta3[$i]['romberg']==1){
			  $tem_romberg      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_romberg      = "";
			  }

			  if($consulta3[$i]['rx_torax']==1){
			  $tem_torax      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_torax      = "";
			  }

			  if($consulta3[$i]['rx_torax_oit']==1){
			  $tem_oit      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_oit      = "";
			  }

			  if($consulta3[$i]['rx_cervical']==1){
			  $tem_cervical      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_cervical      = "";
			  }

			  if($consulta3[$i]['rx_lombar']==1){
			  $tem_lombar      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_lombar      = "";
			  }

			  if($consulta3[$i]['rx_lombo_sacra']==1){
			  $tem_sacra      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_sacra      = "";
			  }

			  if($consulta3[$i]['espirometria']==1){
			  $tem_espiro      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_espiro      = "";
			  }

			  if($consulta3[$i]['audiometria']==1){
			  $tem_audio      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_audio      = "";
			  }

			  if($consulta3[$i]['acuidade']==1){
			  $tem_acuidade      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_acuidade      = "";
			  }

			  if($consulta3[$i]['psicossocial']==1){
			  $tem_psico      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_psico      = "";
			  }

			  if($consulta3[$i]['ecg']==1){
			  $tem_ecg      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_ecg      = "";
			  }

			  if($consulta3[$i]['eeg']==1){
			  $tem_eeg      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
			  }else{
			  $tem_eeg      = "";
			  }
  ?>

  <div class="row" style="background-color:#F0FFFF">

  	<div align="center" class="col-md-1">
  		
  		<?php echo $consulta3[$i]['id'] ?>
  	</div>

  	<div class="col-md-1">
  		<?php echo $consulta3[$i]['dia'] ?>/<?php echo $consulta3[$i]['mes'] ?>/<?php echo $consulta3[$i]['ano'] ?>
  	</div>

  	<div class="col-md-1">
  		<?php echo $consulta3[$i]['convenio'] ?>
  	</div>

  	<div class="col-md-2">
  		<?php echo $consulta3[$i]['empresa'] ?>  		
  	</div>

  	<div class="col-md-4">
  		<strong><?php echo $consulta3[$i]['nome'] ?></strong> <strong><font size="1" color="#00BFFF"><br>
  		<i>(<?php echo $consulta3[$i]['tipo'] ?> - <?php echo $consulta3[$i]['cargo'] ?>)</i></font></strong>
  	</div>

  	<div class="col-md-3">
  	<font size="1">
  	 Atendido [ <strong><font color="#FF0000">NÃO</font></strong> ] | [<strong><?php echo $tem_clinico ?></strong>]-Ex Clinico<br>
  	 Atendido [ <strong><font color="#FF0000">NÃO</font></strong> ] | [<strong><?php echo $tem_romberg ?></strong>]-Romberg<br>
  	 Atendido [ <strong><font color="#FF0000">NÃO</font></strong> ] | [<strong><?php echo $tem_torax ?></strong>]-Raio-x Torax<br>
  	 Atendido [ <strong><font color="#FF0000">NÃO</font></strong> ] | [<strong><?php echo $tem_oit ?></strong>]-Raio-x Torax OIT<br>
  	 Atendido [ <strong><font color="#FF0000">NÃO</font></strong> ] | [<strong><?php echo $tem_cervical ?></strong>]-Raio-x Cervical<br>
  	 Atendido [ <strong><font color="#FF0000">NÃO</font></strong> ] | [<strong><?php echo $tem_lombar ?></strong>]-Raio-x Lombar<br>
  	 Atendido [ <strong><font color="#008000">SIM</font></strong> ] | [<strong><?php echo $tem_sacra ?></strong>]-Raio-x Lombo-Sacra<br>
  	 Atendido [ <strong><font color="#008000">SIM</font></strong> ] | [<strong><?php echo $tem_espiro ?></strong>]-Espirometria<br>
  	 Atendido [ <strong><font color="#008000">SIM</font></strong> ] | [<strong><?php echo $tem_audio ?></strong>]-Audiometria<br>
  	 Atendido [ <strong><font color="#008000">SIM</font></strong> ] | [<strong><?php echo $tem_acuidade ?></strong>]-Acuidade Visual<br>
  	 Atendido [ <strong><font color="#008000">SIM</font></strong> ] | [<strong><?php echo $tem_psico ?></strong>]-Av. Psicossocial<br>
  	 Atendido [ <strong><font color="#008000">SIM</font></strong>  ] | [<strong><?php echo $tem_ecg ?></strong>]-ECG<br>
  	 Atendido [ <strong><font color="#FF0000">NÃO</font></strong> ] | [<strong><?php echo $tem_eeg ?></strong>]-EEG<br>
  	 Atendido [ <strong><font color="#008000">SIM</font></strong> ] | <strong>Laboratoriais:</strong> <strong><?php echo $consulta3[$i]['laboratorio']; ?></strong><br>
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

