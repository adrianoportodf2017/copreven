

<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$registro = $_GET["registro"];
include("../includes/autoload.php");
include("../header.php");

$sql = "DELETE FROM atendimento WHERE id = '$registro'";
mysqli_query(connect(),$sql );
mysqli_close(connect());
?>



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

<?php include("../footer.php"); ?>
  </html>