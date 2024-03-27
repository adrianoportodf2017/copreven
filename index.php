<?php
include('header.php');
include('functions/home.php');
?>

<div class="header-container" style="background-image: url('assets/images/topo.jpg'); height: 120px;">
    <div class="container">
        <span class="header-title text-light"><strong>Painel inicial | Recepção</strong></span><br>
        <span class="header-info text-light"><i class="fas fa-users"></i>&nbsp; Atendimentos de hoje: &nbsp;&nbsp; <?php echo $t_clinico; ?></span><br>
        <span class="header-info text-light"><i class="fas fa-users"></i>&nbsp; Atendimentos no mês: &nbsp;&nbsp; <?php echo $t_clinico2; ?><br>
        <span class="header-info text-light">Em espera: <span class="badge badge-warning"><?php echo $t_fila; ?></span></span>
    </div>
</div>

<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <center>
                <span class="menu-options">
                    <i class="fas fa-plus-square"></i>&nbsp;<a href="cadastro_convenio.php"> Cadastrar convênio</a>&nbsp; &nbsp; &nbsp;
                    <i class="fas fa-minus-square"></i>&nbsp;<a href="configuracoes.php"> Excluir convênio</a>&nbsp; &nbsp; &nbsp;
                    <i class="fas fa-user-times"></i>&nbsp;<a href="alterar.php"> Excluir Atendimento</a>&nbsp; &nbsp; &nbsp;
                    <i class="fas fa-file-pdf"></i>&nbsp;<a href="relatorio.php"> Relatório de Atendimento</a>&nbsp; &nbsp; &nbsp;
                    <i class="fas fa-search-dollar"></i>&nbsp;<a href="faturamento.php"> Faturamento</a>&nbsp; &nbsp; &nbsp;
                    <i class="fas fa-vial">&nbsp;</i><a href="faturamentolab.php"> Faturamento Lab</a>&nbsp; &nbsp; &nbsp;
                    <i class="fas fa-person-booth">&nbsp;</i><a href="salas.php"> Salas de Atendimento</a>
                </span>
            </center>
        </div>
    </div>
    <br>

    <div class="row mx-md-n5">
        <div class="col px-md-5">
            <div class="p-3 border bg-light">
                <i class="fas fa-search"></i> <strong>Consultar Atendimento:</strong><br>
                <form class="form-inline" action="pages/relatorio22.php" method="GET">
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
                    <form action="relatorio22a.php" method="GET">
                        <input type="hidden" name="dia" class="form-control" value="<?php echo date('d'); ?>">
                        <input type="hidden" name="mes" class="form-control" value="<?php echo date('m'); ?>">
                        <input type="hidden" name="ano" class="form-control" value="<?php echo date('Y'); ?>">
                        <input type="hidden" name="nome" class="form-control" value="%">
                        <button type="submit" class="btn btn-success"><i class="far fa-eye"></i> Ver Todos</button>
                        <font color="#FFFFFF"></font>
                    </form>
                </center>
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
        <div class="col px-md-5">
            <div class="p-3 border bg-light">
                <div class="form-group">
                    <form method="POST" action="confirma.php">
                        <input type="hidden" name="dia" class="form-control" value="<?php echo date('d'); ?>">
                        <input type="hidden" name="mes" class="form-control" value="<?php echo date('m'); ?>">
                        <input type="hidden" name="ano" class="form-control" value="<?php echo date('Y'); ?>">
                        <i class="fas fa-user-md"></i> <strong>Iniciar Atendimento:</strong><br><br>
                        <select name="convenio" id="convenio" class="form-control alert-primary">
                            <?php
                            if ($consulta == true) {
                                for ($i = 0; $i < count($consulta); $i++) {
                            ?>
                                    <option value="<?php echo $consulta[$i]['nome'] ?>"><strong><?php echo $consulta[$i]['nome'] ?></strong></option>
                            <?php
                                }
                            } else {
                                echo "Nenhum dado encontrado!";
                            }
                            ?>
                        </select>
                        <br>
                        <input type="text" name="empresa" class="form-control" required="required" placeholder="Empresa">
                        <input type="text" name="nome" class="form-control" required="required" placeholder="Nome do colaborador">
                        <input type="text" name="rg" class="form-control" required="required" placeholder="RG">
                        <input type="text" name="cargo" class="form-control" required="required" placeholder="Função">
                        <input OnKeyPress="formatar(this, '##/##/####')" maxlength="10" type="text" name="nascimento" class="form-control" required="required" placeholder="Nascimento">
                        <br>
                        <h6>Tipo de atendimento:</h6>
                        <select name="tipo" id="tipo"  class="form-control" width="250px">
                            <option value="ADMISSIONAL"><strong>ADMISSIONAL</strong></option>
                            <option value="DEMISSIONAL"><strong>DEMISSIONAL</strong></option>
                            <option value="PERIÓDICO"><strong>PERIÓDICO</strong></option>
                            <option value="RETORNO AO TRABALHO"><strong>RETORNO AO TRABALHO</strong></option>
                            <option value="MUDANÇA DE FUNÇÃO"><strong>MUDANÇA DE FUNÇÃO</strong></option>
                        </select>
                        <div align="right">
                            <br>
                            <button type="submit" class="btn btn-primary">Continuar</button>
                            <font color="#FFFFFF">....</font>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
