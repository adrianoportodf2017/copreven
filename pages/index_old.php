<?php
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a página de autenticação
    header('location:../index.php');
}
?>

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
        ''
      </a>
      
    </div>
  </div>
  </nav>
  <!-- Fim do bloco -->
  

  <div class="container">
    <div class="row">
      <div class="col-md-9">
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-random" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>ATENDIMENTO INICIAL</strong></h4>
      <hr>
    

      <form method="POST" action="confirma.php">

      <input type="hidden" name="dia" class="form-control" value="<?php echo date('d'); ?>">
      <input type="hidden" name="mes" class="form-control" value="<?php echo date('m'); ?>">
      <input type="hidden" name="ano" class="form-control" value="<?php echo date('Y'); ?>">

      <div class="col-md-3">
        <div class="form-group">
        <h6>Convênio:</h6>
        <select name="convenio" id="convenio" class="form-control alert-success">
          
          <?php 
          if($consulta == true){
          for ($i=0;$i<count($consulta);$i++){
          ?>

          <option value="<?php echo $consulta[$i]['nome'] ?>"><strong><?php echo $consulta[$i]['nome'] ?></strong></option>

          <?php
          } 
          }else{
          echo "Nenhum dado encontrado!";
          }
          ?>
          
        </select>
        <br>
        <br>
        <hr>
        
        <span class="label label-danger">Atenção:</span><br>
        <div align="justify"><font size="1">Estamos implantando a emissão do ASO através do nosso sistema. Operadores, por gentileza começar a recolher informações básicas das empresas como Razão Social, CNPJ, Endereço completo com CEP, Nome e CRM do médico coordenador do PCMSO.</font>
        </div>
        <hr>
        </div>
      </div>

      <div class="col-md-1">
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <h6>Empresa:</h6>
        <input type="text" name="empresa" class="form-control" required="required">
        <h6>Nome do colaborador:</h6>
        <input type="text" name="nome" class="form-control" required="required">
        <h6>Identidade:</h6>
        <input  type="text" name="rg" class="form-control" required="required">
        <h6>Função:</h6>
        <input type="text" name="cargo" class="form-control" required="required">
        <h6>Nascimento:</h6>
        <input OnKeyPress="formatar(this, '##/##/####')" maxlength="10" type="text" name="nascimento" class="form-control" required="required">
        <hr>
        
        <h6>Tipo de atendimento:</h6>
        <select name="tipo" id="tipo" class="form-control" width="250px" >
            
            <option value="ADMISSIONAL"><strong>ADMISSIONAL</strong></option>
            <option value="DEMISSIONAL"><strong>DEMISSIONAL</strong></option>
            <option value="PERIÓDICO"><strong>PERIÓDICO</strong></option>
            <option value="RETORNO AO TRABALHO"><strong>RETORNO AO TRABALHO</strong></option>
            <option value="MUDANÇA DE FUNÇÃO"><strong>MUDANÇA DE FUNÇÃO</strong></option>
                      
        </select>      
        </div>
      </div>
      
      <div align="right">
      <br><br><br>
        <button type="submit" class="btn btn-info">Continuar</button><font color="#FFFFFF">....</font>
      </div>  
    </div>

    </form>
      

      <div class="col-md-3">

        <div class="panel panel-info">
          <div class="panel-body">
          <span class="label label-warning">Informações Básicas:</span><br><br>
          <font size="1">

            <font color="red"><span class="glyphicon glyphicon-tasks"></span></font> Versão do Sistema: <strong>1.1.0</strong>
            <br>
            <font color="red"><span class="glyphicon glyphicon-user"></span></font> Copreven - Usuário padrão<font color="#FFFFFF">....</font> | <font color="#FFFFFF">....</font><a href="../logout.php"><font color="#B22222"><span class="glyphicon glyphicon-off"></span></font> Sair</a><br>
            <a href="configuracoes.php"><font color="red"><span class="glyphicon glyphicon-cog"></span></font> Configurações Avançadas</a>


          </font>
          
          <hr>
          
          <font size="1">TOTAL DE ATENDIMENTOS HOJE: <strong><font color="blue">
            <?php
           $clinico = select('atendimento', '*', "WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
           $t_clinico = ($clinico !== false) ? count($clinico) : 0;
            ?>
            <?php print $t_clinico; ?>
          </strong></font></font><br>
          <font size="1">TOTAL DE ATENDIMENTOS / MÊS: <strong><font color="blue">
            <?php
         $clinico2 = select('atendimento', '*', "WHERE mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
         $t_clinico2 = ($clinico2 !== false) ? count($clinico2) : 0;
            ?>
            <?php print $t_clinico2; ?>
          </strong></font></font>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <span class="label label-warning">Operações Básicas:</span>
            <br><br>
            <h6><font color="#3366FF"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font> <a href="cadastro_convenio.php">Cadastrar Convênio</a></h6>
            <h6><font color="red"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font> <a href="alterar.php">Excluir Atendimento</a></h6>
            <h6><h6><font color="#3366FF"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font> <a href="relatorio.php">Relatório de Atendimento</a></h6>
            <h6><h6><font color="#3366FF"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><a href="faturamento.php">Faturamento</h6></a>
            <h6><h6><font color="#3366FF"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><a href="faturamentolab.php">Faturamento Laboratorio</h6></a>
            <h6><h6><font color="#3366FF"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><a href="salas.php">Salas de Atendimento</h6></a>         
            
            
            <hr>
            <font size="1"><center>Desenvolvido por <strong>W2W</strong></font><br><p>
            <center><a href="http://www.web2work.com.br" target="_blank"><img src="http://www.web2work.com.br/2018/images/logo.png" width="40%" height="40%"></a></center>
          </div>
        </div>



      </div>
    </div>
  </div>



  </body>

<?php include("../footer.php"); ?>
  <script> 
function formatar(src, mask) 
{ 
  var i = src.value.length; 
  var saida = mask.substring(0,1); 
  var texto = mask.substring(i) 
if (texto.substring(0,1) != saida) 
  { 
        src.value += texto.substring(0,1); 
  } 
} 
</script> 


  </html>