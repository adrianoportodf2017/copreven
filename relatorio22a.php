

<?php
include("funcao_select.php");

$convenio           = $_GET["convenio"];

$dia                = $_GET["dia"];
$mes                = $_GET["mes"];
$ano                = $_GET["ano"];
$empresa            = $_GET["empresa"];
$tipo               = $_GET["tipo"];
$nome               = $_GET["nome"];



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
    <meta http-equiv="refresh" content="25">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <script src="https://kit.fontawesome.com/92f06b8bd3.js"></script>
    <title>Busca Avançada | PREVEN</title>
    

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
  <div class="col-md-12">


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

      
      if($consulta[$i]['rx_torax']!='' OR $consulta[$i]['rx_torax_oit']!='' OR $consulta[$i]['rx_cervical']!='' OR $consulta[$i]['rx_lombar']!='' OR $consulta[$i]['rx_lombo_sacra']!=''){
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



  <br>

  <table class="table table-bordered">
  <tr>
    <th width="33%">Id do atendimento:<br><span class="badge badge-info"><?php echo $consulta[$i]['id'] ?></span> &nbsp;&nbsp;<a href="#" class="badge badge-secondary"><i class="far fa-edit"></i></a>&nbsp;<a href="#" class="badge badge-danger"><i class="far fa-trash-alt"></i></a></th>
    <th width="36%">
      <strong><font size="2">Nome:</font><br><?php echo $consulta[$i]['nome'] ?></strong> <strong><br>
                  <span class="badge badge-warning"><?php echo $consulta[$i]['tipo'] ?></span> | 
                  <span class="badge badge-warning"><?php echo $consulta[$i]['cargo'] ?></span>
    </th>
    <th width="30%" rowspan="3" valign="middle">
      <br>



    <font size="2">
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


    </th>
  </tr>
  <tr>
    <td>Data:<br><?php echo $consulta[$i]['dia'] ?>/<?php echo $consulta[$i]['mes'] ?>/<?php echo $consulta[$i]['ano'] ?></td>
    <td><font size="2">Convênio:</font><br><span class="badge badge-success"><?php echo $consulta[$i]['convenio'] ?></span><br>
          <font size="2">Empresa:</font><br><span class="badge badge-success"><?php echo $consulta[$i]['empresa'] ?></span></td>
  </tr>
  <tr>
    <td><font size="3"><i class="fas fa-user-clock"></i> Chegada: <span class="badge badge-success"><?php echo $consulta[$i]['hr_chegada'] ?></span> | 
      <i class="fas fa-history"></i> Saída: <span class="badge badge-secondary"><?php echo $consulta[$i]['hr_saida'] ?></span></font>
      <br>
      <center><span class="badge badge-primary"></span>  <span class="badge badge-primary"></span></h6></strong><br>
      
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
      ?></center></td>
    <td><font size="2">Agendado por: <br>
          <strong><?php echo $consulta[$i]['atendente'] ?></strong></font>
          <br>
          <font size="2">Liberado por: <br>
          <strong><?php echo $consulta[$i]['liberador'] ?></font><strong></td>
  </tr>
</table>

	<?php
	} 
	}else{
	echo "Nenhum dado encontrado!";
	}
	?>

  </div>
</div>
</div>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>