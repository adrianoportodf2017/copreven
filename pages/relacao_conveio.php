<?php

 
include("../header.php");


$msg                = "99";
$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');
$consulta           = select("convenio","*","WHERE nome LIKE '%'","ORDER BY nome ASC");
$consulta2          = select("atendimento","*","WHERE ex_clinico NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Controle de Atendimento | PREVEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  



  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>CONFIGURAÇÕES AVANÇADAS</strong></h4>
      <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-body">
            
          
          </div>
        </div>
      </div>
    </div>
    

  </div>

  </body>

<?php include("../footer.php"); ?>
  </html>