@extends('layouts.auth')

@section('content')
    <p class="login-box-msg">Faça o login para iniciar sua sessão</p>

        <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="input-group">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       placeholder="Informe seu Email" value="{{ old('email') }}" required autocomplete="email" >
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="Informe sua Senha" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        Lembre-me
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

        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="{{ route('password.request') }}">Esqueci meu password</a>
        </p>
        <p class="mb-0">
            <a href="{{ route('register') }}" class="text-center">Não tem uma conta? Crie agora!</a>
        </p>

@endsection
