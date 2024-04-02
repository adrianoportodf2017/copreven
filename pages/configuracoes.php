

<?php


include("../includes/autoload.php");
include("../header.php"); 

$msg                = "99";
$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');
$consulta           = select("convenio","*","WHERE nome LIKE '%'","ORDER BY nome ASC");
$consulta2          = select("atendimento","*","WHERE ex_clinico NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");

?>



  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>CONFIGURAÇÕES AVANÇADAS</strong></h4>
      <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-body">
            <h5><strong>Cadastro de empresas por convênio</strong></h5><br>
            
            <font size="3">Veja a <strong><a href="relacao_convenio.php"><font color="#696969"><font color="red"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></font> relação completa</font></a></strong></font>
                      
          </div>
        </div>
      </div>
    </div>
    

  </div>

  </body>

  <?php include("../footer.php"); ?>

  </html>