

<?php
include("funcao_select.php");
include("pdo.php");

$convenio = isset($_GET["convenio"]) ? $_GET["convenio"] : '';
$dia = isset($_GET["dia"]) ? $_GET["dia"] : '';
$mes = isset($_GET["mes"]) ? $_GET["mes"] : '';
$ano = isset($_GET["ano"]) ? $_GET["ano"] : '';
$empresa = isset($_GET["empresa"]) ? $_GET["empresa"] : '';
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : '';
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';


$consulta = select("atendimento","*","WHERE convenio LIKE '%$convenio%' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND empresa LIKE '%$empresa%'","ORDER BY id DESC");

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
        $geral = $pdo->query("SELECT * FROM atendimento WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
        $count = count($geral);
        ?>	             
	     	Total de colaboradores encaminhados: <strong><?php print $count; ?></strong>               
	   	</div>
  	</div>

 	</div>


  <div class="col-md-3">
    <div class="panel panel-default">
                          
            Exames Clínicos:    
            <?php
            $clinico = $pdo->query("SELECT * FROM atendimento WHERE ex_clinico NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_clinico = count($clinico);
            ?>
            <strong><?php print $t_clinico; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                           
            Teste de Romberg:
            <?php
            $romberg = $pdo->query("SELECT * FROM atendimento WHERE romberg NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_romberg = count($romberg);
            ?>
            <strong><?php print $t_romberg; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                           
            Raio-x Tórax:
            <?php
            $rx_torax = $pdo->query("SELECT * FROM atendimento WHERE rx_torax NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_rx_torax = count($rx_torax);
            ?>
            <strong><?php print $t_rx_torax; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                           
            Raio-x Tórax OIT:
            <?php
            $torax_oit = $pdo->query("SELECT * FROM atendimento WHERE rx_torax_oit NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_oit = count($torax_oit);
            ?>
            <strong><?php print $t_oit; ?></strong>   
          
      </div>
  </div>

<div class="col-md-3">
    <div class="panel panel-default">
                           
            Raio-x Col Cervical:
            <?php
            $cervical = $pdo->query("SELECT * FROM atendimento WHERE rx_cervical NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_cervical = count($cervical);
            ?>
            <strong><?php print $t_cervical; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                         
            Raio-x Col Lombar:
            <?php
            $lombar = $pdo->query("SELECT * FROM atendimento WHERE rx_lombar NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_lombar = count($lombar);
            ?>
            <strong><?php print $t_lombar; ?></strong>   
          
      </div>
  </div>

   <div class="col-md-3">
    <div class="panel panel-default">
                           
            Raio-x L. Sacra:
            <?php
            $sacra = $pdo->query("SELECT * FROM atendimento WHERE rx_lombo_sacra NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_sacra = count($sacra);
            ?>
            <strong><?php print $t_sacra; ?></strong>   
          
      </div>
  </div>

   <div class="col-md-3">
    <div class="panel panel-default">
                           
            Espirometria:
            <?php
            $espiro = $pdo->query("SELECT * FROM atendimento WHERE espirometria NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_espiro = count($espiro);
            ?>
            <strong><?php print $t_espiro; ?></strong>   
          
      </div>
  </div>


  <div class="col-md-3">
    <div class="panel panel-default">
                           
            Audiometria:
            <?php
            $audio = $pdo->query("SELECT * FROM atendimento WHERE audiometria NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_audio = count($audio);
            ?>
            <strong><?php print $t_audio; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                         
            Acuidade Visual:
            <?php
            $acuidade = $pdo->query("SELECT * FROM atendimento WHERE acuidade NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_acuidade = count($acuidade);
            ?>
            <strong><?php print $t_acuidade; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                          
            Av. Psicossocial:
            <?php
            $psico = $pdo->query("SELECT * FROM atendimento WHERE psicossocial NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_psico = count($psico);
            ?>
            <strong><?php print $t_psico; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                       
            Eletrocardiograma:
            <?php
            $ecg = $pdo->query("SELECT * FROM atendimento WHERE ecg NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_ecg = count($ecg);
            ?>
            <strong><?php print $t_ecg; ?></strong>   
          
      </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
                         
            Eletroencefalograma:
            <?php
            $eeg = $pdo->query("SELECT * FROM atendimento WHERE eeg NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND convenio LIKE '%$convenio%' AND empresa LIKE '%$empresa%' ORDER BY id")->fetchAll();
            $t_eeg = count($eeg);
            ?>
            <strong><?php print $t_eeg; ?></strong>   
          
      </div>
  </div>
<br>
  <div class="col-md-9">
    <div class="panel panel-default">
                         
            Relatório de Exames Laboratoriais em anexo
            
             
          
      </div>

  </div>


<br>
<br>
  <div class="col-md-12">
  <input type="text" name="empresa" class="form-control" required="required"> 
  </div>



    </div>
  </div>
  

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>