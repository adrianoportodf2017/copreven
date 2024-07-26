<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>

        @role('admin')
            <!-- Usuários e Permissões -->
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link {{ Route::is('admin.user.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Usuários
                        <span class="badge badge-info right">{{ $userCount }}</span>
                    </p>
                </a>
            </li>
        

            <!-- Atendimentos -->
            <li class="nav-item">
                <a href="{{ route('admin.consultas.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Lista de Atendimentos</p>
                </a>
            </li>

            <!-- Convênios -->
            <li class="nav-item">
                <a href="{{ route('admin.convenios.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Lista de Convênios</p>
                </a>
            </li>

            <!-- Pacientes -->
            <li class="nav-item">
                <a href="{{ route('admin.pacientes.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Lista de Pacientes</p>
                </a>
            </li>

            <!-- Médicos -->
            <li class="nav-item">
                <a href="{{ route('admin.medicos.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user-md"></i>
                    <p>Lista de Médicos</p>
                </a>
            </li>

            <!-- Salas de Atendimento -->
            <li class="nav-item">
                <a href="{{ route('admin.salas.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-door-open"></i>
                    <p>Lista de Salas</p>
                </a>
            </li>

            <!-- Faturamento -->
            <li class="nav-header">FATURAMENTO</li>
            <li class="nav-item">
                <a href="{{ route('admin.faturamento.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-dollar-sign"></i>
                    <p>Faturamento</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.faturamento.laboratorio') }}" class="nav-link">
                    <i class="nav-icon fas fa-vial"></i>
                    <p>Faturamento Laboratório</p>
                </a>
            </li>
        @endrole

        <!-- Perfil -->
        <li class="nav-item">
            <a href="{{ route('admin.profile.edit') }}" class="nav-link {{ Route::is('admin.profile.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>
                <p>Perfil</p>
            </a>
        </li>
    </ul>
</nav>
