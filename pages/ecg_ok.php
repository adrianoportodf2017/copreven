<?php
include("../header.php");

$variavel 	= 'O';
$id1 		= $_GET["id"];

$sql        = "UPDATE atendimento 
			   SET ecg = '$variavel'
			   WHERE id LIKE '$id1'";

$resultado  = mysqli_query(connect(), "$sql");
mysqli_close(connect());

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
        ''</center>
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
<?php include("../footer.php"); ?>
  </html>
