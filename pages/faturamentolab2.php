<?php
include("../header.php");

$convenio = isset($_GET["convenio"]) ? $_GET["convenio"] : '';
$dia = isset($_GET["dia"]) ? $_GET["dia"] : '';
$mes = isset($_GET["mes"]) ? $_GET["mes"] : '';
$ano = isset($_GET["ano"]) ? $_GET["ano"] : '';
$empresa = isset($_GET["empresa"]) ? $_GET["empresa"] : '';
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : '';
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';


$consulta = select("atendimento","*","WHERE laboratorio NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%'","ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<strong>RELATÓRIO DE FATURAMENTO - PREVEN EXAMES COMPLEMENTARES
</div></strong> 
</div>

  <div class="col-md-12">
  	<div class="panel panel-default">
        <div class="panel-body">
       
      	Convênio: <strong><?php echo $convenio ?></strong><br>
       	Mês e ano de referência: <strong><?php echo $mes ?> / <?php echo $ano ?></strong>
        </div>
    </div>

    <div class="panel panel-default">
	    <div class="panel-body">
        <?php
      $lab = select('atendimento', '*', "WHERE laboratorio != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
      $count = ($lab !== false) ? count($lab) : 0;
      
        ?>	             
	     	Total de colaboradores encaminhados: <strong><?php print $count; ?></strong>               
	   	</div>
  	</div>

 	</div>


  <div class="col-md-12">
    <div class="panel panel-default">
          



  <?php 

  if($consulta == true){
  for ($i=0;$i<count($consulta);$i++){
  ?>


  <?php echo $consulta[$i]['nome'] ?> - <?php echo $consulta[$i]['laboratorio'] ?>  <br>    
     





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
<?phpinclude("../footer.php"); ?>
  </html>