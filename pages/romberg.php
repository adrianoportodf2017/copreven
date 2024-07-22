
<?php
 
include("../header.php");



$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');


$consulta = select("atendimento","*","WHERE romberg LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");
$consulta2 = select("atendimento","*","WHERE romberg LIKE 'O' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="100000000000;URL=romberg.php">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>T. ROMBERG | SALA ONLINE | COPREVEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  

  <body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
       
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
<strong>RELATÓRIO DE ATENDIMENTO - T. ROMBERG</strong>
</div>

  <div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-body">
        <?php
       $clinico = select('atendimento', '*', "WHERE romberg = 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
       $t_clinico = ($clinico !== false) ? count($clinico) : 0;
        ?>	             
	     	Total de colaboradores - T. Romberg: <strong><?php print $t_clinico; ?></strong>               
	   	</div>
  	</div>
 	</div>

  <br>
  <br>

  
  <div class="col-md-6">
          <div class="panel panel-default">
            <?php listar_atendimento_salas($consulta, 'romberg') ?>
          </div>
        </div>

  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">

    <h4>Atendimento Concluído</h4><br>
    <?php 
    if($consulta2 == true){
    for ($i=0;$i<count($consulta2);$i++){
    ?>

    <ul class="list-group">
    <li class="list-group-item">
    
      <span class="badge badge-success">
      ATENDIDO</span> <?php echo $consulta2[$i]['id'] ?> |  <?php echo $consulta2[$i]['nome'] ?><br> <?php echo $consulta2[$i]['tipo'] ?> | Convênio: <?php echo $consulta2[$i]['convenio'] ?><br>Empresa: <?php echo $consulta2[$i]['empresa'] ?> <br> Nasc: <?php echo $consulta2[$i]['nascimento'] ?> | Doc: <?php echo $consulta2[$i]['rg'] ?> | Função: <?php echo $consulta2[$i]['cargo'] ?>
    </li>
    </ul>

    <?php
    } 
    }else{
    echo "Nenhum dado encontrado!";
    }
    ?>
    </div>
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