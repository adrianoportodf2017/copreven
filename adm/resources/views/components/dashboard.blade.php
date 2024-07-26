<div class="row">
    @role('admin')
    <div class="col-lg-2 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>232</h3>
                <p>Atendimentos de Hoje</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-day"></i>
            </div>
            <a href="" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-2 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>1906</h3>
                <p>Atendimentos no Mês</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <a href="" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-2 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>232</h3>
                <p>Em Espera</p>
            </div>
            <div class="icon">
                <i class="fas fa-hourglass-half"></i>
            </div>
            <a href="" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-2 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>Cadastro</h3>
                <p>Cadastrar Convênio</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-medical"></i>
            </div>
            <a href="" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-2 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>Salas</h3>
                <p>Salas de Atendimento</p>
            </div>
            <div class="icon">
                <i class="fas fa-door-open"></i>
            </div>
            <a href="" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endrole
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="p-3   rounded">
                    <div class="mb-3">
                        <i class="fas fa-search"></i> <strong>Consultar Atendimento:</strong>
                    </div>
                    <form class="form-inline" action="pages/relatorio22.php" method="GET">
                        <div class="form-group mb-2">
                            <label for="nome" class="sr-only">Nome</label>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Ver</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <form action="pages/relatorio22a.php" method="GET">
                            <button type="submit" class="btn btn-success"><i class="far fa-eye"></i> Ver Todos</button>
                        </form>
                    </div>
                </div>

                <br>
               
            </div>
            <div class="p-3 border bg-light rounded">
                    <p align="justify">
                        <i class="fas fa-file-medical-alt"></i> <strong>Novidade:</strong><br><br>
                        Tenha mais funcionalidade no sistema: Oriente as salas de atendimento a darem baixa nos pacientes que concluirem o procedimento. Acompanhe tudo.<br>
                    </p>
                </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">
                        <div class="mb-3">
                            <i class="fas fa-user-md"></i>
                            <strong>Iniciar Atendimento:</strong>
                        </div>
                    </h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <div class="card-body table-responsive p-0">
                        <div class="p-3 border bg-light rounded">
                            <div class="form-group">
                                <form method="POST" action="pages/confirma.php">

                                    <div class="mb-3">
                                        <label for="convenio" class="form-label">Convênio</label>
                                        <select name="convenio" id="convenio" class="form-control ">
                                            <!-- Opções do convênio -->
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="empresa" class="form-label">Empresa</label>
                                        <input type="text" name="empresa" id="empresa" class="form-control" required placeholder="Empresa">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome do Colaborador</label>
                                        <input type="text" name="nome" id="nome" class="form-control" required placeholder="Nome do colaborador">
                                    </div>
                                    <div class="mb-3">
                                        <label for="rg" class="form-label">RG</label>
                                        <input type="text" name="rg" id="rg" class="form-control" required placeholder="RG">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cargo" class="form-label">Função</label>
                                        <input type="text" name="cargo" id="cargo" class="form-control" required placeholder="Função">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nascimento" class="form-label">Nascimento</label>
                                        <input onkeypress="formatar(this, '##/##/####')" maxlength="10" type="text" name="nascimento" id="nascimento" class="form-control" required placeholder="Nascimento">
                                    </div>
                                    <div class="mb-3">
                                        <h6>Tipo de Atendimento:</h6>
                                        <select name="tipo" id="tipo" class="form-control">
                                            <option value="ADMISSIONAL">ADMISSIONAL</option>
                                            <option value="DEMISSIONAL">DEMISSIONAL</option>
                                            <option value="PERIÓDICO">PERIÓDICO</option>
                                            <option value="RETORNO AO TRABALHO">RETORNO AO TRABALHO</option>
                                            <option value="MUDANÇA DE FUNÇÃO">MUDANÇA DE FUNÇÃO</option>
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Continuar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>