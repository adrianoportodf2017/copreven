<x-admin>
    @section('title', 'Atendimento')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Atendimentos</h3>
            <div class="card-tools">
                <a href="{{ route('admin.permission.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div>
        <div class="card-body">

            <table class="table " id="collectionTable">
                <tbody>
                    <tr>
                        <th width="35%">
                            Id do atendimento: <span class="badge badge-info">16652</span> |  Data:26/07/2024                           
                            <br>
                            <i class="fas fa-user-clock"></i> Chegada: <span class="badge badge-success">17:05:53</span> |                          
                            <i class="fas fa-history"></i> Saída: <span class="badge badge-secondary">AGUARDANDO</span>

                            <hr>
                            <strong>
                                <small>Nome:</small> Adriano Alves de Oliveira Porto
                            </strong>
                            <strong>
                                <br>
                                <span class="badge badge-warning">RETORNO AO TRABALHO</span> |
                                <span class="badge badge-warning">CEO</span>
                            </strong>
                            <hr>
                            <small>Convênio: </small> <span class="badge badge-success">3C SERVIÇOS</span>
                            <br>
                            <small>Empresa: </small><span class="badge badge-success">Agencia Tecnet</span>
                            <br>
                            <small>Agendado por:</small><br>
                            <small>Liberado por:</small><br>
                        </th>
                        <th width="40%" class="align-middle border-left">
                            <small>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Ex Clinico<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Romberg<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Raio-x em Geral<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Espirometria<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Audiometria<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Acuidade Visual<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Av. Psicossocial<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-ECG<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-EEG<br>
                                Status [ <strong class="text-secondary">AGUARDANDO</strong> ] | [<strong>X</strong>]-Ex. Laboratoriais
                            </small>
                        </th>
                        <th width="25%" class="align-middle border-left">
                            <small>
                                <button class="btn btn-secondary" href="#"><i class="far fa-edit"></i></button>
                                <button class="btn btn-secondary"><i class="far fa-trash-alt"></i></button>
                                <button class="btn btn-secondary"><i class="far fa-send"></i>Liberar Acesso</button>
                            </small>
                        </th>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    @section('js')
    <script>
        $(function() {
            $('#collectionTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                responsive: true,
            });
        });
    </script>
    @endsection
</x-admin>