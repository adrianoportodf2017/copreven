

<?php

 
include("../header.php"); 


$msg                = "99";
$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');
$consulta           = select("convenio","*","WHERE nome LIKE '%'","ORDER BY nome ASC");
$consulta2          = select("atendimento","*","WHERE ex_clinico NOT LIKE '' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'","ORDER BY id ASC");

?>

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
  



  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>ÁREA GERENCIAL DE CONVÊNIOS</strong></h4>
      
      <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-body">

            <!-- Inicio da Tabela de dados completos -->
            
            <table class="table table-striped table-hover table-sm">
              <thead>
                <tr>
                  
                  <th><font size="1">Convênio</th>
                  <th><font size="1">Telefone</th>
                  <th><font size="1">Email</th>
                  <th><font size="1">Opções</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <?php 
                  if($consulta == true){
                  for ($i=0;$i<count($consulta);$i++){
                  ?>
                  
                  <td><font size="2"><?php echo $consulta[$i]['nome'] ?></td>
                  <td><font size="2"><?php echo $consulta[$i]['telefone'] ?></td>
                  <td><font size="2"><?php echo $consulta[$i]['email'] ?></td>
                  <td>

                    <font size="1">
                      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> - Editar convênio<br>
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> - <a href="cadastrar_empresa.php?id_convenio=<?php echo $consulta[$i]['id'] ?>">Cadastrar Empresa / ASO</a><br>
                      <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> - Ver Empresas<br>
                      <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> - <a href="excluir_convenio.php?id_convenio=<?php echo $consulta[$i]['id'] ?>">Excluir convênio</a>
                    </font>

                  </td>

                </tr>
                
                <?php
                } 
                }else{
                echo "Nenhum dado encontrado!";
                }
                ?>

              </tbody>
            </table>

            <!-- Fim da tabela -->

          
          </div>
        </div>
      </div>
    </div>
    

  </div>

  </body>
  <?php include("../footer.php"); ?>

  </html>