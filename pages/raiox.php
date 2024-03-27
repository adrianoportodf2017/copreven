
<?php
include("funcao_select.php");
include("pdo.php");


$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');


$consulta = select("atendimento","*","WHERE obs_raiox LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");
$consulta2 = select("atendimento","*","WHERE obs_raiox LIKE 'O' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>RAIO-X | SALA ONLINE | COPREVEN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  

  <body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">
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
<strong>RELATÓRIO DE ATENDIMENTO - RAIO-X [GERAL]</strong>
</div>

  <div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-body">
        <?php
        $raiox = $pdo->query("SELECT * FROM atendimento WHERE obs_raiox LIKE 'A'  AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id")->fetchAll();
        $t_raiox = count($raiox);
        ?>	             
	     	Total de colaboradores - Raio-X: <strong><?php print $t_raiox; ?></strong>               
	   	</div>
  	</div>
 	</div>

  <br>
  <br>

  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
    <h4>Aguardando Atendimento</h4><br>
  
  <?php 

  if($consulta == true){
  for ($i=0;$i<count($consulta);$i++){

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

        if($consulta[$i]['rx_torax_pa_perfil']!=''){
        $tem_pa_perfil      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_pa_perfil      = "";
        }

        if($consulta[$i]['rx_coluna_total']!=''){
        $tem_coluna_total      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_coluna_total      = "";
        }

        if($consulta[$i]['rx_ombro']!=''){
        $tem_ombro      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_ombro      = "";
        }

        if($consulta[$i]['rx_joelho']!=''){
        $tem_joelho      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_joelho      = "";
        }

        if($consulta[$i]['rx_mao']!=''){
        $tem_mao      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_mao      = "";
        }

        if($consulta[$i]['rx_quadril']!=''){
        $tem_quadril      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_quadril      = "";
        }


  
  ?>

  

  <ul class="list-group">
    <li class="list-group-item">
    <a href ="#" onclick="window.open('raiox_ok.php?id=<?php echo $consulta[$i]['id'] ?>', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=50, LEFT=50, WIDTH=550, HEIGHT=400');">
      <button type="button" class="btn btn-outline-primary">
      CONFIRMAR ATENDIMENTO</button></a> <?php echo $consulta[$i]['id'] ?> |  <?php echo $consulta[$i]['nome'] ?><br> <?php echo $consulta[$i]['tipo'] ?> | Convênio: <?php echo $consulta[$i]['convenio'] ?><br>Empresa: <?php echo $consulta[$i]['empresa'] ?> <br> Nasc: <?php echo $consulta[$i]['nascimento'] ?> | Doc: <?php echo $consulta[$i]['rg'] ?> | Função: <?php echo $consulta[$i]['cargo'] ?> <br>
      [<font color="#2E8B57"><?php echo $tem_torax; ?></font>] TÓRAX | 
      [<font color="#2E8B57"><?php echo $tem_oit; ?></font>] TÓRAX OIT | 
      [<font color="#2E8B57"><?php echo $tem_cervical; ?></font>] CERVICAL | 
      [<font color="#2E8B57"><?php echo $tem_lombar; ?></font>] LOMBAR | 
      [<font color="#2E8B57"><?php echo $tem_sacra; ?></font>] LOMBO-SACRA | 
      [<font color="#2E8B57"><?php echo $tem_pa_perfil; ?></font>] TÓRAX PA/PERF | 
      [<font color="#2E8B57"><?php echo $tem_coluna_total; ?></font>] COLUNA TOTAL |
      [<font color="#2E8B57"><?php echo $tem_ombro; ?></font>] OMBRO | 
      [<font color="#2E8B57"><?php echo $tem_joelho; ?></font>] JOELHO | 
      [<font color="#2E8B57"><?php echo $tem_mao; ?></font>] MÃO | 
      [<font color="#2E8B57"><?php echo $tem_quadril; ?></font>] QUADRIL |   
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


  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">

    <h4>Atendimento Concluído</h4><br>
    

    <?php 

    if($consulta2 == true){
    for ($i2=0;$i2<count($consulta2);$i2++){

    if($consulta2[$i2]['rx_torax']!=''){
        $tem_torax2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_torax2     = "";
        }

        if($consulta2[$i2]['rx_torax_oit']!=''){
        $tem_oit2     = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_oit2      = "";
        }

        if($consulta2[$i2]['rx_cervical']!=''){
        $tem_cervical2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_cervical2      = "";
        }

        if($consulta2[$i2]['rx_lombar']!=''){
        $tem_lombar2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_lombar2      = "";
        }

        if($consulta2[$i2]['rx_lombo_sacra']!=''){
        $tem_sacra2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_sacra2      = "";
        }

        if($consulta2[$i2]['rx_torax_pa_perfil']!=''){
        $tem_pa_perfil2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_pa_perfil2      = "";
        }

        if($consulta2[$i2]['rx_coluna_total']!=''){
        $tem_coluna_total2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_coluna_total2      = "";
        }

        if($consulta2[$i2]['rx_ombro']!=''){
        $tem_ombro2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_ombro2      = "";
        }

        if($consulta2[$i2]['rx_joelho']!=''){
        $tem_joelho2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_joelho2      = "";
        }

        if($consulta2[$i2]['rx_mao']!=''){
        $tem_mao2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_mao2      = "";
        }

        if($consulta2[$i2]['rx_quadril']!=''){
        $tem_quadril2      = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>";
        }else{
        $tem_quadril2      = "";
        }


  
  ?>



    <ul class="list-group">
    <li class="list-group-item">
    
      <span class="badge badge-success">
      ATENDIDO</span> <?php echo $consulta2[$i2]['id'] ?> |  <?php echo $consulta2[$i2]['nome'] ?><br> <?php echo $consulta2[$i2]['tipo'] ?> | Convênio: <?php echo $consulta2[$i2]['convenio'] ?><br>Empresa: <?php echo $consulta2[$i2]['empresa'] ?> <br> Nasc: <?php echo $consulta2[$i2]['nascimento'] ?> | Doc: <?php echo $consulta2[$i2]['rg'] ?> | Função: <?php echo $consulta2[$i2]['cargo'] ?> <br>
      [<font color="#2E8B57"><?php echo $tem_torax2; ?></font>] TÓRAX | 
      [<font color="#2E8B57"><?php echo $tem_oit2; ?></font>] TÓRAX OIT | 
      [<font color="#2E8B57"><?php echo $tem_cervical2; ?></font>] CERVICAL | 
      [<font color="#2E8B57"><?php echo $tem_lombar2; ?></font>] LOMBAR | 
      [<font color="#2E8B57"><?php echo $tem_sacra2; ?></font>] LOMBO-SACRA | 
      [<font color="#2E8B57"><?php echo $tem_pa_perfil2; ?></font>] TÓRAX PA/PERF | 
      [<font color="#2E8B57"><?php echo $tem_coluna_total2; ?></font>] COLUNA TOTAL |
      [<font color="#2E8B57"><?php echo $tem_ombro2; ?></font>] OMBRO | 
      [<font color="#2E8B57"><?php echo $tem_joelho2; ?></font>] JOELHO | 
      [<font color="#2E8B57"><?php echo $tem_mao2; ?></font>] MÃO | 
      [<font color="#2E8B57"><?php echo $tem_quadril2; ?></font>] QUADRIL |   
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>