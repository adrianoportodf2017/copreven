

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
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>CADASTRO DE CONVÊNIO</strong></h4>
      <hr>
      </div>
    </div>

    <form method="GET" action="confirma_convenio.php">
    
    <div class="row">
      <div class="col-md-4">
        <h6>Nome do convênio:</h6>
        <input type="text" name="nome" class="form-control" required="required">  
      </div>
      <div class="col-md-4">
        <h6>Pessoa de contato:</h6>
        <input type="text" name="responsavel" class="form-control" required="required">  
      </div>
      <div class="col-md-4">
        <h6>Telefone principal:</h6>
        <input type="text" name="telefone" class="form-control" required="required">
      </div>
      <div class="col-md-4">
        <h6>Email principal:</h6>
        <input type="text" name="email" class="form-control" required="required">
      </div>
      <div class="col-md-6">
        <h6>Observações gerais:</h6>
        <textarea name="obs" class="form-control" required="required"></textarea>
      </div>
      <div class="col-md-2" align="right">
        <br><br>
        <button type="submit" class="btn btn-info">Salvar</button>
      </div>

    </div>
    </form>

  </div>

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </html>