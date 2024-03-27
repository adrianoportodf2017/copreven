

<?php
include("funcao_select.php");

$consulta   = select("convenio","*","WHERE nome LIKE '%'","ORDER BY nome ASC");

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
      <a class="navbar-brand" href="index.php">
        <img class="" src="images/logo1.png" height="35px" width="">
      </a>
    </div>
  </div>
  </nav>
  <!-- Fim do bloco -->
  

  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>FATURAMENTO DE EXAMES LABORATORIAIS</strong></h4>
      <hr>
    

      <form method="GET" action="faturamentolab2.php">

      
      <div class="col-md-1">
      <h6>Mês:</h6>
      <input type="text" name="mes" size="2" class="form-control"></div>
      <div class="col-md-2">
      <h6>Ano:</h6>
      <input type="ano" name="ano" size="2" class="form-control"></div>
      <div class="col-md-5">
      <div class="form-group">
        <h6>Convênio:</h6>
        <select name="convenio" id="convenio" class="form-control">

          <option value=""><strong>TODOS</strong></option>
          <br>
          
          <?php 
          if($consulta == true){
          for ($i=0;$i<count($consulta);$i++){
          ?>

          <option value="<?php echo $consulta[$i]['nome'] ?>"><strong><?php echo $consulta[$i]['nome'] ?></strong></option>

          <?php
          } 
          }else{
          echo "Nenhum dado encontrado!";
          }
          ?>
          
        </select>

      </div>
      </div>
      <div class="col-md-8">
      <div class="form-group">
      <h6>Empresa:</h6>
      <input type="text" name="empresa" class="form-control">
      
      </label>
      </div>
      </center>
      

      </div>
      </div>
    <div align="right">
    <br>
    <br>
    <br>

      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"> </span> Buscar</button>
    </div>  
    </div>




    </form>
    <br>

      

      
    </div>
    <hr>
  </div>



  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>