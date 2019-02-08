@extends('welcome')
@section('content')
<div class="container-fluid px-3">
    <div class="row min-vh-100">
        <div class="col-md-5 col-lg-6 col-xl-4 px-lg-5 d-flex align-items-center">
            <div class="w-100 py-5">
                <div class="text-center wow fadeInDown" data-wow-delay="0.5s">
                    <i class="fab fa-laravel "></i>
                    <img src="{{url('img/laravel-brands.svg')}}" alt="..." style="max-width: 6rem;">
                    <h1 class="display-4 mb-3">Iniciar Sesión</h1>
                </div>

                <form method="POST" action="{{ route('login') }}" class="form-validate">
                    @csrf
                    <div class="form-group required wow fadeInLeft"
                    data-wow-delay="1s">

                        <label class="control-label">Email</label>
                        <input name="email" type="email" placeholder="name@address.com" autocomplete="off" data-msg="Introduce tu email" class="form-control" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group mb-4 wow fadeInLeft"
                    data-wow-delay="1s"">
                        <div class="row">
                            <div class="col">
                                <label class="control-label">Contraseña</label>
                            </div>
                        </div>
                        <input name="password" placeholder="Password" type="password" required data-msg="Please enter your password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <div class="col-auto
wow fadeInLeft"
                    data-wow-delay="1.5s"
                        "><a href="#" class="form-text small text-muted">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <!-- Submit-->
                <button type="submit" class="btn btn-lg btn-block btn-primary mb-3
wow fadeInLeft"
                    data-wow-delay="2s
                ">Ingresar</button>
                <!-- Link-->
                <p class="text-center
wow fadeInLeft"
                    data-wow-delay="2s"><small class="text-muted text-center">¿No tiene cuenta? <a href="register-2.html">Registrar</a>.</small></p>
            </form>
        </div>
    </div>
    <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Image-->
<div style="background-image: url(img/photos/victor-ene-1301123-unsplash.jpg);"
class="bg-cover h-100 mr-n3
wow fadeInRight" data-wow-delay="0.5s"></div>
    </div>
</div>
</div>
{{--}}
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
--}}
@endsection
