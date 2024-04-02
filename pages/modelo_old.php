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

<!doctype html>
<html>
  <head>
  	<meta charset="UTF-8"/>
    <!-- Place your kit's code here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&display=swap" rel="stylesheet">


    <script src="https://kit.fontawesome.com/92f06b8bd3.js"></script>

  </head>

  <body>
    <!-- link dos ícones Awesome - https://fontawesome.com/icons/ -->
  	<!-- ******************************************************** -->
  	<nav class="navbar navbar-light bg-light">
		<img src="http://copreven.com.br/sistema/app/images/logo1.png" width="300px">
	  	<span style="color: #CCFF00;"><i class="fas fa-network-wired" style="color: #000080"> </i> <span style="color: #000080; font-family: 'Alegreya Sans', sans-serif; font-size: 17px;"> W2W Sistemas &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></span></span>
	</nav>

	
	<div style="background-image: url('http://www.linuxcmd.org/lcshow/big/109/1098327_dr-who-wallpaper-hd.jpg'); height: 123px;">
    <div class="container">
        <br>
        <span style="color: #B0E0E6; font-family: 'Alegreya Sans', sans-serif; font-size: 30px;"><strong>Painel inicial | Atendimento</strong></span><br>
        <span style="color: #ffffff; font-family: 'Alegreya Sans', sans-serif; font-size: 15px;"><i class="fas fa-users"></i>&nbsp; Atendimentos de hoje: &nbsp;&nbsp;<?php
            $clinico = select('atendimento', '*', "WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_clinico = ($clinico !== false) ? count($clinico) : 0;
            echo $t_clinico;
            ?></span><br>
        <span style="color: #fffff8; font-family: 'Alegreya Sans', sans-serif; font-size: 15px;"><i class="fas fa-users"></i>&nbsp; Atendimentos no mês: &nbsp;&nbsp;<?php
            $clinico2 = select('atendimento', '*', "WHERE mes LIKE '%$mes%' AND ano LIKE '%$ano%' ORDER BY id");
            $t_clinico2 = ($clinico2 !== false) ? count($clinico2) : 0;
            echo $t_clinico2;
            ?></span>
    </div>
</div>


	<div class="container">
		<br>

		
		
		<div class="card">
  			<div class="card-body">
  			<center>
  			<span style="color: #000080; font-family: 'Alegreya Sans', sans-serif; font-size: 15px;">  		
    		<i class="fas fa-plus-square"></i>&nbsp;<a href="cadastro_convenio.php"> Cadastrar convênio</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-minus-square"></i>&nbsp;<a href="configuracoes.php"> Excluir convênio</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-user-times"></i>&nbsp;<a href="alterar.php"> Excluir Atendimento</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-file-pdf"></i>&nbsp;<a href="relatorio.php"> Relatório de Atendimento</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-search-dollar"></i>&nbsp;<a href="faturamento.php"> Faturamento</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-vial">&nbsp;</i><a href="faturamentolab.php"> Faturamento Lab</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-person-booth">&nbsp;</i><a href="salas.php"> Salas de Atendimento</a>
  			
  			</span></center>
  			</div>
		</div>
		<br>


		<form method="POST" action="confirma.php">
		<div class="row mx-md-n5">
			<div class="col px-md-5"><div class="p-3 border bg-light">

				<p>Selecione o convênio</p>
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

			</div>
		</div>

		
		


		<div class="col px-md-5"><div class="p-3 border bg-light">
			
				<div class="form-group">
	        	<input type="hidden" name="dia" class="form-control" value="<?php echo date('d'); ?>">
		      	<input type="hidden" name="mes" class="form-control" value="<?php echo date('m'); ?>">
		      	<input type="hidden" name="ano" class="form-control" value="<?php echo date('Y'); ?>">
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
		        
	        
		        <h6>Tipo de atendimento:</h6>
		        
		        <select name="tipo" id="tipo" class="form-control" width="250px" >
	            
		            <option value="ADMISSIONAL"><strong>ADMISSIONAL</strong></option>
		            <option value="DEMISSIONAL"><strong>DEMISSIONAL</strong></option>
		            <option value="PERIÓDICO"><strong>PERIÓDICO</strong></option>
		            <option value="RETORNO AO TRABALHO"><strong>RETORNO AO TRABALHO</strong></option>
		            <option value="MUDANÇA DE FUNÇÃO"><strong>MUDANÇA DE FUNÇÃO</strong></option>
                      
        		</select>

        		<div align="right">
        			<br>
        			<button type="submit" class="btn btn-info">Continuar</button><font color="#FFFFFF">....</font>
      			</div>
      			</form>     
        </div>
	</div>
		
		
	<hr>

  	
  	
  </body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>