

<?php

include("funcao_select.php");
include("pdo.php");

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
    <title>Controle de Atendimento | PREVEN</title>

  </head>

  <body>
    <!-- link dos ícones Awesome - https://fontawesome.com/icons/ -->
  	<!-- ******************************************************** -->
  	<nav class="navbar navbar-light bg-light">
		<img src="http://copreven.com.br/sistema/app/images/logo1.png" width="300px">
	  	<span style="color: #000080;"><i class="far fa-user" style="color: #000080"> </i> <span style="color: #000080; font-family: 'Alegreya Sans', sans-serif; font-size: 17px;"> <? echo $_SESSION['login'] ?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></span></span>
	</nav>

	
	<div style="background-image: url('images/topo.jpg'); height: 100px;">
		<div class="container" style=""><br>
		
		<span style="color: #B0E0E6; font-family: 'Alegreya Sans', sans-serif; font-size: 30px;"><strong>Painel inicial | Recepção</strong></span><br>
			<div align="right">
				<span style="color: #B0E0E6; font-family: 'Alegreya Sans', sans-serif; font-size: 20px;">Em espera: <span class="badge badge-warning">

					<?php
		            $fila = $pdo->query("SELECT * FROM atendimento WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND hr_saida LIKE 'AGUARDANDO'")->fetchAll();
		            $t_fila = count($fila);
		            ?>
            		<?php print $t_fila; ?>

				</span></span>
			</div>
		</div>
	</div>

	<div class="container">
		<br>

		
		
		<div class="card">
  			<div class="card-body">
  			<center>
  			<span style="color: #000080; font-family: 'Alegreya Sans', sans-serif; font-size: 15px;">  		
    		<i class="fas fa-plus-square"></i>&nbsp;<a href="cadastro_convenio_rcp.php"> Cadastrar convênio</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-file-pdf"></i>&nbsp;<a href="relatorio_rcp.php"> Relatório de Atendimento</a>&nbsp; &nbsp; &nbsp;
    		<i class="fas fa-person-booth">&nbsp;</i><a href="salas_rcp.php"> Salas de Atendimento</a>
  			
  			</span></center>
  			</div>
		</div>
		<br>


		

		
		<div class="row mx-md-n5">



			<div class="col px-md-5"><div class="p-3 border bg-light">

				
				
				<i class="fas fa-search"></i> <strong>Consultar Atendimento:</strong><br>


				
				<p>

					<form class="form-inline" action="relatorio22_rcp.php" method="GET">
					  <div class="form-group mb-2">
					    <label for="staticEmail2" class="sr-only"></label>
					    
					    <input type="hidden" name="dia" class="form-control" value="<?php echo date('d'); ?>">
					    <input type="hidden" name="mes" class="form-control" value="<?php echo date('m'); ?>">
					    <input type="hidden" name="ano" class="form-control" value="<?php echo date('Y'); ?>">
					    
					  </div>

					  <div class="form-group mx-sm-3 mb-2">
					    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
					  </div>
					  
					  <button type="submit" class="btn btn-primary mb-2">Ver</button>
					</form>
					<br>
					<hr>
					<center>					
					<form action="relatorio22_rcp.php" method="GET">							
							<input type="hidden" name="dia" class="form-control" value="<?php echo date('d'); ?>">
					      	<input type="hidden" name="mes" class="form-control" value="<?php echo date('m'); ?>">
					      	<input type="hidden" name="ano" class="form-control" value="<?php echo date('Y'); ?>">
					   		<input type="hidden" name="nome" class="form-control" value="%">
		        		<button type="submit" class="btn btn-success"><i class="far fa-eye"></i> Ver Todos</button><font color="#FFFFFF"></font>
					</form>
					</center>
				</p>
			
				

			</div>
			<br>

			<div class="p-3 border bg-light">
				
				<p align="justify">
					<i class="fas fa-file-medical-alt"></i> <strong>Novidade:</strong><br><br>
					Tenha mais funcionalidade no sistema: Oriente as salas de atendimento a darem baixa nos pacientes que concluirem o procedimento. Acompanhe tudo.<br>
					Experimente clicar acima em "<strong><font color="#6495ED"><i class="far fa-eye"></i> Ver Todos</font></strong>" =). 
				</p>

			</div>
			
		</div>

		<div class="col px-md-5"><div class="p-3 border bg-light">
			
				<div class="form-group">
	        	
		      	
				<form method="POST" action="confirma_rcp.php">
				<input type="hidden" name="dia" class="form-control" value="<?php echo date('d'); ?>">
		      	<input type="hidden" name="mes" class="form-control" value="<?php echo date('m'); ?>">
		      	<input type="hidden" name="ano" class="form-control" value="<?php echo date('Y'); ?>">

				<i class="fas fa-user-md"></i> <strong>Iniciar Atendimento:</strong><br><br>

				<select name="convenio" id="convenio" class="form-control alert-primary">
          
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
		        <input type="text" name="empresa" class="form-control" required="required" placeholder="Empresa">
		      
		        <input type="text" name="nome" class="form-control" required="required" placeholder="Nome do colaborador">
		        
		        <input  type="text" name="rg" class="form-control" required="required" placeholder="RG">
		        
		        <input type="text" name="cargo" class="form-control" required="required" placeholder="Função">
		        
		        <input OnKeyPress="formatar(this, '##/##/####')" maxlength="10" type="text" name="nascimento" class="form-control" required="required" placeholder="Nascimento">
		        
	        	<br>
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
        			<button type="submit" class="btn btn-primary">Continuar</button><font color="#FFFFFF">....</font>
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