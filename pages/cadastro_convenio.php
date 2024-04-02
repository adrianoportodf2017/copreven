<?php
include("../includes/autoload.php");
include("../header.php"); ?>

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

  <?php include("../footer.php"); ?>
  </html>