

<?php
 
include("../header.php");

$convenio = isset($_GET["convenio"]) ? $_GET["convenio"] : '';
$dia = isset($_GET["dia"]) ? $_GET["dia"] : '';
$mes = isset($_GET["mes"]) ? $_GET["mes"] : '';
$ano = isset($_GET["ano"]) ? $_GET["ano"] : '';
$empresa = isset($_GET["empresa"]) ? $_GET["empresa"] : '';
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : '';
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';



$consulta   = select("atendimento","*","WHERE nome LIKE '%$nome%' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ","ORDER BY id DESC");

$consulta1   = select("atendimento","*","WHERE nome LIKE '%$nome%' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ","ORDER BY id DESC");

?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <!-- Place your kit's code here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <meta http-equiv="refresh" content="2500000000">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <script src="https://kit.fontawesome.com/92f06b8bd3.js"></script>
    <title>Busca Avançada | PREVEN</title>
    

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

  <div class="col-md-2">
  Data:
  </div>	

  <div class="col-md-1">
  Convenio:
  </div>

  <div class="col-md-2">
  Empresa:
  </div>		

  <div class="col-md-3">
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
			  $tem_clinico  = "<i class='fas fa-check-circle'></i>";
        $status_clinico  = "--";
        			  }else{
			  $tem_clinico  = "";
			  }
        if($consulta1[$i]['ex_clinico']=='O'){
        $status_clinico  = "ATENDIDO";
        $cor_status_clinico   = "#32CD32";
        }
         elseif ($consulta1[$i]['ex_clinico']=='A'){
        $status_clinico  = "AGUARDANDO";
        $cor_status_clinico   = "#708090";
        }
         else{
        $status_clinico  = "";
        $cor_status_clinico   = "#708090";
        }


			  if($consulta[$i]['romberg']!=''){
        $tem_romberg  = "<i class='fas fa-check-circle'></i>";
        $status_romberg  = "--";
                }else{
        $tem_romberg  = "";
        }
        if($consulta1[$i]['romberg']=='O'){
        $status_romberg  = "ATENDIDO";
        $cor_status_romberg   = "#32CD32";
        }
         elseif ($consulta1[$i]['romberg']=='A'){
        $status_romberg  = "AGUARDANDO";
        $cor_status_romberg   = "#708090";
        }
         else{
        $status_romberg  = "";
        $cor_status_romberg   = "#708090";
        }

			
      if($consulta[$i]['rx_torax']!='' OR $consulta[$i]['rx_torax_oit']!='' OR $consulta[$i]['rx_cervical']!='' OR $consulta[$i]['rx_lombar']!='' OR $consulta[$i]['rx_lombo_sacra']!='' OR $consulta[$i]['rx_torax_pa_perfil']!='' OR $consulta[$i]['rx_coluna_total']!='' OR $consulta[$i]['rx_ombro']!='' OR $consulta[$i]['rx_joelho']!='' OR $consulta[$i]['rx_mao']!='' OR $consulta[$i]['rx_quadril']!=''){
        $tem_raiox  = "<i class='fas fa-check-circle'></i>";
        $status_raiox  = "--";
                }else{
        $tem_raiox  = "";
        }
        if($consulta1[$i]['obs_raiox']=='O'){
        $status_raiox  = "ATENDIDO";
        $cor_status_raiox   = "#32CD32";
        }
         elseif ($consulta1[$i]['obs_raiox']=='A'){
        $status_raiox  = "AGUARDANDO";
        $cor_status_raiox   = "#708090";
        }
         else{
        $status_raiox  = "";
        $cor_status_raiox   = "#708090";
        }


        

        if($consulta[$i]['espirometria']!=''){
        $tem_espiro  = "<i class='fas fa-check-circle'></i>";
        $status_espiro  = "--";
                }else{
        $tem_espiro  = "";
        }
        if($consulta1[$i]['espirometria']=='O'){
        $status_espiro  = "ATENDIDO";
        $cor_status_espiro  = "#32CD32";
        }
         elseif ($consulta1[$i]['espirometria']=='A'){
        $status_espiro  = "AGUARDANDO";
        $cor_status_espiro   = "#708090";
        }
         else{
        $status_espiro  = "";
        $cor_status_espiro   = "#708090";
        }


         if($consulta[$i]['audiometria']!=''){
        $tem_audio  = "<i class='fas fa-check-circle'></i>";
        $status_audio  = "--";
                }else{
        $tem_audio  = "";
        }
        if($consulta1[$i]['audiometria']=='O'){
        $status_audio  = "ATENDIDO";
        $cor_status_audio  = "#32CD32";
        }
         elseif ($consulta1[$i]['audiometria']=='A'){
        $status_audio  = "AGUARDANDO";
        $cor_status_audio   = "#708090";
        }
         else{
        $status_audio  = "";
        $cor_status_audio   = "#708090";
        }


        if($consulta[$i]['acuidade']!=''){
        $tem_acuidade  = "<i class='fas fa-check-circle'></i>";
        $status_acuidade  = "--";
                }else{
        $tem_acuidade  = "";
        }
        if($consulta1[$i]['acuidade']=='O'){
        $status_acuidade  = "ATENDIDO";
        $cor_status_acuidade  = "#32CD32";
        }
         elseif ($consulta1[$i]['acuidade']=='A'){
        $status_acuidade  = "AGUARDANDO";
        $cor_status_acuidade   = "#708090";
        }
         else{
        $status_acuidade  = "";
        $cor_status_acuidade   = "#708090";
        }


        if($consulta[$i]['psicossocial']!=''){
        $tem_psico  = "<i class='fas fa-check-circle'></i>";
        $status_psico  = "--";
                }else{
        $tem_psico  = "";
        }
        if($consulta1[$i]['psicossocial']=='O'){
        $status_psico  = "ATENDIDO";
        $cor_status_psico  = "#32CD32";
        }
         elseif ($consulta1[$i]['psicossocial']=='A'){
        $status_psico  = "AGUARDANDO";
        $cor_status_psico   = "#708090";
        }
         else{
        $status_psico  = "";
        $cor_status_psico   = "#708090";
        }


         if($consulta[$i]['ecg']!=''){
        $tem_ecg  = "<i class='fas fa-check-circle'></i>";
        $status_ecg  = "--";
                }else{
        $tem_ecg  = "";
        }
        if($consulta1[$i]['ecg']=='O'){
        $status_ecg  = "ATENDIDO";
        $cor_status_ecg  = "#32CD32";
        }
         elseif ($consulta1[$i]['ecg']=='A'){
        $status_ecg  = "AGUARDANDO";
        $cor_status_ecg   = "#708090";
        }
         else{
        $status_ecg  = "";
        $cor_status_ecg   = "#708090";
        }


         if($consulta[$i]['eeg']!=''){
        $tem_eeg  = "<i class='fas fa-check-circle'></i>";
        $status_eeg  = "--";
                }else{
        $tem_eeg  = "";
        }
        if($consulta1[$i]['eeg']=='O'){
        $status_eeg  = "ATENDIDO";
        $cor_status_eeg  = "#32CD32";
        }
         elseif ($consulta1[$i]['eeg']=='A'){
        $status_eeg  = "AGUARDANDO";
        $cor_status_eeg   = "#708090";
        }
         else{
        $status_eeg  = "";
        $cor_status_eeg   = "#708090";
        }



        if($consulta[$i]['laboratorio']!=''){
        $tem_lab  = "<i class='fas fa-check-circle'></i>";
        $status_lab  = "--";
                }else{
        $tem_lab  = "";
        }
        if($consulta1[$i]['obs_lab']=='O'){
        $status_lab  = "ATENDIDO";
        $cor_status_lab  = "#32CD32";
        }
         elseif ($consulta1[$i]['obs_lab']=='A'){
        $status_lab  = "AGUARDANDO";
        $cor_status_lab   = "#708090";
        }
         else{
        $status_lab  = "";
        $cor_status_lab   = "#708090";
        }




			 
  ?>

  <div class="row" style="background-color:#F0FFFF">

  	<div align="center" class="col-md-1">
  		
  		<?php echo $consulta[$i]['id'] ?>
  	</div>

  	<div class="col-md-2">
  		<?php echo $consulta[$i]['dia'] ?>/<?php echo $consulta[$i]['mes'] ?>/<?php echo $consulta[$i]['ano'] ?><br>
      <br>
      <font size="3"><i class="fas fa-user-clock"></i> Chegada: <span class="badge badge-success"><?php echo $consulta[$i]['hr_chegada'] ?></span><br>
          <i class="fas fa-history"></i> Saída: <span class="badge badge-secondary"><?php echo $consulta[$i]['hr_saida'] ?></span></font>
          <br>
          <br>
          <font size="2">Agendado por: <br>
          <?php echo $consulta[$i]['atendente'] ?></font>
          <br>
          <font size="2">Liberado por: <br>
          <?php echo $consulta[$i]['liberador'] ?></font>
  	</div>

  	<div class="col-md-1">
  		<?php echo $consulta[$i]['convenio'] ?>
  	</div>

  	<div class="col-md-2">
  		<?php echo $consulta[$i]['empresa'] ?>  		
  	</div>

  	<div class="col-md-3">
  		<strong><?php echo $consulta[$i]['nome'] ?></strong> <strong><br>
  		<h6><span class="badge badge-primary"><?php echo $consulta[$i]['tipo'] ?></span>  <span class="badge badge-primary"><?php echo $consulta[$i]['cargo'] ?></span></h6></strong><br>
      
      <?
      if($consulta[$i]['hr_saida']=='AGUARDANDO')
      {
      ?>
      <h6>
      <a href="" onclick="window.open('liberar.php?id=<?php echo $consulta[$i]['id'] ?>', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=50, LEFT=50, WIDTH=550, HEIGHT=400');">
      <button type="button" class="btn btn-outline-primary btn-sm">LIBERAR PACIENTE</button></a></h6>

      <?
    } else {

      echo "";

    }
      ?>
  	</div>

  	<div class="col-md-3">
  	<font size="1">
  	 Status [ <strong><font color="<?php echo $cor_status_clinico ?>"><?php echo $status_clinico ?></font></strong> ] | [<strong><?php echo $tem_clinico ?></strong>]-Ex Clinico<br>
  	 Status [ <strong><font color="<?php echo $cor_status_romberg ?>"><?php echo $status_romberg ?></font></strong> ] | [<strong><?php echo $tem_romberg ?></strong>]-Romberg<br>
  	 Status [ <strong><font color="<?php echo $cor_status_raiox ?>"><?php echo $status_raiox ?></font></strong> ] | [<strong><?php echo $tem_raiox ?></strong>]-Raio-x em Geral<br>
  	 Status [ <strong><font color="<?php echo $cor_status_espiro ?>"><?php echo $status_espiro ?></font></strong> ] | [<strong><?php echo $tem_espiro ?></strong>]-Espirometria<br>
  	 Status [ <strong><font color="<?php echo $cor_status_audio ?>"><?php echo $status_audio ?></font></strong> ] | [<strong><?php echo $tem_audio ?></strong>]-Audiometria<br>
  	 Status [ <strong><font color="<?php echo $cor_status_acuidade ?>"><?php echo $status_acuidade ?></font></strong> ] | [<strong><?php echo $tem_acuidade ?></strong>]-Acuidade Visual<br>
  	 Status [ <strong><font color="<?php echo $cor_status_psico ?>"><?php echo $status_psico ?></font></strong> ] | [<strong><?php echo $tem_psico ?></strong>]-Av. Psicossocial<br>
  	 Status [ <strong><font color="<?php echo $cor_status_ecg ?>"><?php echo $status_ecg ?></font></strong> ] | [<strong><?php echo $tem_ecg ?></strong>]-ECG<br>
  	 Status [ <strong><font color="<?php echo $cor_status_eeg ?>"><?php echo $status_eeg ?></font></strong> ] | [<strong><?php echo $tem_eeg ?></strong>]-EEG<br>
  	 Status [ <strong><font color="<?php echo $cor_status_lab ?>"><?php echo $status_lab ?></font></strong> ] | [<strong><?php echo $tem_lab ?></strong>]-Ex. Laboratoriais<br>
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

<?php include("../footer.php"); ?>
  </html>