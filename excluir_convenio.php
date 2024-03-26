

<?php
include("funcao_select.php");

$registro           = $_GET["id_convenio"];


$consulta   = select("convenio","*","WHERE id LIKE '$registro'","ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Busca Avançada | PREVEN</title>
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
  	
  
  <div class="col-md-1">
  ID:<br>
  <?php echo $registro ?>
  </div>	

  

  <div class="col-md-1">
  Convenio:<br><?php echo $consulta['0']['nome'] ?>
  </div>

  
<br>
<br>

	
  

  <a href="excluir_convenio_2.php?registro=<?php echo $registro ?>"><button type="button" class="btn btn-danger btn-sm">Deletar Registro</button></a><br><br>
  <font size="2"><span color="red" class="glyphicon glyphicon-info-sign"></span> <strong>Atenção</strong>, essa operação não poderá ser desfeita. 
  Após clicar no botão acima, os dados desse atendimento serão <strong>excluídos</strong>!</font>

  </div>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>