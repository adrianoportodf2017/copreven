

<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$registro = $_GET["registro"];

$con = mysql_connect('www.copreven.com.br', 'clime938_copreve', 'copreven102030') or
die('Não foi possível conectar');
mysql_select_db("clime938_copreven", $con);
mysql_query("DELETE FROM convenio WHERE id = '$registro'");
mysql_close($con);
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
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>ALTERAR OU EXCLUIR ATENDIMENTO</strong></h4>
      <hr>
    

      
    <br>

      REGISTRO <strong><?php echo $registro; ?></strong> EXCLUÍDO COM SUCESSO !!

      
    </div>
    <hr>
  </div>



  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>