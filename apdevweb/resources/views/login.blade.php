@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')

    @include('inc.menu')

    <h1>Login</h1>

    {{ Form::open(array('route' => 'login', 'class' => 'form')) }}
        <p>
            {{ Form::email('email', '', array('placeholder' => __('messages.yourEmail'))) }}
        </p>

        <p>
            {{ Form::password('password', array('placeholder' => __('messages.yourPassword'))) }}
        </p>

        <p class='manterlogado'>
            {{ Form::checkbox('remember') }}
            {{ Form::label('remember', __('messages.rememberMe'))}}
            <a class="recupearSenha" href="/recuperarSenha">@lang('messages.forgotYourPassword')</a>
        </p>

        <p>
            {{ Form::submit(__('messages.login')) }}
        </p>

        <div>
            <p>
                <a class="semConta" href="/cadastro">Ainda não tem acesso? <strong>@lang('messages.Register')</strong></a>
            </p>
        </div>

    {{ Form::close() }}

@endsection
