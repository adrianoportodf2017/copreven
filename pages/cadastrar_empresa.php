<?php


 
include("../header.php");

$convenio1          = $_GET["id_convenio"];
$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');
$consulta           = select("convenio", "*", "WHERE id LIKE '$convenio1'", "ORDER BY id DESC");
$consulta2          = select("empresas", "*", "WHERE convenio_id LIKE '$convenio1'", "ORDER BY id DESC");

?>



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4>
        <font size="4" color="#00CC00"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></font>
        <font color="#FFFFFF">--</font><strong>ÁREA GERENCIAL DE CONVÊNIOS</strong> | Cadastro de Empresas
      </h4>

      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-info">
        <div class="panel-body">

          <font size="2">
            <span class="label label-info">Resumo do Convênio</span><br><br>
            <table class="table table-striped table-hover table-sm">

              <?php
              if ($consulta == true) {
                for ($i = 0; $i < count($consulta); $i++) {
              ?>

                  <tbody>
                    <tr>
                      <td>Nome</td>
                      <td><strong><?php echo $consulta[$i]['nome'] ?></strong></td>
                    </tr>
                    <tr>
                      <td>Responsável </td>
                      <td><strong><?php echo $consulta[$i]['responsavel'] ?></strong></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><strong><?php echo $consulta[$i]['email'] ?></strong></td>
                    </tr>
                    <tr>
                      <td>Total de empresas</td>
                      <td><strong><span class="badge">

                            <?php
                        $empresas = select('empresas', '*', "WHERE convenio_id = '{$convenio1}'");
                        $t_empresas = ($empresas !== false) ? count($empresas) : 0;
                            ?>
                            <?php print $t_empresas; ?>

                          </span></strong></td>
                    </tr>
                  </tbody>
              <?php
                }
              } else {
                echo "Nenhum dado encontrado!";
              }
              ?>


            </table>
          </font>


        </div>
      </div>
    </div>


    <font size="1">
      <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">Insira as informações para habilitar o ASO</div>
          <div class="panel-body">

            <form>

              <div class="form-group row">
                <label for="razaosocial" class="col-sm-2 col-form-label">Razão Social</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="razaosocial" placeholder="Razão social completa">
                </div>
              </div>

              <div class="form-group row">
                <label for="cnpj" class="col-sm-2 col-form-label">CNPJ</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cnpj" placeholder="CNPJ - somente números">
                </div>
              </div>

              <div class="form-group row">
                <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="endereco" placeholder="Ex, Rua da Quitanda, 194 Sala 407">
                </div>
              </div>

              <div class="form-group row">
                <label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                </div>
              </div>

              <div class="form-group row">
                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="estado" placeholder="Estado">
                </div>
              </div>

              <div class="form-group row">
                <label for="cep" class="col-sm-2 col-form-label">CEP</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cep" placeholder="CEP">
                </div>
              </div>

              <div class="form-group row">
                <label for="medico" class="col-sm-2 col-form-label">Médico</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="medico" placeholder="Nome completo do médico coordenador do PCMSO">
                </div>
              </div>

              <div class="form-group row">
                <label for="crm" class="col-sm-2 col-form-label">CRM</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="crm" placeholder="CRM do médico coordenador">
                </div>
              </div>


              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-info">Cadastrar</button>
                </div>
              </div>

            </form>

          </div>
        </div>

      </div>

  </div>


</div>

</body>

 <?php include("../footer.php"); ?>


</html>