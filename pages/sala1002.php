

<?php
include("../includes/autoload.php");
include("../header.php");



$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');


$consulta = select("atendimento","*","WHERE (audiometria = '1') OR (acuidade = '1') OR (psicossocial = '1') OR (ecg = '1') OR (eeg = '1') AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10;URL=sala1002.php">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>FATURAMENTO | PREVEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  



  <div class="container">
  <div class="row">
 <br>
 <br>
 <br>
<div class="col-md-12">
<div align="center" class="panel panel-default">
<strong>RELATÓRIO DE ATENDIMENTO - SALA 1.002</strong>
</div>

  <div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-body">
        <?php
       $clinico = select('atendimento', '*', "WHERE (audiometria = '1' OR acuidade = '1' OR psicossocial = '1' OR ecg = '1' OR eeg = '1') AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
       $t_clinico = ($clinico !== false) ? count($clinico) : 0;
        ?>	             
	     	Total de colaboradores Sala 1.002: <strong><?php print $t_clinico; ?></strong>               
	   	</div>
  	</div>
 	</div>


  <div class="col-md-12">
    <div class="panel panel-default">
          



  <?php 

  if($consulta == true){
  for ($i=0;$i<count($consulta);$i++){
  ?>

  <?php echo $consulta[$i]['nome'] ?><br>    

  <?php
  } 
  }else{
  echo "Nenhum dado encontrado!";
  }
  ?>



      </div>
  </div>

  


  

  


<br>
<br>
<br>
<br>
  


    </div>
  </div>
  

  </body>

<?php include("../footer.php"); ?>
  </html>