
<?php 
include("../header.php"); 

$nome               = $_GET["nome"];
$responsavel        = $_GET["responsavel"];
$telefone           = $_GET["telefone"];
$email              = $_GET["email"];
$obs                = $_GET["obs"];


$sql        = "INSERT INTO convenio VALUES";
$sql       .= "(NULL,'$nome','$responsavel','$telefone','$email','$obs')";
$resultado  = mysqli_query(connect(), "$sql");

mysqli_close(connect());

?>

<?php

$consulta   = select("convenio","*","WHERE nome LIKE '%'","ORDER BY id DESC", "limit 1");

?>



  <div class="container">
  <div class="col-md-10">
  <?php 
    
    if($consulta == true){

      for ($i=0;$i<count($consulta);$i++){

?>
  <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <strong><?php echo $consulta[$i]['nome'] ?></strong> | <font color="#666666"><?php echo $consulta[$i]['responsavel'] ?></font></h5>
  
  <?php

  } 
}else{
    echo "Nenhum dado encontrado!";
}

?>
  </div>
  <div class="col-md-2">
  <h3><?php echo date('d'); ?>/<?php echo date('m'); ?>/<?php echo date('Y'); ?></h3>    
  </div>

  <div class="col-md-12">
  <hr>
  </div>

  </div>
  </body>

  <?php include("../footer.php"); ?>

  </html>