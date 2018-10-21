@extends('auth.main')

@section('title', 'Login')

@section('contenido')
<div class="login-box-body">
    <p class="login-box-msg">Iniciar Cesion</p>

    <form method="POST" action="{{ route('login') }}">
            @csrf            
            <div class="form-group has-feedback">
                <input id="email" type="email" placeholder="ejemplo@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}  " name="email" value="{{ old('email') }}" required autofocus  >
                <span class="fa fa-user form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                                
            </div>
                        
            <div class="form-group has-feedback">
                <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <span class="fa fa-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                     <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                     </span>
                @endif
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvide mi contraseña?') }}
                    </a>
                                
                </div>
                <a  class="nav-link" href="{{ route('register') }}">{{ __('Crear Cuenta') }}</a>
            </div>
    </form>

   
  </div>
@endsection

