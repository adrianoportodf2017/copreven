

<?php

include("../includes/autoload.php");
include("../header.php"); 

$registro           = $_GET["id_convenio"];


$consulta   = select("convenio","*","WHERE id LIKE '$registro'","ORDER BY id DESC");

?>



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
  <?php include("../footer.php"); ?>

  </html>