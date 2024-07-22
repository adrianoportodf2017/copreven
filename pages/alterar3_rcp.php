<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$registro = $_GET["registro"];

include('conexao.php');
$sql = "DELETE FROM atendimento WHERE id = '$registro'";
mysqli_query(connect(),$sql );
mysqli_close(connect());
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
<?phpinclude("../footer.php"); ?>
  </html>