<?php 
include("../header.php");

$consulta   = select("convenio","*","WHERE nome LIKE '%'","ORDER BY nome ASC");

?>

  

  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>FATURAMENTO</strong></h4>
      <hr>
    

      <form method="GET" action="faturamento2.php">

      
      <div class="col-md-1">
      <h6>Mês:</h6>
      <input type="text" name="mes" size="2" class="form-control"></div>
      <div class="col-md-2">
      <h6>Ano:</h6>
      <input type="ano" name="ano" size="2" class="form-control"></div>
      <div class="col-md-5">
      <div class="form-group">
        <h6>Convênio:</h6>
        <select name="convenio" id="convenio" class="form-control">

          <option value=""><strong>TODOS</strong></option>
          <br>
          
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
      <div class="col-md-8">
      <div class="form-group">
      <h6>Empresa:</h6>
      <input type="text" name="empresa" class="form-control">
      
      </label>
      </div>
      </center>
      

      </div>
      </div>
    <div align="right">
    <br>
    <br>
    <br>

      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"> </span> Buscar</button>
    </div>  
    </div>




    </form>
    <br>

      

      
    </div>
    <hr>
  </div>



  </body>

<?php include("../footer.php"); ?>
  </html>