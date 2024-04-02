<?php
 include("../includes/autoload.php");
include("../header.php");

$variavel = 'O'; // Supondo que 'O' seja o valor original do status
$id1 = $_GET["id"];

$sql = "UPDATE atendimento 
        SET psicossocial = '$variavel',
            status = 'atendido'
        WHERE id = '$id1'";

$resultado = mysqli_query(connect(), $sql);

if ($resultado) {
  echo "Status do atendimento atualizado para 'Atendido' com sucesso!";
} else {
  echo "Erro ao atualizar o status do atendimento: " . mysqli_error(connect());
}

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
    window.setTimeout("window.close();", 3 * 1000);
  </script>

</head>

<body>
  <!-- Início do Menu inicial / Barra superior -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <center>
          <a class="navbar-brand" href="index.php">
           </center>
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