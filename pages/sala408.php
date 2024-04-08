

<?php
include("../includes/autoload.php");
include("../header.php");



$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');


$consulta = select("atendimento","*","WHERE (rx_torax = '1') OR (rx_torax_oit = '1') OR (rx_cervical = '1') OR (rx_lombar = '1') OR (rx_lombo_sacra = '1') OR (espirometria = '1')  AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="100000000000;URL=sala408.php">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>FATURAMENTO | PREVEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  

  <body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        ''
      </a>
    </div>
  </div>
  </nav>
  <!-- Fim do bloco -->

  <div class="container">
  <div class="row">
 <br>
 <br>
 <br>
<div class="col-md-12">
<div align="center" class="panel panel-default">
<strong>RELATÓRIO DE ATENDIMENTO - SALA 408</strong>
</div>

  <div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-body">
        <?php
        $clinico = select('atendimento', '*', "WHERE (rx_torax = '1' OR rx_torax_oit = '1' OR rx_cervical = '1' OR rx_lombar = '1' OR rx_lombo_sacra = '1' OR espirometria = '1') AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
        $t_clinico = ($clinico !== false) ? count($clinico) : 0;
        
        ?>	             
	     	Total de colaboradores Sala 408: <strong><?php print $t_clinico; ?></strong>               
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