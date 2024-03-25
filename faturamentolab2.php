

<?php
include("funcao_select.php");
include("pdo.php");

$convenio           = $_GET["convenio"];

$dia                = $_GET["dia"];
$mes                = $_GET["mes"];
$ano                = $_GET["ano"];
$empresa            = $_GET["empresa"];


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
        $lab = $pdo->query("SELECT * FROM atendimento WHERE laboratorio NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
        $count = count($lab);
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>