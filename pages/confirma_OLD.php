
<?php 
include("../header.php");

$consulta   = select("atendimento","*","WHERE nome LIKE '%'","ORDER BY id DESC", "limit 1");

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
  <div class="col-md-10">
  <?php 
    
    if($consulta == true){

      for ($i=0;$i<count($consulta);$i++){

?>
  <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <strong><?php echo $consulta[$i]['nome'] ?></strong> | <font color="#666666"><?php echo $consulta[$i]['tipo'] ?></font></h5>
  <h4><?php echo $consulta[$i]['empresa'] ?></h4>  
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
  <div class="row"> 
  <form action="confirma2.php" method="post">
  <div class="col-md-3">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Unidade <strong>305</strong></h4>
    <hr>
    
      <br>
      <input type="checkbox" value="1">
      EXAME CLÍNICO
      

      <br>
      <input type="checkbox" value="1">
      TESTE DE ROMBERG
      
    </div>
    </div>
    <br>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Unidade <strong>406</strong></h4>
    <hr>
      
      <h6>EXAMES LABORATORIAIS:</h6>
      <textarea name="obs" class="form-control" required="required"></textarea>

      
    </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Unidade <strong>408</strong></h4>
    <hr>
    
      
      <input type="checkbox" value="1">
      RAIO-X TÓRAX
      <br>

      <input type="checkbox" value="1">
      RAIO-X TÓRAX (OIT)
      <br>
      
      <input type="checkbox" value="1">
      RAIO-X CERVICAL
      <br>
      
      <input type="checkbox" value="1">
      RAIO-X LOMBAR
      <br>
      
      <input type="checkbox" value="1">
      RAIO-X LOMBO-SACRA
      
      <hr>
      <label>
      <input type="checkbox" value="1">
      ESPIROMETRIA
      </label>

    </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
    <div class="panel-body">
    <h4> Unidade <strong>1.002</strong></h4>
    <hr>
    <br>
      
      <input type="checkbox" value="1">
      AUDIOMETRIA
      <br>

      <input type="checkbox" value="1">
      ACUIDADE VISUAL
      <br>

      <input type="checkbox" value="1">
      AV. PSICOSSOCIAL
      <br>

      <input type="checkbox" value="1">
      ECG
      <br>

      <input type="checkbox" value="1">
      EEG
      <br>

    </div>
    </div>
  </div>
  </form>


  </div>
  </body>

<?php include("../footer.php"); ?>
  </html>