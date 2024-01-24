@extends('layouts.app')

@section('title')
    Вход в систему
@endsection

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="c-content-panel">
                <div class="c-body">
                    <div class="c-content-title-1 c-title-md c-margin-b-20 clearfix">
                        <h3 class="c-center c-font-uppercase c-font-bold"><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Form Title" data-translation="Вход на сайт" data-ch="0" data-type="trSpan" data-selected="false">Войдите на сайт</ya-tr-span></h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>
                    <br>
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-4 control-label"><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email" data-translation="Электронная почта" data-ch="0" data-type="trSpan">Электронная почта</ya-tr-span></label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-md-4 control-label"><ya-tr-span data-index="12-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-ch="0" data-type="trSpan">Пароль</ya-tr-span></label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Запомнить меня') }}
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group c-margin-t-40">
                            <div class="col-sm-offset-4 col-md-8">
                                <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                    <ya-tr-span data-index="39-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Submit" data-translation="Отправить" data-ch="0" data-type="trSpan">
                                        {{ __('Войти') }}
                                    </ya-tr-span>
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-default c-btn-square c-btn-uppercase c-btn-bold" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
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
@endsection
