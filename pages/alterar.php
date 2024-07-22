
<?php
 
include("../header.php");

$consulta   = select("convenio","*","WHERE nome LIKE '%'","ORDER BY nome ASC");

?>



  <div class="container m-5">
    <div class="row">
      <div class="col-md-12">
      <h4><font size="4" color="#00CC00"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></font> <font color="#FFFFFF">--</font><strong>ALTERAR OU EXCLUIR ATENDIMENTO</strong></h4>
      <hr>
    

      <form method="GET" action="alterar2.php">

      
      <div class="col-md-1">
      <h6>REGISTRO:</h6>
      <input type="text" name="registro" size="2" class="form-control"><br> 
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"> </span> Buscar </button>
      </div>
      
      </center>
      

    
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