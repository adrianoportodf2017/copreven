

<?php
include("includes/conecta_mysql.inc");

$variavel 	= 'O';
$id1 		= $_GET["id"];

$sql        = "UPDATE atendimento 
			   SET obs_raiox = '$variavel'
			   WHERE id LIKE '$id1'";

$resultado  = mysql_query("$sql");
mysql_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Copreven | CONFIRMAÇÃO DE ATENDIMENTO =)</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
  window.setTimeout ("window.close();", 3 * 1000);
</script>

  </head>
  <body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header"><center>
      <a class="navbar-brand" href="index.php">
        <img class="" src="images/logo1.png" height="35px" width=""></center>
      </a>
    </div>
  </div>
  </nav>
  <br>
  <br>
  <center>

  	<h3>Atendimento <strong>baixado</strong> com sucesso !!<h3>
  		<br><br>

  	<h1>:)</h1>

  </center>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>
