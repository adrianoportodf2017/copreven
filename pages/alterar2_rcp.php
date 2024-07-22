<?php
include("../header.php");

$registro           = $_GET["registro"];


$consulta   = select("atendimento","*","WHERE id LIKE '$registro'","ORDER BY id DESC");

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
      <a class="navbar-brand" href="recepcao.php">
        ''
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
  

  <a href="alterar3_rcp.php?registro=<?php echo $registro ?>"><button type="button" class="btn btn-danger btn-sm">Deletar Registro</button></a><br><br>
  <font size="2"><span color="red" class="glyphicon glyphicon-info-sign"></span> <strong>Atenção</strong>, essa operação não poderá ser desfeita. 
  Após clicar no botão acima, os dados desse atendimento serão <strong>excluídos</strong>!</font>

  </div>

  </body>
<?php include("../footer.php"); ?>
  </html>