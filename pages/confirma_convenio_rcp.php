<?php
include("../header.php");

$nome               = $_GET["nome"];
$responsavel        = $_GET["responsavel"];
$telefone           = $_GET["telefone"];
$email              = $_GET["email"];
$obs                = $_GET["obs"];


$sql        = "INSERT INTO convenio VALUES";
$sql       .= "(NULL,'$nome','$responsavel','$telefone','$email','$obs')";
$resultado  = mysqli_query(connect(), "$sql");

mysqli_close(connect(), $conexao);

?><?php
include("../header.php");

$consulta   = select("convenio","*","WHERE nome LIKE '%'","ORDER BY id DESC", "limit 1");

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
  <div class="col-md-10">
  <?php 
    
    if($consulta == true){

      for ($i=0;$i<count($consulta);$i++){

?>
  <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <strong><?php echo $consulta[$i]['nome'] ?></strong> | <font color="#666666"><?php echo $consulta[$i]['responsavel'] ?></font></h5>
  
  <?php

  } 
}else{
    echo "Nenhum dado encontrado!";
}

?>
  </div>
  <div class="col-md-2">
  <h3><?php echo date('d'); ?>/<?php echo date('m'); ?>/<?php echo date('Y'); ?></h3>    
  </div>

  <div class="col-md-12">
  <hr>
  </div>

  </div>
  </body>
<?phpinclude("../footer.php"); ?>
  </html>