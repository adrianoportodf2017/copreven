<x-guest-layout>
    @section('title')
        {{ 'Entrar' }}
    @endsection
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Entre para iniciar sua sessão</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" class="form-control" type="password" name="password" required
                            autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="social-auth-links text-center mb-3">
                 <!--    <p>- OU -</p>
                    <a href="{{ route('facebook.login') }}" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Entrar com Facebook
                    </a>
                    <a href="{{ route('google.login') }}" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Entrar com Google+
                    </a>
                    <a href="{{ route('github.login') }}" class="btn btn-block btn-dark">
                        <i class="fab fa-github mr-2"></i> Entrar com Github
                    </a>
                </div>-->
                <p class="mb-1">
                    <a href="{{ route('password.request') }}">Esqueci minha senha</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center">Registrar uma nova conta</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</x-guest-layout>
